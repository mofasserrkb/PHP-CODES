<!DOCTYPE html>
<html>
<head>
	<title>string position functions </title>
</head>
<body>
<?php
/*
Definition and Usage
The stripos() function finds the position of the first occurrence of a string inside another string.

Note: The stripos() function is case-insensitive.

Note: This function is binary-safe.

Related functions:

strripos() - Finds the position of the last occurrence of a string inside another string (case-insensitive)
strpos() - Finds the position of the first occurrence of a string inside another string (case-sensitive)
strrpos() - Finds the position of the last occurrence of a string inside another string (case-sensitive)
Syntax
stripos(string,find,start)
Parameter Values
Parameter	Description
string	Required. Specifies the string to search
find	Required. Specifies the string to find
start	Optional. Specifies where to begin the search
Technical Details
Return Value:	Returns the position of the first occurrence of a string inside another string, or FALSE if the string is not found. Note: String positions start at 0, and not 1.
....................................................................
Definition and Usage
The strrpos() function finds the position of the last occurrence of a string inside another string.

Note: The strrpos() function is case-sensitive.

Related functions:

strpos() - Finds the position of the first occurrence of a string inside another string (case-sensitive)
stripos() - Finds the position of the first occurrence of a string inside another string (case-insensitive)
strripos() - Finds the position of the last occurrence of a string inside another string (case-insensitive)
Syntax
strrpos(string,find,start)
Parameter Values
Parameter	Description
string	Required. Specifies the string to search
find	Required. Specifies the string to find
start	Optional. Specifies where to begin the search
Technical Details
Return Value:	Returns the position of the last occurrence of a string inside another string, or FALSE if the string is not found. Note: String positions start at 0, and not 1.
.....................................................................................
Definition and Usage
The stripos() function finds the position of the first occurrence of a string inside another string.

Note: The stripos() function is case-insensitive.

Note: This function is binary-safe.

Related functions:

strripos() - Finds the position of the last occurrence of a string inside another string (case-insensitive)
strpos() - Finds the position of the first occurrence of a string inside another string (case-sensitive)
strrpos() - Finds the position of the last occurrence of a string inside another string (case-sensitive)
Syntax
stripos(string,find,start)
Parameter Values
Parameter	Description
string	Required. Specifies the string to search
find	Required. Specifies the string to find
start	Optional. Specifies where to begin the search
Technical Details
Return Value:	Returns the position of the first occurrence of a string inside another string, or FALSE if the string is not found. Note: String positions start at 0, and not 1.
.............................................................................
Definition and Usage
The strripos() function finds the position of the last occurrence of a string inside another string.

Note: The strripos() function is case-insensitive.

Related functions:

stripos() - Finds the position of the first occurrence of a string inside another string (case-insensitive)
strpos() - Finds the position of the first occurrence of a string inside another string (case-sensitive)
strrpos() - Finds the position of the last occurrence of a string inside another string (case-sensitive)
Syntax
strripos(string,find,start)
Parameter Values
Parameter	Description
string	Required. Specifies the string to search
find	Required. Specifies the string to find
start	Optional. Specifies where to begin the search
Technical Details
Return Value:	Returns the position of the last occurrence of a string inside another string, or FALSE if the string is not found. Note: String positions start at 0, and not 1.
.............................................................................


*/
echo "The strpos() function finds the position of the first occurrence of a string inside another string 
(case sensitive)<br>";
$str="I love php without any doubt for back end development. php is favourite for back end development";
echo strpos($str,"php")."<br>";
echo "...................................................<br>";
echo strpos($str,"php",15)."<br>";
echo "......................................................<br>";
echo "The strrpos() function finds the position of the last occurrence of a string inside another string
<br>";
echo strrpos($str,"php")."<br>";
echo "..........................................................<br>";
echo "The stripos() function finds the position of the first occurence of a string inside another string (case insensitive) <br>";
$str1="Hello World. This World is very beautyfull<br>";
echo stripos($str1,"world")."<br>";
echo stripos($str1,"Is",11)."<br>";
echo "using negative parameter in stripos() function <br>";
echo stripos($str1,"Is",-26)."<br>";
echo "...............................................................<br>";
echo "The strripos() function finds the position of the last occurrence of a string inside another string <br> ";
echo strripos($str1,"world")."<br>";
echo ".....................................................................<br>";
echo "hello ";










?>
</body>
</html>