<!DOCTYPE html>
<html>
<head>
	<title>bin2hex() and hex2bin() functions</title>
</head>
<body>
<?php
/*
Definition and Usage
The bin2hex() function converts a string of ASCII characters to hexadecimal values. The string can be converted back using the pack() function.

Syntax
bin2hex(string)
Parameter Values
Parameter	Description
string	Required. The string to be converted
Technical Details
Return Value:	Returns the hexadecimal value of the converted string

*/
echo "The bin2hex() function converts a string of ASCII characters to hexadecimal values.";
$str11="Happy coding";
$bintohex= bin2hex($str11);
echo $bintohex."<br>";
echo "Convert string of ASCII characters to hexadecimal values<br>";
$hextobin= hex2bin($bintohex);
echo "Converts hexadecimal values to a string of ASCII characters<br>";
echo $hextobin."<br>";





?>
</body>
</html>