<!DOCTYPE html>
<html>
<head>
	<title>PHP time </title>
</head>
<body>
<?php
/*
Definition and Usage
The date_default_timezone_set() function sets the default timezone used by all date/time functions in the script.

Syntax
date_default_timezone_set(timezone)
Parameter Values
Parameter	Description
timezone	Required. Specifies the timezone to use, like "UTC" or "Europe/Paris". List of valid timezones: http://www.php.net/manual/en/timezones.php
Technical Details
Return Value:	Returns FALSE if the timezone is not valid. TRUE otherwise

*/
echo "h - 12-hour format of an hour (01 to 12) <br>";
echo "Hour is: ".date("h")."<br>";
echo "H - 24-hour format of an hour (00 to 23) <br>";
echo "Hour is: ".date ("H")."<br>";
echo "g - 12-hour format of an hour (1 to 12) <br>";
echo "Hour is: ".date("g")."<br>";
echo "G - 24-hour format of an hour (0 to 23) <br>";
echo "Hour is: ".date("G")."<br>";
echo "i - Minutes with leading zeros (00 to 59)<br>";
echo "Minutes: ".date("i")."<br>";
echo "s - Seconds, with leading zeros (00 to 59)<br>";
echo "Seconds: ".date("s")."<br>";
echo "A - Uppercase AM or PM <br>".date("A")."<br>";
echo "full time: ".date("h:i:s A")."<br>";
echo "TIME $ DATE: ".date("jS-M-Y h:i:s A e")."<br>";
date_default_timezone_set("Asia/Dhaka");
echo "TIME $ DATE: ".date("jS-M-Y h:i:s A e")."<br>";

?>
</body>
</html>