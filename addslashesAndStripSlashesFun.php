<!DOCTYPE html>
<html>
<head>
	<title>addslashes and stripslashes functions</title>
</head>
<body>
<?php
/*
The addslashes() function returns a string with backslashes in front of predefined characters.

The predefined characters are:

single quote (')
double quote (")
backslash (\)
NULL
Tip: This function can be used to prepare a string for storage in a database and database queries.

Note: Prior to PHP 5.4, the PHP dir magic_quotes_gpc was on by default and it ran addslashes() on all GET, POST, and COOKIE data by default. You should not use addslashes() on strings that have already been escaped, as it will cause double escaping. The function get_magic_quotes_gpc() can be used to check this.

Syntax
addslashes(string)
Parameter Values
Parameter	Description
string	Required. Specifies the string to be escaped
Technical Details
Return Value:	Returns the escaped string
.........................................................
Definition and Usage
The stripslashes() function removes backslashes added by the addslashes() function.

Tip: This function can be used to clean up data retrieved from a database or from an HTML form.

Syntax
stripslashes(string)
Parameter Values
Parameter	Description
string	Required. Specifies the string to check
Technical Details
Return Value:	Returns a string with backslashes stripped off

..........................................................
Definition and Usage
The addcslashes() function returns a string with backslashes in front of the specified characters.

Note: The addcslashes() function is case-sensitive.

Note: Be careful using addcslashes() on 0 (NULL), r (carriage return), n (newline), f (form feed), t (tab) and v (vertical tab). In PHP, \0, \r, \n, \t, \f and \v are predefined escape sequences.

Syntax
addcslashes(string,characters)
Parameter Values
Parameter	Description
string	Required. Specifies the string to be escaped
characters	Required. Specifies the characters or range of characters to be escaped

Technical Details
Return Value:	Returns the escaped string

............................................................
Definition and Usage
The stripcslashes() function removes backslashes added by the addcslashes() function.

Tip: This function can be used to clean up data retrieved from a database or from an HTML form.

Syntax
stripcslashes(string)
Parameter Values
Parameter	Description
string	Required. Specifies the string to check
Technical Details
Return Value:	Returns the unescaped string
...........................................................

*/
echo "The addslashes() function returns a string with backslashes in front of predefined characters. This function can be used to prepare a string for storage in a database anda database queries <br>";
$str="Happy 'coding'";
echo $str." This is not safe for database query<br>";
echo addslashes($str)." This is safe for database query<br>";
echo "The stripslashes() function removes the backslashes added by addslashes() function <br>";
echo stripslashes($str)."                     removing backslashes<br>";
$str1='What is "object oriented programming"';
echo $str1. "                                  This is not safe for database query<br>";
echo addslashes($str1). "                      This is safe for database query<br>";
echo stripslashes($str1)."                     removing backslashes<br>";
echo "The addcslashes() function returns a string with backslashes in front of the specified characters <br>";
$str2= "Welcome to our country! This is Bangaldesh";
echo addcslashes($str2,"ycB")."<br>";
echo "Removing backslashes<br>";
echo stripcslashes($str2)."<br>";
echo "Add backslashes to a range of characters in a string<br>";
$str3="Welcom To our Town,CHATTOGRAM";
echo addcslashes($str3,"A..Z")."<br>";
echo "Removing backslashes<br>";
echo stripcslashes($str3)."<br>";
echo addcslashes($str2,"a..z")."<br>";
echo "Removing backslashes<br>";
echo stripcslashes($str2)."<br>";









?>
</body>
</html>