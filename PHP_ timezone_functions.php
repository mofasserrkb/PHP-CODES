<!DOCTYPE html>
<html>
<head>
	<title>PHP timeZone functions</title>
</head>
<body>
<?php
/*
Definition and Usage
The date_default_timezone_get() function returns the default timezone used by all date/time functions in the script.

Syntax
date_default_timezone_get()
Technical Details
Return Value:	Returns the timezone as a string
.......................................................
Definition and Usage
The date_default_timezone_set() function sets the default timezone used by all date/time functions in the script.

Syntax
date_default_timezone_set(timezone)
Parameter Values
Parameter	Description
timezone	Required. Specifies the timezone to use, like "UTC" or "Europe/Paris". List of valid timezones: http://www.php.net/manual/en/timezones.php
Technical Details
Return Value:	Returns FALSE if the timezone is not valid. TRUE otherwise
...............................................................
Definition and Usage
The timezone_open() creates a new DateTimeZone object.

Syntax
The two functions below are equivalent and any of the functions can be used as shown in the example above.

Procedural style:

timezone_open(timezone)
Object oriented style:

DateTimeZone::__construct(timezone)
Parameter Values
Parameter	Description
timezone	Required. Specifies a timezone
Tip: Look at a list of all supported timezones in PHP
Technical Details
Return Value:	Returns the DateTimeZone object on success. FALSE on failure
...............................................................
Definition and Usage
The timezone_name_get() returns the name of the timezone.

Syntax
timezone_name_get(object)
Parameter Values
Parameter	Description
object	Required. Specifies a DateTimeZone object
Technical Details
Return Value:	Returns a timezone name from the list of timezones
........................................................................
Definition and Usage
The timezone_location_get() returns location information for the given timezone.

Syntax
timezone_location_get(object)
Parameter Values
Parameter	Description
object	Required. Specifies a DateTimeZone object returned by timezone_open()
Technical Details
Return Value:	Returns an array that contains location information for the timezone
.......................................................................
Definition and Usage
The timezone_identifiers_list() returns an indexed array containing all timezone identifiers.

Syntax
timezone_identifiers_list(what, country)
Parameter Values
Parameter	Description
what	Optional. Specifies a DateTimeZone class constant

1 = AFRICA
2 = AMERICA
4 = ANTARCTICA
8 = ARCTIC
16 = ASIA
32 = ATLANTIC
64 = AUSTRALIA
128 = EUROPE
256 = INDIAN
512 = PACIFIC
1024 = UTC
2047 = ALL
4095 = ALL_WITH_BC
4096 = PER_COUNTRY
country	Optional. Specifies a two-letter ISO 3166-1 compatible country code

Technical Details
Return Value:	Returns an indexed array on success. FALSE on failure
*/
echo "The date_default_timezone_get() function returns the default timezone used by all date/time functions in the script  <br>";
echo date_default_timezone_get()."<br>";
echo "..................................................<br>";
echo "The date_default_timezone_set(timezone_identifier) function sets the defaut timezone used by all date/time functions in the script <br>";
date_default_timezone_set("Asia/Dhaka")."<br>";
echo date_default_timezone_get()."<br>";
echo "..................................................<br>";
echo "Another method for getting and setting timezone <br>";
echo "The timezone_open() function creates a DateTimeZone object <br>";
$tmz= timezone_open("Asia/Dhaka");
echo timezone_name_get($tmz)."<br>";
echo "The timezone_location_get() function get returns location information for the given timezone<br>";  
echo "<pre>";
print_r(timezone_location_get($tmz));
echo "</pre>";
echo "...........................................................<br>";
echo "The timezone_identifiers_list() function returns an indexed array containing all timezone identifiers <br>";
echo "<pre>";
print_r(timezone_identifiers_list());
echo "</pre>";
echo "....................................................................<br>";
echo "<pre>";
print_r(timezone_identifiers_list(16));
echo "</pre>";
echo "......................................................................<br>";







?>
</body>
</html>