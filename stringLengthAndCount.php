<!DOCTYPE html>
<html>
<head>
	<title>string length and count functions </title>
</head>
<body>
<?php
/*
Definition and Usage
The strlen() function returns the length of a string.

Syntax
strlen(string)
Parameter Values
Parameter	Description
string	Required. Specifies the string to check
Technical Details
Return Value:	Returns the length of a string (in bytes) on success, and 0 if the string is empty
....................................................................................
Definition and Usage
The str_word_count() function counts the number of words in a string.

Syntax
str_word_count(string,return,char)
Parameter Values
Parameter	Description
string	Required. Specifies the string to check
return	Optional. Specifies the return value of the str_word_count() function.
Possible values:

0 - Default. Returns the number of words found
1 - Returns an array with the words from the string
2 - Returns an array where the key is the position of the word in the string, and value is the actual word
char	Optional. Specifies special characters to be considered as words.

Technical Details
Return Value:	Returns a number or an array, depending on the chosen return parameter
.....................................................................................
The substr_count() function counts the number of times a substring occurs in a string.

Note: The substring is case-sensitive.

Note: This function does not count overlapped substrings (see example 2).

Note: This function generates a warning if the start parameter plus the length parameter is greater than the string length (see example 3).

Syntax
substr_count(string,substring,start,length)
Parameter Values
Parameter	Description
string	Required. Specifies the string to check
substring	Required. Specifies the string to search for
start	Optional. Specifies where in string to start searching. If negative, it starts counting from the end of the string
length	Optional. Specifies the length of the search

Technical Details
Return Value:	Returns the  the number of times the substring occurs in the string

*/
echo "The strlen() function returns the length of a string <br>";
echo strlen("Hello world. Beautiful days are coming")."<br>";
echo"......................................................<br>";
$a="Hey! how are you";
echo strlen($a)."<br>";
echo "..................................................<br>";
echo "The str_word_count() function counts the number of words in a string <br>";
echo "Count the number of words found in the string <br>";
$b=" You never walk alone";
echo str_word_count($b)."<br>";
echo ".............................................<br>";
echo "If parameter is set 1 in the str_word_count() then it Returns an array with the words from the string <br>";
$c= "Never give up to become a successful";
$newArray=str_word_count($c,1);
echo "<pre>";
print_r($newArray);
echo "</pre>";
echo "...........................................................<br>";
echo "If parameter is set 2 in the str_word_count(). Then it returns an array where the key is the position of the word in the string <br>";
$newArray1=str_word_count($c,2);
echo "<pre>";
print_r($newArray1);
echo "</pre>";
echo ".............................................................<br>";
echo "The substr_count() function counts the number of times a substring occurs in a string. The substring is case-sensitive. This function does not count overlapped function<br>";
$str= "Never be depressed. Never give up to become a successful";
echo "The number of times Never occurs in the string <br> ";
echo substr_count($str,"Never")."<br>";
echo "using third parameter to count substring using substr_count() <br> ";
echo substr_count($str, "Never",0)."<br>";
echo "Using fourth parameter to count substring within the range using substr_count() function <br>";
echo substr_count($str, "Never",1,35)."<br>";
echo substr_count($str, "Never",0,35)."<br>";











?>
</body>
</html>