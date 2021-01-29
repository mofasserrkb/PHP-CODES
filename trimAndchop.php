<!DOCTYPE html>
<html>
<head>
	<title>string trim() and chop() functions</title>
</head>
<body>
<?php
/*
Definition and Usage
The trim() function removes whitespace and other predefined characters from both sides of a string.

Related functions:

ltrim() - Removes whitespace or other predefined characters from the left side of a string
rtrim() - Removes whitespace or other predefined characters from the right side of a string
Syntax
trim(string,charlist)
Parameter Values
Parameter	Description
string	Required. Specifies the string to check
charlist	Optional. Specifies which characters to remove from the string. If omitted, all of the following characters are removed:
"\0" - NULL
"\t" - tab
"\n" - new line
"\x0B" - vertical tab
"\r" - carriage return
" " - ordinary white space

Technical Details
Return Value:	Returns the modified string

*/
echo "The trim() function removes whitespace and other predefined characters from both sides of a string
 <br>";
 $str="Hello world";
 echo trim($str,"ld")."<br>";
 echo "Remove characters from both sides of a string<br>";
 $str1="Hello world!";
 echo trim($str1,"Hld!")."<br>";
 $str2 = "\n\n\nHello World!\n\n\n";
echo "Without trim: " . $str2;
echo "<br>";
echo "With trim: " . trim($str2)."<br>";
$str3="Happy coding";
echo "Without trim=".trim($str3)."<br>";
echo "with trim=".trim($str3,"aingH")."<br>";
echo "The rtrim() removes whitespace and other predefined characters from the right side of a string <br>";
echo "With rtrim=".rtrim($str3,"ig")."<br>";
echo "The ltrim() removes whitespace and other predefined characters from the left side of a string <br>";
echo "With ltrim=".ltrim($str3,"H")."<br>";








?>
</body>
</html>