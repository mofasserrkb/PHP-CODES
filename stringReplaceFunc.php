<!DOCTYPE html>
<html>
<head>
	<title>string replace functions </title>
</head>
<body>
<?php
/*
Definition and Usage
The str_replace() function replaces some characters with some other characters in a string.

This function works by the following rules:

If the string to be searched is an array, it returns an array
If the string to be searched is an array, find and replace is performed with every array element
If both find and replace are arrays, and replace has fewer elements than find, an empty string will be used as replace
If find is an array and replace is a string, the replace string will be used for every find value
Note: This function is case-sensitive. Use the str_ireplace() function to perform a case-insensitive search.

Note: This function is binary-safe.

Syntax
str_replace(find,replace,string,count)
Parameter Values
Parameter	Description
find	Required. Specifies the value to find
replace	Required. Specifies the value to replace the value in find
string	Required. Specifies the string to be searched
count	Optional. A variable that counts the number of replacements
Technical Details
Return Value:	Returns a string or an array with the replaced values
...................................................................
Definition and Usage
The str_ireplace() function replaces some characters with some other characters in a string.

This function works by the following rules:

If the string to be searched is an array, it returns an array
If the string to be searched is an array, find and replace is performed with every array element
If both find and replace are arrays, and replace has fewer elements than find, an empty string will be used as replace
If find is an array and replace is a string, the replace string will be used for every find value
Note: This function is case-insensitive. Use the str_replace() function to perform a case-sensitive search.

Note: This function is binary-safe.

Syntax
str_ireplace(find,replace,string,count)
Parameter Values
Parameter	Description
find	Required. Specifies the value to find
replace	Required. Specifies the value to replace the value in find
string	Required. Specifies the string to be searched
count	Optional. A variable that counts the number of replacements

Technical Details
Return Value:	Returns a string or an array with the replaced values
.....................................................................
Definition and Usage
The substr_replace() function replaces a part of a string with another string.

Note: If the start parameter is a negative number and length is less than or equal to start, length becomes 0.

Note: This function is binary-safe.

Syntax
substr_replace(string,replacement,start,length)
Parameter Values
Parameter	Description
string	Required. Specifies the string to check
replacement	Required. Specifies the string to insert
start	Required. Specifies where to start replacing in the string
A positive number - Start replacing at the specified position in the string
Negative number - Start replacing at the specified position from the end of the string
0 - Start replacing at the first character in the string
length	Optional. Specifies how many characters should be replaced. Default is the same length as the string.
A positive number - The length of string to be replaced
A negative number - How many characters should be left at end of string after replacing
0 - Insert instead of replace

Technical Details
Return Value:	Returns the replaced string. If the string is an array then the array is returned
.........................................................
Definition and Usage
The strtr() function translates certain characters in a string.

Note: If the from and to parameters are different in length, both will be formatted to the length of the shortest.

Syntax
strtr(string,from,to)
or

strtr(string,array)
Parameter Values
Parameter	Description
string	Required. Specifies the string to translate
from	Required (unless array is used). Specifies what characters to change
to	Required (unless array is used). Specifies what characters to change into
array	Required (unless to and from is used). An array containing what to change from as key, and what to change to as value
Technical Details
Return Value:	Returns the translated string.
*/
echo "The str_replace() function replaces some characters with some other characters <br>";
$s="Hello world, The world is nice";
echo str_replace("world", "Earth", $s)."<br>";
echo "........................................................... <br>";
echo "The str_replace() function can be used for replacing more than one word with some characters. <br>";
echo "If both find and replace are arrays:<br>";
$find=["Hello","world"];
$replace=["Hi","Earth"];
echo str_replace($find,$replace,$s)."<br>";
echo "..............................................<br>";
echo "If the string to be searched is an array, find and replace is performed with array element <br>";
$s1=["Blue","Black","White","Red"];
$newArray=str_replace("White","Pink",$s1);
echo "<pre>";
print_r($newArray);
echo "</pre>";
echo "............................................<br>";
echo "If find and search are array and if the string to be searched in an array element <br>";
$a1=["Hello","world","What","a","beautiful","world","!"];
$find1=["Hello","world","What"];
$replace1=["Is","it"];
$newArray1=str_replace($find1,$replace1,$a1);
echo "<pre>";
print_r($newArray1);
echo "</pre>";
echo "............................................<br>";
echo "The str_ireplace() function replaces some characters with some other characters in a string <br>";
echo str_ireplace("hello", "Hi",$s,$i)."<br>";
echo "Number of replacement:".$i."<br>";
echo "...................................................<br>";
echo "The substr_replace() function replaces a part of string with another string<br>";
$s2="HELLO WORLD,The world is nice for living";
echo substr_replace($s2," beautiful ",3,10)."<br>";
echo "..................................................<br>";
echo "Start replacing at the 4th position from the end of the string <br>";
echo substr_replace($s2,"do something for this world",10,-3)."<br>";
echo "....................................................<br>";
echo "Insert string at the beginning of HELLO with out replacing string.<br>";
echo substr_replace($s2,"Want to say ",0,0)."<br>";
echo "....................................................<br>";
echo "Replace multiple strings in an array at onece <br>";
$a3=["1:AAA","2:AAA","3:AAA"];
$i= substr_replace($a3,"BBB",3,3);
echo implode("<br>",$i);
echo "<br>....................................................<br>";
echo "The strtr() function translates certain characters in a string <br>";
$a4="Hello world! The world is nice for living";
echo strtr($a4,"eo","ia")."<br>";
echo ".............................................................<br>";
echo "array parameter is required unless from and to parameters are used in strtr() function.
An array containing what to change from as key, and what to change to as value <br>";
$a5=["Hello"=>"HI","world"=>"Earth"];
echo strtr($a4,$a5)."<br>";











?>
</body>
</html>