#!/usr/bin/perl

# check_mounts
#
# Checks mounted partitions for any read-only mounts
# this script uses /proc/mounts file
#
# This program is free software: and released under the terms of the
# GNU General Public License as published by the
# Free Software Foundation, either version 3 of the License, or
# (at your option) any later version.
#
#  This program is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU General Public License for more details
#
#  Please refer <http://www.gnu.org/licenses/>.
# ----------------------------------------------------------------------------
# Created date 2014-02-24
# Written by Ajoy Bharath

use strict;
use warnings;
use Getopt::Long;
use lib "/usr/lib64/nagios/plugins";
use utils qw (%ERRORS &support);

my $name = 'MOUNTS';
my $mtab = '/proc/mounts';
my @includes = ();
my @excludes = ();
my @excluded_types = ();
my @ro_mounts = ();
my $help = 0;
my $version = '1.0';
my $prog = 'check_mounts';
my %STATUS_CODE = (
                        'OK'       => '0',
                        'WARNING'  => '1',
                        'CRITICAL' => '2' ,
                        'UNKNOWN'  => '3'
);

Getopt::Long::Configure(qw(no_ignore_case));
my $optns = GetOptions(
    "help|h" => \$help,
    "mtab|m=s" => \$mtab,
    "path|p=s" => \@includes,
    "partition=s" => \@includes,
    "exclude|x=s" => \@excludes,
    "exclude-type|X=s" => \@excluded_types,
);

if ($help or !$optns) {
    print_help();
    exit $ERRORS{$optns ? 'OK' : 'UNKNOWN'};
}

my $includes_re       = globs2re(@includes);
my $excludes_re       = globs2re(@excludes);
my $excluded_types_re = globs2re(@excluded_types);

open(MTAB, $mtab) or my_exit(UNKNOWN => "Can't open $mtab: $!");
MOUNT: while (<MTAB>) {
    # parse mtab lines
    my ($dev, $dir, $fs, $opt) = split;
    my @opts = split(',', $opt);

    # check includes/excludes
    if ($includes_re) {
        next MOUNT unless $dev =~ qr/$includes_re/
                       or $dir =~ qr/$includes_re/;
    }
    if ($excludes_re) {
        next MOUNT if $dev =~ qr/$excludes_re/
                   or $dir =~ qr/$excludes_re/;
    }
    if ($excluded_types_re) {
        next MOUNT if $fs =~ qr/$excluded_types_re/;
    }

    # check for ro option
    if (grep /^ro$/, @opts) {
        push @ro_mounts, $dir;
    }
}
my_exit(UNKNOWN => "Read failed on $mtab: $!") if $!;
close(MTAB) or my_exit(UNKNOWN => "Can't close $mtab: $!");

# report findings
if (@ro_mounts) {
    my_exit(CRITICAL => "Found ro mounts: @ro_mounts");
} else {
    my_exit(OK => "No ro mounts found");
}

# convert glob patterns to a RE (undef if no patterns)
sub globs2re {
    my(@patterns) = @_;

    @patterns or return undef;
    foreach (@patterns) {
        s/ \\(.)       / sprintf('\x%02X', ord($1)) /egx;
        s/ ([^\\*?\w]) / sprintf('\x%02X', ord($1)) /egx;
        s/\*/.*/g;
        s/\?/./g;
    }
    return '\A(?:' . join('|', @patterns) . ')\z';
}

# Nagios plugin exit sub routine
sub my_exit {
    my ($result, $msg) = @_;

    print "$name $result: $msg\n";
    exit $ERRORS{$result};
}

sub print_help {
    print <<EOH;
Plugin: $prog $version
Copyleft (c) 2017 Ajoy Bharath

This plugin checks the /proc/mounts and alerts for any read only filesystem.


Usage:
  check_mounts [-m mtab] [-p path] [-x path] [-X type]

Options:
 -h, --help
    Print detailed help screen
 -m, --mtab=FILE
    Use this mtab instead (default is /proc/mounts)
 -p, --path=PATH, --partition=PARTITION
    Glob pattern of path or partition to check (may be repeated)
 -x, --exclude=PATH <STRING>
    Glob pattern of path or partition to ignore (only works if -p unspecified)
 -X, --exclude-type=TYPE <STRING>
    Ignore all filesystems of indicated type (may be repeated)

EOH
}