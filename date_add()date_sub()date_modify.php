<!DOCTYPE html>
<html>
<head>
	<title>date_add(),date_sub() and date_modify() function</title>
</head>
<body>
<?php
/*
Definition and Usage
The date_create() function returns a new DateTime object.

Syntax
date_create(time, timezone)
.....................................................
Definition and Usage
The date_add() function adds some days, months, years, hours, minutes, and seconds to a date.

Syntax
date_add(object, interval)
Parameter Values
Parameter	Description
object	Required. Specifies a DateTime object returned by date_create()
interval	Required. Specifies a DateInterval object

Technical Details
Return Value:	Returns a DateTime object on success. FALSE on failure
....................................................................
Definition and Usage
The date_interval_create_from_date_string() function sets up a DateInterval from the relative parts of the string.

Syntax
date_interval_create_from_date_string(datetime)
Parameter Values
Parameter	Description
datetime	Required. Specifies a DateInterval
Technical Details
Return Value:	Returns new DateInterval object
...............................................................
Definition and Usage
The date_sub() function subtracts some days, months, years, hours, minutes, and seconds from a date.

Syntax
date_sub(object, interval)
Parameter Values
Parameter	Description
object	Required. Specifies a DateTime object returned by date_create()
interval	Required. Specifies a DateInterval object
Technical Details
Return Value:	Returns a DateTime object on success. FALSE on failure
.........................................................................
Definition and Usage
The date_modify() function modifies the timestamp.

Syntax
date_modify(object, modify)
Parameter Values
Parameter	Description
object	Required. Specifies a DateTime object returned by date_create()
modify	Required. Specifies a date/time string
Technical Details
Return Value:	Returns a DateTime object on success. FALSE on failure
*/
echo "The date_add() function adds some days,months,years,hours,minutes, and seconds to a date <br>";
echo "The date_interval_create_from_date_string() function sets up a DateInterval from the relative parts of the string<br>";
echo "The date_sub() function subtracts some days,months,years,hours,minutes and seconds from a date <br>";
echo "The date_modify() function modifies the timestamp<br>";
$date=date_create("2019-5-25");
$ob= date_add($date,date_interval_create_from_date_string("50 days"));
echo date_format($date,"Y/m/d")."<br>";
echo date_format($ob,"d-m-Y")."<br>";
echo "..........................................................<br>";
$date1=date_create("2018-6-20");
$ob1=date_sub($date1,date_interval_create_from_date_string("120 Days"));
echo date_format($date1,"Y-m-d")."<br>";
echo date_format($ob1,"d-m-Y")."<br>";
echo ".........................................................<br>";
$date2=date_create("2019-5-25");
$ob2=date_modify($date2,"+50 days");
echo date_format($date2,"Y/m/d")."<br>";
echo date_format($ob2,"d-m-Y")."<br>";
echo "........................................................<br>";
$date3=date_create("2018-6-20");
$ob3=date_modify($date3,"-120 Days");
echo date_format($date3,"Y-m-d")."<br>";
echo date_format($ob3,"d-m-Y")."<br>";
echo "............................................................<br>";





?>
</body>
</html>