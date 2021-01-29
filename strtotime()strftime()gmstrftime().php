<!DOCTYPE html>
<html>
<head>
	<title>strtotime(),strftime() and gmstrftime () functions</title>
</head>
<body>
<?php
/*
Definition and Usage
The strtotime() function parses an English textual datetime into a Unix timestamp (the number of seconds since January 1 1970 00:00:00 GMT).

Note: If the year is specified in a two-digit format, values between 0-69 are mapped to 2000-2069 and values between 70-100 are mapped to 1970-2000.

Note: Be aware of dates in the m/d/y or d-m-y formats; if the separator is a slash (/), then the American m/d/y is assumed. If the separator is a dash (-) or a dot (.), then the European d-m-y format is assumed. To avoid potential errors, you should YYYY-MM-DD dates or date_create_from_format() when possible.

Syntax
strtotime(time, now);
Parameter Values
Parameter	Description
time	Required. Specifies a date/time string
........................................................................
Definition and Usage
The strftime() function formats a local time and/or date according to locale settings.

Tip: Also look at the gmstrftime() function, which formats a GMT/UTC time and/or date according to locale settings.

Syntax
strftime(format, timestamp)
Parameter Values
Parameter	Description
format	Required. Specifies how to return the result:
%a - abbreviated weekday name
%A - full weekday name
%b - abbreviated month name
%B - full month name
%c - preferred date and time representation
%C - century number (the year divided by 100, range 00 to 99)
%d - day of the month (01 to 31)
%D - same as %m/%d/%y
%e - day of the month (1 to 31)
%g - like %G, but without the century
%G - 4-digit year corresponding to the ISO week number (see %V).
%h - same as %b
%H - hour, using a 24-hour clock (00 to 23)
%I - hour, using a 12-hour clock (01 to 12)
%j - day of the year (001 to 366)
%m - month (01 to 12)
%M - minute
%n - newline character
%p - either am or pm according to the given time value
%r - time in a.m. and p.m. notation
%R - time in 24 hour notation
%S - second
%t - tab character
%T - current time, equal to %H:%M:%S
%u - weekday as a number (1 to 7), Monday=1. Warning: In Sun Solaris Sunday=1
%U - week number of the current year, starting with the first Sunday as the first day of the first week
%V - The ISO 8601 week number of the current year (01 to 53), where week 1 is the first week that has at least 4 days in the current year, and with Monday as the first day of the week
%W - week number of the current year, starting with the first Monday as the first day of the first week
%w - day of the week as a decimal, Sunday=0
%x - preferred date representation without the time
%X - preferred time representation without the date
%y - year without a century (range 00 to 99)
%Y - year including the century
%Z or %z - time zone or name or abbreviation
%% - a literal % character
timestamp	Optional. Specifies a Unix timestamp that represents the date and/or time to be formatted. Default is the current local time (time())

Technical Details
Return Value:	Returns a string formatted according format using the given timestamp. Month and weekday names and other language-dependent strings respect the current locale set with setlocale()
.................................................................................
Definition and Usage
The gmstrftime() function formats a GMT/UTC time and/or date according to locale settings.

Tip: Also look at the strftime() function, which formats a local time and/or date according to locale settings.

Syntax
gmstrftime(format, timestamp)
Parameter Values
Parameter	Description
format	Required. Specifies how to return the result:
%a - abbreviated weekday name
%A - full weekday name
%b - abbreviated month name
%B - full month name
%c - preferred date and time representation
%C - century number (the year divided by 100, range 00 to 99)
%d - day of the month (01 to 31)
%D - same as %m/%d/%y
%e - day of the month (1 to 31)
%g - like %G, but without the century
%G - 4-digit year corresponding to the ISO week number (see %V).
%h - same as %b
%H - hour, using a 24-hour clock (00 to 23)
%I - hour, using a 12-hour clock (01 to 12)
%j - day of the year (001 to 366)
%m - month (01 to 12)
%M - minute
%n - newline character
%p - either am or pm according to the given time value
%r - time in a.m. and p.m. notation
%R - time in 24 hour notation
%S - second
%t - tab character
%T - current time, equal to %H:%M:%S
%u - weekday as a number (1 to 7), Monday=1. Warning: In Sun Solaris Sunday=1
%U - week number of the current year, starting with the first Sunday as the first day of the first week
%V - The ISO 8601 week number of the current year (01 to 53), where week 1 is the first week that has at least 4 days in the current year, and with Monday as the first day of the week
%W - week number of the current year, starting with the first Monday as the first day of the first week
%w - day of the week as a decimal, Sunday=0
%x - preferred date representation without the time
%X - preferred time representation without the date
%y - year without a century (range 00 to 99)
%Y - year including the century
%Z or %z - time zone or name or abbreviation
%% - a literal % character
timestamp	Optional. Specifies a Unix timestamp that represents the date and/or time to be formatted. Default is the current local time (time())
*/
echo "The strtotime(time) function parses an English textual datetime into a unix timestamp (the number of seconds since January 1 1970 00:00:00 <br>";

echo date("d-m-y h:i:s A ",strtotime("now"))."<br>";
echo date("d-m-y h:i:s A",strtotime("3 october 2015"))."<br>";
echo date("d-m-y h:i:s A",strtotime("+5 hours"))."<br>";
echo date("d-m-y h:i:s A",strtotime("Next monday"))."<br>";
echo date("d-m-y h:i:s A",strtotime("last sunday"))."<br>";
echo date("d-m-y h:i:s A",strtotime("+1 week 3 days 7 hours 5 seconds"))."<br>";
echo date("d-m-y h:i:s A",strtotime("First day of  last month"))."<br>";
echo "......................................................................<br>";
echo "The strftime(format) function formats a local time and or date according to locale settings <br>";
echo "current time using strftime(format) <br>";
echo strftime("%D")."<br>";
echo strftime("%B %d %Y, %X %Z")."<br>";
echo "previous time or date using strftime(format)<br>";
echo strftime("%B %d %Y, %X %Z",mktime(24,59,60,1,22,2021))."<br>";
echo strftime("%d %m %Y %H:%M:%S",mktime(24,59,60,1,22,2021))."<br>";
echo "..................................................................<br>";
echo "The gmstrftime(format,timestamp) function formats a GMT/UTC time and/or date according to locale settings <br>";
echo gmstrftime("%d %m %Y %H:%M:%S %Z",mktime(24,59,60,1,22,2021))."<br>";








?>
</body>
</html>