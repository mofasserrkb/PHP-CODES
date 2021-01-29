<!DOCTYPE html>
<html>
<head>
	<title>mktime() and gmmktime() functions</title>
</head>
<body>
<?php
/*
Definition and Usage
The gmmktime() function returns the Unix timestamp for a date.

Tip: This function is identical to gmmktime() except the passed parameters represents a date (not a GMT date).

Syntax
mktime(hour, minute, second, month, day, year, is_dst)
Parameter Values
Parameter	Description
hour	Optional. Specifies the hour
minute	Optional. Specifies the minute
second	Optional. Specifies the second
month	Optional. Specifies the month
day	Optional. Specifies the day
year	Optional. Specifies the year
is_dst	Optional. Set this parameter to 1 if the time is during daylight savings time (DST), 0 if it is not, or -1 (the default) if it is unknown. If it's unknown, PHP tries to find out itself (which may cause unexpected results). Note: This parameter is removed in PHP 7.0. The new timezone handling features should be used instead

Technical Details
Return Value:	Returns an integer Unix timestamp. FALSE on error

*/
echo "The mmktime() and gmmktime() function is identical to gmmktime() except the passed parameters represents a date(not a GMT date)<br>";
echo date("l",mktime(24,0,0,11,30,2003))."<br>";
//date_default_timezone_set("Asia/Dhaka");
echo date("d-m-Y h:i:s A",mktime(24,0,0,11,30,2003))."<br>";
echo date("D-F-Y h:i:s A",gmmktime(24,0,0,11,30,2003))."<br>";
echo date("M-d-Y h:i:s A",mktime(0,0,0,14,1,2001)) . "<br>";
echo date("M-d-Y h:i:s A",gmmktime(0,0,0,14,1,2001)) . "<br>";
echo date("M-d-Y",mktime(0,0,0,1,1,2001)) . "<br>";
echo date("M-d-Y",mktime(0,0,0,1,1,99)) . "<br>";





?>
</body>
</html>