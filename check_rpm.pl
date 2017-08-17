#!/usr/bin/perl -w
#
# check_rpm.pl
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
# Created date 2013-10-17
# Written by Ajoy Bharath

my $program_name = "check_rpm";
my $program_version = "1.0";
my $program_date = "22/12/2013";

use strict;
use lib "/usr/local/nagios/libexec";
use Getopt::Std;

# Globals variables
#------------------

my $RPM = '/bin/rpm -qa --last |/usr/bin/head -1 |/bin/cut -d " " -f1';
my %ERRORS = ('UNKNOWN' , '3',
              'OK' , '0',
              'WARNING', '1',
              'CRITICAL', '2' );
my $state = "UNKNOWN";
my $answer = "";

# Processing arguments
#-----------------------------

my %opts = ();
getopts("hv", \%opts);
if ($opts{v}) {
    # Display the version
    print "$program_name $program_version ($program_date)\n";
    exit(-1);
}
if ($opts{h}) {
    # Help
    print "$program_name $program_version\n";
    print "usage: ", $program_name,"\n";
    print " -h: Print the command line help\n";
    print " -v: Print the program version\n";
    print "Copyleft (c) 2017 Ajoy Bharath\n";
    exit (-1);
}

# Main program
#-------------

system("$RPM > /tmp/rpm.tmp") == 0
        or die "$state: $RPM failed ($?)";

my @pkg = `/bin/rpm -qa --last |/usr/bin/head -1|/bin/cut -d " " -f1'`;
my @updttime = `/bin/rpm -qa --last |/usr/bin/head -1|/bin/cut -d " " -f2'`;
		
my $diff = system("diff -r /tmp/rpm.tmp /tmp/rpm.seek");

if(0 != $diff) { 
	$state = "CRITICAL";
	print "The RPM @pkg is installed at @updttime"
} else { 
	$state = "OK";
	print "RPM db is unaltered..!!\n"
} 

system("rm -f /tmp/rpm.tmp") == 0
        or die "$state: Can not delete /tmp/rpm.tmp ($?)";

exit $ERRORS{$state};