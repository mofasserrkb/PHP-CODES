<!DOCTYPE html>
<html>
<head>
	<title>substr() function</title>
</head>
<body>
<?php
/*
Definition and Usage
The substr() function returns a part of a string.

Syntax
substr(string,start,length)
Parameter Values
Parameter	Description
string	Required. Specifies the string to return a part of
start	Required. Specifies where to start in the string
A positive number - Start at a specified position in the string
A negative number - Start at a specified position from the end of the string
0 - Start at the first character in string
length	Optional. Specifies the length of the returned string. Default is to the end of the string.
A positive number - The length to be returned from the start parameter
Negative number - The length to be returned from the end of the string
If the length parameter is 0, NULL, or FALSE - it return an empty string
Technical Details
Return Value:	Returns the extracted part of a string, or FALSE on failure, or an empty string

*/
echo "The substr() function returns a part of a string <br>";
$s="Hello world, we love to live in this beautiful world";
echo substr($s,5)."<br>";
echo ".......................................................<br>";
echo substr($s,10)."<br>";
echo "..........................................................<br>";
echo "If start parameter if negative is used in the substr() function <br>";
echo substr($s,-1)."<br>";
echo substr($s,-3)."<br>";
echo substr($s,-10)."<br>";
echo "..................................................................<br>";
echo "Using the start and length parameters with different positive and negative numbers <br>";
echo substr($s,0,-1)."<br>";
echo substr($s,-3,-1)."<br>";
echo substr($s,10,-8)."<br>";
echo substr($s,3,-7)."<br>";
echo substr($s,3,10)."<br>";
echo "..............................................................<br>";





?>
</body>
</html>