<!DOCTYPE html>
<html>
<head>
	<title>date_create() and date_format() functions</title>
</head>
<body>
<?php
/*
Definition and Usage
The date_create() function returns a new DateTime object.

Syntax
date_create(time, timezone)
Parameter Values
Parameter	Description
time	Optional. Specifies a date/time string. NULL indicates the current time
timezone	Optional. Specifies the timezone of time. Default is the current timezone.

Tip: Look at a list of all supported timezones in PHP
Technical Details
Return Value:	Returns a new DateTime object on success. FALSE/Exception on failure
........................................................................................
Definition and Usage
The date_format() function returns a date formatted according to the specified format.

Note: This function does not use locales (all output is in English).

Tip: Also look at the date() function, which formats a local date/time.

Syntax
date_format(object, format)
Parameter Values
Parameter	Description
object	Required. Specifies a DateTime object returned by date_create()
format	Required. Specifies the format for the date. The following characters can be used:
d - The day of the month (from 01 to 31)
D - A textual representation of a day (three letters)
j - The day of the month without leading zeros (1 to 31)
l (lowercase 'L') - A full textual representation of a day
N - The ISO-8601 numeric representation of a day (1 for Monday, 7 for Sunday)
S - The English ordinal suffix for the day of the month (2 characters st, nd, rd or th. Works well with j)
w - A numeric representation of the day (0 for Sunday, 6 for Saturday)
z - The day of the year (from 0 through 365)
W - The ISO-8601 week number of year (weeks starting on Monday)
F - A full textual representation of a month (January through December)
m - A numeric representation of a month (from 01 to 12)
M - A short textual representation of a month (three letters)
n - A numeric representation of a month, without leading zeros (1 to 12)
t - The number of days in the given month
L - Whether it's a leap year (1 if it is a leap year, 0 otherwise)
o - The ISO-8601 year number
Y - A four digit representation of a year
y - A two digit representation of a year
a - Lowercase am or pm
A - Uppercase AM or PM
B - Swatch Internet time (000 to 999)
g - 12-hour format of an hour (1 to 12)
G - 24-hour format of an hour (0 to 23)
h - 12-hour format of an hour (01 to 12)
H - 24-hour format of an hour (00 to 23)
i - Minutes with leading zeros (00 to 59)
s - Seconds, with leading zeros (00 to 59)
u - Microseconds (added in PHP 5.2.2)
e - The timezone identifier (Examples: UTC, GMT, Atlantic/Azores)
I (capital i) - Whether the date is in daylights savings time (1 if Daylight Savings Time, 0 otherwise)
O - Difference to Greenwich time (GMT) in hours (Example: +0100)
P - Difference to Greenwich time (GMT) in hours:minutes (added in PHP 5.1.3)
T - Timezone abbreviations (Examples: EST, MDT)
Z - Timezone offset in seconds. The offset for timezones west of UTC is negative (-43200 to 50400)
c - The ISO-8601 date (e.g. 2013-05-05T16:34:42+00:00)
r - The RFC 2822 formatted date (e.g. Fri, 12 Apr 2013 12:01:05 +0200)
U - The seconds since the Unix Epoch (January 1 1970 00:00:00 GMT)
and the following predefined constants can also be used (available since PHP 5.1.0):

DATE_ATOM - Atom (example: 2013-04-12T15:52:01+00:00)
DATE_COOKIE - HTTP Cookies (example: Friday, 12-Apr-13 15:52:01 UTC)
DATE_ISO8601 - ISO-8601 (example: 2013-04-12T15:52:01+0000)
DATE_RFC822 - RFC 822 (example: Fri, 12 Apr 13 15:52:01 +0000)
DATE_RFC850 - RFC 850 (example: Friday, 12-Apr-13 15:52:01 UTC)
DATE_RFC1036 - RFC 1036 (example: Fri, 12 Apr 13 15:52:01 +0000)
DATE_RFC1123 - RFC 1123 (example: Fri, 12 Apr 2013 15:52:01 +0000)
DATE_RFC2822 - RFC 2822 (Fri, 12 Apr 2013 15:52:01 +0000)
DATE_RFC3339 - Same as DATE_ATOM (since PHP 5.1.3)
DATE_RSS - RSS (Fri, 12 Aug 2013 15:52:01 +0000)
DATE_W3C - World Wide Web Consortium (example: 2013-04-12T15:52:01+00:00)

Technical Details
Return Value:	Returns the formatted date as a string. FALSE on failure

*/
echo "The date_create() function returns a new DateTIme object<br>";
echo "The date_format() function returns a date formatted according to the specified format<br>";
echo "Return a new date time object and format the date<br>";
$date=date_create("2013-03-15");
echo date_format($date,"d-m-Y")."<br>";
echo "...........................................................<br>";
$date1=date_create("24-1-2021 1:09:00am",timezone_open("Asia/Dhaka"));
echo date_format($date1,"d/m/Y h:i:s A")."<br>";


?>
</body>
</html>