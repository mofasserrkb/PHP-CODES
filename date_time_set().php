<!DOCTYPE html>
<html>
<head>
	<title>date_time_set() function</title>
</head>
<body>
<?php
/*
Definition and Usage
The date_time_set() function sets the time.

Syntax
date_time_set(object, hour, minute, second, microseconds)
Parameter Values
Parameter	Description
object	Required. Specifies a DateTime object returned by date_create()
hour	Required. Specifies the hour of the time
minute	Required. Specifies the minute of the time
second	Optional. Specifies the second of the time. Default is 0
microseconds	Optional. Specifies the microsecond of the time. Default is 0
Technical Details
Return Value:	Returns a DateTime object on success. FALSE on failure

*/
echo "The date_time_set() function sets the time <br>";
$date=date_create("23-01-2020");
date_time_set($date,5,35,60);
echo date_format($date,"d-m-Y h:i:s A")."<br>";
echo "............................................<br>";
$date2=date_create("23-01-2020");
$date3=date_time_set($date2,5,35,60);
echo date_format($date3,"d/m/Y h:i:s A")."<br>";








?>
</body>
</html>