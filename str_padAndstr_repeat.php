<!DOCTYPE html>
<html>
<head>
	<title>str_pad() and str_repeat() functions</title>
</head>
<body>
<?php
/*
Definition and Usage
The str_pad() function pads a string to a new length.

Syntax
str_pad(string,length,pad_string,pad_type)
Parameter Values
Parameter	Description
string	Required. Specifies the string to pad
length	Required. Specifies the new string length. If this value is less than the original length of the string, nothing will be done
pad_string	Optional. Specifies the string to use for padding. Default is whitespace
pad_type	Optional. Specifies what side to pad the string.
Possible values:

STR_PAD_BOTH - Pad to both sides of the string. If not an even number, the right side gets the extra padding
STR_PAD_LEFT - Pad to the left side of the string
STR_PAD_RIGHT - Pad to the right side of the string. This is default
Technical Details
Return Value:	Returns the padded string
...........................................................................
Definition and Usage
The str_repeat() function repeats a string a specified number of times.

Syntax
str_repeat(string,repeat)
Parameter Values
Parameter	Description
string	Required. Specifies the string to repeat
repeat	Required. Specifies the number of times the string will be repeated. Must be greater or equal to 0
Technical Details
Return Value:	Returns the repeated string
*/
echo "The str_pad() function pads a string to a new length <br>";
$str="Hello world";
echo str_pad($str,30,".")."<br>";
echo "Pad to the left of the string<br>";
echo str_pad($str,25,"/",STR_PAD_LEFT)."<br>";
echo "Pad to the both side of the string <br>";
echo str_pad($str,25,"+",STR_PAD_BOTH)."<br>";
echo "............................................................<br>";
echo "The str_repeat() function repeats a string a specified number of times<br>";
echo str_repeat(" How are you",5)."<br>";

echo ".................................................................<br>";

?>
</body>
</html>