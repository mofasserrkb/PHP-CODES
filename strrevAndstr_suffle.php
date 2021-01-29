<!DOCTYPE html>
<html>
<head>
	<title>strrev() and str_suffle() function</title>
</head>
<body>
<?php
/*
Definition and Usage
The strrev() function reverses a string.

Syntax
strrev(string)
Parameter Values
Parameter	Description
string	Required. Specifies the string to reverse
................................................................................
Definition and Usage
The str_shuffle() function randomly shuffles all the characters of a string.

Syntax
str_shuffle(string)
Parameter Values
Parameter	Description
string	Required. Specifies the string to shuffle
Technical Details
Return Value:	Returns the shuffled string
...................................................................................
*/
echo "The strrev() function reverses a string <br>";
$s="Hello Bangladesh! We are coming";
echo strrev($s)."<br>";
echo ".....................................................<br>";
echo "The str_shuffle() function randomly shuffles all the characters of a string<br>";
echo str_shuffle("Hello Bangladesh")."<br>";
echo ".........................................................................<br>";








?>
</body>
</html>