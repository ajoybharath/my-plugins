#!/usr/bin/perl -w
#
# check_attack.pl
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
# Created date 2013-11-26
# Written by Ajoy Bharath

my $program_name = "check_attack";
my $program_version = "1.0";
my $program_date = "22/11/2013";

use strict;
use lib "/usr/local/nagios/libexec";
use Getopt::Std;

# Globals variables
#------------------

my $netstat = '/bin/netstat -ant';
my %ERRORS = ('UNKNOWN' , '3',
              'OK' , '0',
              'WARNING', '1',
              'CRITICAL', '2' );
my $state = "UNKNOWN";
my $answer = "";
my $warning;
my $critical;

# Processing arguments
#-----------------------------

my %opts = ();
getopts("hvw:c:", \%opts);
if ($opts{v}) {
    # Display the version
    print "$program_name $program_version ($program_date)\n";
    exit(-1);
}
if ($opts{h} || (!$opts{w} || !$opts{c})) {
    # Help
    print "$program_name $program_version\n";
    print "usage: ", $program_name," [options]\n";
    print " -h: Print the command line help\n";
    print " -v: Print the program version\n";
    print " -w <int>: Warning value (number of SYN_RECV)\n";
    print " -c <int>: Critical value (number of SYN_RECV)\n";
    print "Copyleft (c) 2017 Ajoy Bharath\n";
    exit (-1);
}

# Get the warning value
if ($opts{w}) {
    $warning = $opts{w};
}

# Get the warning value
if ($opts{c}) {
    $critical = $opts{c};
}

# Main program
#-------------

system("$netstat > /tmp/check_attack.res") == 0
        or die "$state: $netstat failed ($?)";

my $ddos = `grep SYN_RECV /tmp/check_attack.res | wc -l`;
chomp $ddos;
my $output = `grep SYN_RECV /tmp/check_attack.res | awk {'print \$5'} | cut -f 1 -d ":" | sort | uniq -c | sort -k1,1rn | head -10`;

if ($ddos >= $warning) {
        if ($ddos >= $critical) {
                $state = "CRITICAL";
        } else {
                $state = "WARNING";
        }
        print "DDOS attack.\nTop 10 SYN_RECV sources:\n$output";
} else {
        $state = "OK";
        print "No DDOS attack detected ($ddos/$warning).\n";
}

system("rm -f /tmp/check_attack.res") == 0
        or die "$state: Can not delete /tmp/check_attack.res ($?)";

exit $ERRORS{$state};