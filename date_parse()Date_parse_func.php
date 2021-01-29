<!DOCTYPE html>
<html>
<head>
	<title>date_parse() and date_parse_from_format()</title>
</head>
<body>
<?php
/*
Definition and Usage
The date_parse() function returns an associative array with detailed information about a specified date.

Syntax
date_parse(date)
Parameter Values
Parameter	Description
date	Required. Specifies a date (in a format accepted by strtotime())
Technical Details
Return Value:	Returns an associative array containing information about the parsed date on success. FALSE on failure
...................................................................................
Definition and Usage
The date_parse_from_format() function returns an associative array with detailed information about a specified date, according to the specified format.

Syntax
date_parse_from_format(format, date)
Parameter Values
Parameter	Description
format	Required. Specifies the format (a format accepted by date_create_from_format())
date	Required. A string that specifies a date
Technical Details
Return Value:	Returns an associative array containing information about the specified date on success

*/
echo "The date_parse(date) function returns an associative array with detailed information about a specified date <br>";
echo "<pre>";
print_r(date_parse("2015-03-15 12:30:45.5"));
echo "</pre>";
echo "........................................................................................<br>";
echo "The date_parse_from_format(format, date) function returns an associative array with detailed information about a specified date, according to the specified format <br>";
echo "ddmmyyyy format is not working<br>";

echo "<pre>";
print_r(date_parse_from_format("ddmmyyyy","05122013"));
echo "</pre>";
echo "..................................................................................<br>";
echo "<pre>";
print_r(date_parse_from_format("Y-m-d","2018-9-20"));
echo "</pre>";
echo ".........................................................................................<br>";






?>
</body>
</html>