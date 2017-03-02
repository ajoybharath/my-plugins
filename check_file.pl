#!/usr/bin/perl
#
# Nagios Plugin to monitor changes in files
#
# This program is free software: and released under the terms of the
# GNU General Public License as published by the
# Free Software Foundation, either version 3 of the License, or
# (at your option) any later version.
#
#  This program is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU General Public License for more details.
#
#  Please refer <http://www.gnu.org/licenses/>.
# ----------------------------------------------------------------------------
# Created date 2013-07-20
# Written by Ajoy Bharath

use strict;
use warnings;
use Getopt::Long;
my (%ERRORS) = ( OK => 0, CRITICAL => 2, UNKNOWN => 3, CRIT => 2 );

my $help;
my ($file, $critical);
my $seekfile;
my @differ;
my @difference;

# Get command line options
GetOptions (
        "h|help"        => \$help,
        "f|file=s"      => \$file,
        "s|seek=s"      => \$seekfile,
        "c|critical=i"  => \$critical,
);

# Usage info
sub print_help () {
        print "Usage: $0 [-h | --help][-f | --file filename] [-s | --seek filename] -c | --critical\n";
        print "Thresholds are expressed in minutes.\n";
        exit $ERRORS{'UNKNOWN'};
}

# Error handler
sub print_error {
        my $msg = $_[0];
        print "$msg\n" if $msg;
        exit $ERRORS{'CRITICAL'};
}

# Input validation
!($help) || print_help();
($file) || print_error("No file specified");
($seekfile) || print_error("No seek file specified");
($critical) || print_error("No critical threshold specified");

# Checking files
unless (-e "$file") { print_error("$file not found or not readable"); }
unless (-e "$seekfile") { print_error("$seekfile not found or not readable"); }

# Check timestamp on te file

my $mtime = (stat("$file"))[9];      

# Check the difference in the files

@differ = `diff -r  $file $seekfile`;
if(@differ) {
        push (@difference, @differ);
} else {
        push (@difference, 'No Changes');
}

# Compare  file against thresholds
if ($mtime > $critical && @difference ne 'No Changes') {
        my $rmtime = scalar localtime${mtime};
        my $rcritical = scalar localtime${critical};
            print "CRITICAL: $file has a modified time of $rmtime and our threshold is $rcritical \n";
            print "@difference \n";
        exit $ERRORS{'CRITICAL'};
} else {
        my $rmtime = scalar localtime${mtime};
        my $rcritical = scalar localtime${critical};
			print "OK - $file modified time $rmtime matches the threshold $rcritical\n";
            print "@difference \n";
        exit $ERRORS{'OK'};
}