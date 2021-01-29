<!DOCTYPE html>
<html>
<head>
	<title>check_date() and date_diff() functions</title>
</head>
<body>
<?php
/*
Definition and Usage
The checkdate() function is used to validate a Gregorian date.

Syntax
checkdate(month, day, year)
Parameter Values
Parameter	Description
month	Required. Specifies the month as a number between 1 and 12
day	Required. Specifies the day as a number between 1 and 31
year	Required. Specifies the year as a number between 1 and 32767

Technical Details
Return Value:	TRUE if the date is valid. FALSE otherwise
...............................................................
Definition and Usage
The date_diff() function returns the difference between two DateTime objects.

Syntax
date_diff(datetime1, datetime2, absolute)
Parameter Values
Parameter	Description
datetime1	Required. Specifies a DateTime object
datetime2	Required. Specifies a DateTime object
absolute	Optional. Specifies a Boolean value. TRUE indicates that the interval/difference MUST be positive. Default is FALSE
Technical Details
Return Value:	Returns a DateInterval object on success that represents the difference between the two dates. FALSE on failure

*/
echo "The checkdate(month, day, year) function is used to validate a gregorian date<br>";
echo ".................................<br>";
echo checkdate(12, 3, 2008)." This date is valid<br>";
echo "...................................<br>";
echo checkdate(12,35, 2007)." This date is invalid<br>";
echo "......................................<br>";
echo checkdate(24, 35,2009)." This date is invalid<br>";
echo "...............................................<br>";
echo checkdate(12, 12, 2012)." This date is valid <br>";
echo "..........................................<br>";
echo checkdate(2, 25, 2022)." This date is valid<br>";
echo "............................................<br>";
echo "The date_diff() function returns the difference between two DateTime objects <br>";
$date1=date_create("2019-3-15");
$date2=date_create("2019-12-25");
$diff=date_diff($date1,$date2,TRUE);
echo "<pre>";
print_r($diff);
echo "</pre>";
echo ".................................................<br>";
echo "format for printing diff object value <br>";
echo $diff->format("%r %a")."<br>";
echo ".......................................<br>";
echo "Another way for printing diff object value <br>";
echo $diff->days."Days<br>";
echo "................................................<br>";
echo "If Second date object is smaller than first date object <br>";
$date11=date_create("2019-12-15");
$date12=date_create("2019-2-25");
$diff1=date_diff($date11,$date12);
echo "<pre>";
print_r($diff1);
echo "</pre>";
echo ".................................................<br>";
echo "format for printing diff object value <br>";
echo $diff1->format("%r %a")."<br>";
echo ".......................................<br>";
echo "Another way for printing diff object value <br>";
echo $diff1->days."Days<br>";










?>
</body>
</html>