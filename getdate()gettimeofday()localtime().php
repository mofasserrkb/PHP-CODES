<!DOCTYPE html>
<html>
<head>
	<title>getdate(),gettimeofday() and localtime() functions</title>
</head>
<body>
<?php
/*
Definition and Usage
The getdate() function returns date/time information of a timestamp or the current local date/time.

Syntax
getdate(timestamp)
Parameter Values
Parameter	Description
timestamp	Optional. Specifies an integer Unix timestamp. Default is the current local time (time())
Technical Details
Return Value:	Returns an associative array with information related to the timestamp:
[seconds] - seconds
[minutes] - minutes
[hours] - hours
[mday] - day of the month
[wday] - day of the week (0=Sunday, 1=Monday,...)
[mon] - month
[year] - year
[yday] - day of the year
[weekday] - name of the weekday
[month] - name of the month
[0] - seconds since Unix Epoch
.................................................................
Definition and Usage
The gettimeofday() function returns the current time.

Syntax
gettimeofday(return_float)
Parameter Values
Parameter	Description
return_float	Optional. When set to TRUE, a float instead of an array is returned. Default is FALSE
Technical Details
Return Value:	Returns an associative array by default, with the following array keys:
[sec] - seconds since the Unix Epoch
[usec] - microseconds
[minuteswest] - minutes west of Greenwich
[dsttime] - type of dst correction
If the return_float parameter is set to true, a float is returned
........................................................
Definition and Usage
The localtime() function returns the local time.

Syntax
localtime(timestamp, is_assoc)
Parameter Values
Parameter	Description
timestamp	Optional. Specifies a Unix timestamp that defaults to the current local time, time(), if no timestamp is specified
is_assoc	Optional. Specifies whether to return an associative or indexed array. FALSE = the array returned is an indexed array. TRUE = the array returned is an associative array. FALSE is default.
The keys of the associative array are:

[tm_sec] - seconds
[tm_min] - minutes
[tm_hour] - hour
[tm_mday] - day of the month
[tm_mon] - month of the year (January=0)
[tm_year] - Years since 1900
[tm_wday] - Day of the week (Sunday=0)
[tm_yday] - Day of the year
[tm_isdst] - Is daylight savings time in effect

Technical Details
Return Value:	Returns an array that contains the components of a Unix timestamp
*/
echo "The getdate() function returns date/time information of a timestamp or the current local date/time.<br>";
echo "Return date time information of the current local time/date<br><br>";
$date=getdate();
echo $date["month"]." ".$date["year"]."<br>";
date_default_timezone_set("Asia/Dhaka");//this function returns current local time and date
echo "<pre>";
print_r(getdate());
echo "</pre>";

echo "...........................................................<br>";
echo "Return old date time information using getdate() function <br>";
$olddate=mktime(11,59,60,14,2,2019);
echo "<pre>";
print_r(getdate($olddate));
echo "</pre>";
echo ".............................................................<br>";
echo "gettimeofday() function returns the current time <br>";
echo "<pre>";
print_r(gettimeofday());
echo "</pre>";
echo ".................................................................<br>";
echo "If the return_flat parameter is set to true, a float is returned <br>";
echo gettimeofday(true)."<br>";
echo "...................................................................<br>";
echo "The localtime() function returns the local time<br>";
echo "Print local time as an indexed array(not readable form)<br>";
echo "<pre>";
print_r(localtime());
echo "</pre>";
echo "..........................................................................<br>";
echo "Print local time as an associative array(readable form)<br>";

echo "<pre>";
print_r(localtime(time(),true));
echo "</pre>";
echo "..............................................................................<br>";
echo "Print previous time of a day as an associative array <br>";
$olddate1=mktime(24,59,60,3,6,2018);
echo "<pre>";
print_r(localtime($olddate1,true));
echo "</pre>";
echo "........................................................<br>";


?>
</body>
</html>