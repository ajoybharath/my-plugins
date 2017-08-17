#!/usr/bin/perl

# check_pwage.pl
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
# Created date 2014-05-27
# Written by Ajoy Bharath

use strict;
use warnings;
use Getopt::Std;

my $program_name = "check_pwage";
my $program_version = "1.0";

my %ERRORS = ('UNKNOWN' , '3',
              'OK' , '0',
              'WARNING', '1',
              'CRITICAL', '2' );

my $state = "UNKNOWN";
my @shent;
my @userent;
my $daysleft;
my $days;
my @users;
my $accts = '';
my %opts = ();

getopts("hva", \%opts);
if ($opts{v}) {
    # Display the version
    print "$program_name $program_version \n";
    exit(-1);
}
if ($opts{h}) {
    # Help
    print "$program_name $program_version\n";
    print "usage: ", $program_name," [options]\n";
    print " -h: Print the command line help\n";
    print " -v: Print the program version\n";
    print "Copyleft (c) 2017 Ajoy Bharath\n";
    exit (-1);
}

if ($opts{a}) {
    $accts = $opts{a};
}

# should be same as /etc/login.defs
#my $LOW_UID=500;
#my $HIGH_UID=1000;

# Set the current day reference
my $curdays = int(time() / (60 * 60 * 24));

# create the list

open(SH, "< /etc/shadow");
@list = <SH>;
close SH;
@lines = grep(/$accts/, @list);
open my $fh, '>', "/tmp/accounts.txt" or die "Cannot open accounts.txt: $!";
foreach (@lines)
{
    print $fh "$_\n";
}
close $fh;

# Now go through the list

open(AC, "< /tmp/accounts.txt");
while (<AC>) {
    @shent = split(':', $_);
    @userent = getpwnam($shent[0]);
    if ($userent[2] >= $LOW_UID && $userent[2] <= $HIGH_UID) {
    if ($curdays > $shent[2] + $shent[4] - $shent[5] &&
        $shent[4] != -1 && $shent[4] != 0 &&
        $shent[5] != -1 && $shent[5] != 0) {
        $daysleft = ($shent[2] + $shent[4]) - $curdays;
        if ($daysleft == 1) { $days = "day"; } else {$days = "days"; }
            if ($daysleft < 0) { next; }
    push(@users, $shent[0])
     }
     }
    @userent = getpwent();
}
my $count = $#users + 1;
if ($count == 0) {
  print "OK - All accounts are good\n";
  $state = "OK";
} else {
  print "CRITICAL - Some accounts are about to expire: USERID :- @users\n";
  $state = "CRITICAL";
    }
exit $ERRORS{$state};
