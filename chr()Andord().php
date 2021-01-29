<!DOCTYPE html>
<html>
<head>
	<title>chr() and ord() functions</title>
</head>
<body>
<?php
/*
Definition and Usage
The chr() function returns a character from the specified ASCII value.

The ASCII value can be specified in decimal, octal, or hex values. Octal values are defined by a leading 0, while hex values are defined by a leading 0x.

Syntax
chr(ascii)
Parameter Values
Parameter	Description
ascii	Required. An ASCII value

Technical Details
Return Value:	Returns the specified character
.........................................................
Definition and Usage
The ord() function returns the ASCII value of the first character of a string.

Syntax
ord(string)
Parameter Values
Parameter	Description
string	Required. The string to get an ASCII value from
Technical Details
Return Value:	Returns the ASCII value as an integer
*/
echo "The chr() function returns a character from the specified ASCII value<br>";
echo "Decimal value: 52<br>";
echo chr(52)."<br>";
echo "Octal value: 052<br>";
echo chr(052)."<br>";
echo "Hex value: 0x52 <br>";
echo chr(0x52)."<br>";
echo "The ord() function returns the AsCII value of the first character of a string<br>";
echo ord("A")."<br>";
echo ord("F")."<br>";
echo ord("a")."<br>";
echo ord("f")."<br>";
echo ord("Happy coding")."<br>";
echo ord("happy coding")."<br>";

?>
</body>
</html>