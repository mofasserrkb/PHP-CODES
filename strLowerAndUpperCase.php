<!DOCTYPE html>
<html>
<head>
	<title>string lower and upper case functions</title>
</head>
<body>
<?php
/*
Definition and Usage
The strtolower() function converts a string to lowercase.

Note: This function is binary-safe.

Related functions:

strtoupper() - converts a string to uppercase
lcfirst() - converts the first character of a string to lowercase
ucfirst() - converts the first character of a string to uppercase
ucwords() - converts the first character of each word in a string to uppercase
Syntax
strtolower(string)
Parameter Values
Parameter	Description
string	Required. Specifies the string to convert
Technical Details
Return Value:	Returns the the lowercased string

*/
echo "The strtolower() function converts a string to lowercase <br>";
$a="Hello World.";
$r= strtolower($a);
echo $r."<br>";
echo "..........................................................<br>";
echo "The strtoupper() function converts a string to uppercase <br>";
$r1= strtoupper($a);
echo $r1."<br>";
echo "............................................................<br>";
echo "The lcfirst() function converts the first character of a string to lowercase <br>";
$b="They said they  love their country <br>";
$r2= lcfirst($b);
echo $r2."<br>";
echo "................................................................<br>";
$c="this is a beautiful place";
$r3=ucfirst($c);
echo $r3."<br>";
echo "..................................................................<br>";
echo "The ucwords() functions converts the first character of each word in a string to uppercase <br>";
$d=ucwords($c);
echo $d."<br>";
echo "...................................................................<br>";







?>
</body>
</html>