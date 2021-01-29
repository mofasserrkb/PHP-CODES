<!DOCTYPE html>
<html>
<head>
	<title>string searching functions</title>
</head>
<body>
<?php
/*
Definition and Usage
The strstr() function searches for the first occurrence of a string inside another string.

Note: This function is binary-safe.

Note: This function is case-sensitive. For a case-insensitive search, use stristr() function.

Syntax
strstr(string,search,before_search)
Parameter Values
Parameter	Description
string	Required. Specifies the string to search
search	Required. Specifies the string to search for. If this parameter is a number, it will search for the character matching the ASCII value of the number
before_search	Optional. A boolean value whose default is "false". If set to "true", it returns the part of the string before the first occurrence of the search parameter.

Technical Details
Return Value:	Returns the rest of the string (from the matching point), or FALSE, if the string to search for is not found.
.........................................................
Definition and Usage
The stristr() function searches for the first occurrence of a string inside another string.

Note: This function is binary-safe.

Note: This function is case-insensitive. For a case-sensitive search, use strstr() function.

Syntax
stristr(string,search,before_search)
Parameter Values
Parameter	Description
string	Required. Specifies the string to search
search	Required. Specifies the string to search for. If this parameter is a number, it will search for the character matching the ASCII value of the number
before_search	Optional. A boolean value whose default is "false". If set to "true", it returns the part of the string before the first occurrence of the search parameter.
Technical Details
Return Value:	Returns the rest of the string (from the matching point), or FALSE, if the string to search for is not found.
........................................................
Definition and Usage
The strchr() function searches for the first occurrence of a string inside another string.

This function is an alias of the strstr() function.

Note: This function is binary-safe.

Note: This function is case-sensitive. For a case-insensitive search, use stristr() function.

Syntax
strchr(string,search,before_search);
Parameter Values
Parameter	Description
string	Required. Specifies the string to search
search	Required. Specifies the string to search for. If this parameter is a number, it will search for the character matching the ASCII value of the number
before_search	Optional. A boolean value whose default is "false". If set to "true", it returns the part of the string before the first occurrence of the search parameter.
Technical Details
Return Value:	Returns the rest of the string (from the matching point), or FALSE, if the string to search for is not found.
.........................................................................
Definition and Usage
The strrchr() function finds the position of the last occurrence of a string within another string, and returns all characters from this position to the end of the string.

Note: This function is binary-safe.

Syntax
strrchr(string,char)
Parameter Values
Parameter	Description
string	Required. Specifies the string to search
char	Required. Specifies the string to find. If this is a number, it will search for the character matching the ASCII value of that number
Technical Details
Return Value:	Returns all characters from the last occurrence of a string within another string, to the end of the main string, or FALSE if the character is not found
.....................................................................
Definition and Usage
The strpbrk() function searches a string for any of the specified characters.

Note: This function is case-sensitive.

This function returns the rest of the string from where it found the first occurrence of a specified character, otherwise it returns FALSE.

Syntax
strpbrk(string,charlist)
Parameter Values
Parameter	Description
string	Required. Specifies the string to search
charlist	Required. Specifies the characters to find
Technical Details
Return Value:	Returns the string starting from the character found, otherwise it returns FALSE
*/
echo " The strstr() function searches for the first occurrence of a string inside another string 
.This function is case-sensitive<br>";
$s="Hello world, We love to live this beautiful world";
echo strstr($s,"world")."<br>";
echo "..................................................<br>";
echo "we can use third parameter in strstr() function.It this parameter set to true, it returns the part of the string before the first occurrence of the search parameter<br>";
echo strstr($s,"world",true)."<br>";
echo "....................................................<br>";
echo "Return a string of the ASCII vale of 'o', and return the rest of the string <br>";
echo strstr($s,111)."<br>";
echo "......................................................<br>";
echo "The stristr() function searches for the first occurrence of a string inside another string. This function is case-insensitive <br>";
echo stristr($s,"IS")."<br>";
echo "......................................<br>";
echo stristr($s,"IS",true)."<br>";
echo ".......................................<br>";
echo "The strchr() searches for the first occurrence of a string inside another string.This function is case-sensitive <br>";
echo strchr($s,"world")."<br>";
echo "................................................<br>";
echo strchr($s,"world",true)."<br>";
echo "...................................................<br>";
echo "The strrchr() fuction finds the position of the last occurrence of a string within another string and returns all the characters from this position to the end of the string <br>";
echo strrchr($s,"is")."<br>";
echo ".....................................................<br>";
echo "Search a string for the ASCII vlaue of 'e' and return all the characters from this position to the end of the string <br>";
echo strrchr($s,101)."<br>";
echo "..........................................................<br>";
echo "The strpbrk() function searches a string for any specified characters <br> ";
echo strpbrk($s,"d")."<br>";
echo ".........................................................<br>";
echo strpbrk($s, "ti")."<br>";
echo "...........................................................<br>";








?>
</body>
</html>