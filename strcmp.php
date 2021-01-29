<!DOCTYPE html>
<html>
<head>
	<title>string compare function </title>
</head>
<body>
<?php
/*
Definition and Usage
The strcmp() function compares two strings.

Note: The strcmp() function is binary-safe and case-sensitive.

Tip: This function is similar to the strncmp() function, with the difference that you can specify the number of characters from each string to be used in the comparison with strncmp().

Syntax
strcmp(string1,string2)
Parameter Values
Parameter	Description
string1	Required. Specifies the first string to compare
string2	Required. Specifies the second string to compare
Technical Details
Return Value:	This function returns:
0 - if the two strings are equal
<0 - if string1 is less than string2
>0 - if string1 is greater than string2
..................................................................
Definition and Usage
The strncmp() function compares two strings.

Note: The strncmp() is binary-safe and case-sensitive.

Tip: This function is similar to the strcmp() function, except that strcmp() does not have the length parameter.

Syntax
strncmp(string1,string2,length)
Parameter Values
Parameter	Description
string1	Required. Specifies the first string to compare
string2	Required. Specifies the second string to compare
length	Required. Specify the number of characters from each string to be used in the comparison
Technical Details
Return Value:	This function returns:
0 - if the two strings are equal
<0 - if string1 is less than string2
>0 - if string1 is greater than string2
..............................................................
Definition and Usage
The strcmp() function compares two strings.

Note: The strcmp() function is binary-safe and case-sensitive.

Tip: This function is similar to the strncmp() function, with the difference that you can specify the number of characters from each string to be used in the comparison with strncmp().

Syntax
strcmp(string1,string2)
Parameter Values
Parameter	Description
string1	Required. Specifies the first string to compare
string2	Required. Specifies the second string to compare

Technical Details
Return Value:	This function returns:
0 - if the two strings are equal
<0 - if string1 is less than string2
>0 - if string1 is greater than string2
...............................................................
Definition and Usage
The strncasecmp() function compares two strings.

Note: The strncasecmp() is binary-safe and case-insensitive.

Tip: This function is similar to the strcasecmp() function, except that strcasecmp() does not have the length parameter.

Syntax
strncasecmp(string1,string2,length)
Parameter Values
Parameter	Description
string1	Required. Specifies the first string to compare
string2	Required. Specifies the second string to compare
length	Required. Specify the number of characters from each string to be used in the comparison
...................................................................
Definition and Usage
The strnatcmp() function compares two strings using a "natural" algorithm.

In a natural algorithm, the number 2 is less than the number 10. In computer sorting, 10 is less than 2, because the first number in "10" is less than 2.

Note: This function is case-sensitive.

Syntax
strnatcmp(string1,string2)
Parameter Values
Parameter	Description
string1	Required. Specifies the first string to compare
string2	Required. Specifies the second string to compare

Technical Details
Return Value:	This function returns:
0 - if the two strings are equal
<0 - if string1 is less than string2
>0 - if string1 is greater than string2
....................................................................................
Definition and Usage
The strnatcasecmp() function compares two strings using a "natural" algorithm.

In a natural algorithm, the number 2 is less than the number 10. In computer sorting, 10 is less than 2, because the first number in "10" is less than 2.

Note: The strnatcasecmp() is case-insensitive.

Syntax
strnatcasecmp(string1,string2)
......................................................................................
Definition and Usage
The substr_compare() function compares two strings from a specified start position.

Tip: This function is binary-safe and optionally case-sensitive.

Syntax
substr_compare(string1,string2,startpos,length,case)
Parameter Values
Parameter	Description
string1	Required. Specifies the first string to compare
string2	Required. Specifies the second string to compare
startpos	Required. Specifies where to start comparing in string1. If negative, it starts counting from the end of the string
length	Optional. Specifies how much of string1 to compare
case	Optional. A boolean value that specifies whether or not to perform a case-sensitive compare:
FALSE - Default. Case-sensitive
TRUE - Case-insensitive

Technical Details
Return Value:	This function returns:
0 - if the two strings are equal
<0 - if string1 (from startpos) is less than string2
>0 - if string1 (from startpos) is greater than string2
If length is equal or greater than length of string1, this function returns FALSE.
....................................................................
Definition and Usage
The similar_text() function calculates the similarity between two strings.

It can also calculate the similarity of the two strings in percent.

Note: The levenshtein() function is faster than the similar_text() function. However, the similar_text() function will give you a more accurate result with less modifications needed.

Syntax
similar_text(string1,string2,percent)
Parameter Values
Parameter	Description
string1	Required. Specifies the first string to be compared
string2	Required. Specifies the second string to be compared
percent	Optional. Specifies a variable name for storing the similarity in percent
Technical Details
Return Value:	Returns the number of matching characters of two strings
*/
echo "The strcmp() function compares two strings. This function is case-sensitive <br>";
$s="Hello world!";
$s1="Hello world!";
echo strcmp($s,$s1)."<br>";
echo "..............................................................<br>";
echo strcmp("hello","HEllo")."<br>";
echo "...................................................................<br>";
echo strcmp("Hello","hELLo")."<br>";
echo ".....................................................................<br>";
echo "string 1 is greater than string 2 <br>";
echo strcmp("hello world","hello")."<br>";
echo "............................................................................<br>";
echo "String 1 is less than string 2 <br>";
echo strcmp("hello world!", "hello world!hello")."<br>";
echo "....................................................................<br>";
echo "The strncmp() function compares two strings <br>";
echo "length parameter is required,it specifies the number of characters from each string to be used in the comparison <br>";
echo strncmp("Hello world!","Hello world!hello world",6)."<br>";
echo "................................................................. <br>";
echo strncmp("Hello world!","hello world!hello world",6)." that means first string is greater than second string <br>";
echo "................................................................. <br>";
echo "strcasecmp() function compares two strings. This function is a case-insensitive function <br>";
echo  strcasecmp("Hello World","Hello world")."<br>Though first string and second string is not in same case, this function returns 0 that indicates two string are same <br>";
echo "..........................................................................<br>";
echo "The strncasecmp() function is similar to the strcasecmp() function except that strcasecmp()  function has not length parameter <br>";
echo strncasecmp("Hello world","HELLO WORLD!new year",11)."<br>";
echo ".........................................................<br>";
echo "The strnatcmp() function compares two strings using natural algorithm <br>";
echo "In a natural algorithm, the number 2 is less than the number 10. In computer sorting, 10 is less than 2, because the first number in '10' is less than 2. <br>";
echo "Using string function which uses computing algorithm <br>";
echo strcmp("Pic2","Pic10")."<br>";
echo strnatcmp("Pic2","Pic10")."<br>";
echo ".........................................<br>";
echo "Difference between natural algorithm(strnatcmp) and regular computer string sorting algorithm <br>";
$array1=$array2=["pic1","pin20","pic10","pic111","pic30","pic200"];
echo "standard string comparison <br>";
usort($array1,"strcmp");
echo "<pre>";
print_r($array1);
echo "</pre>";
echo "Natural order sorting algorithm<br>";
usort($array2,"strnatcmp");
echo "<pre>";
print_r($array2);
echo "</pre>";
echo "...................................................<br>";
echo "The strnatcasecmp() function compares two string using natural algorithm.This function is case-insensitive<br>";
echo strnatcasecmp("2Hello world!","10Hello WORLD!")."<br>";
echo strnatcasecmp("10Hello world","2Hello WORLD!")."<br>";
echo "........................................................................<br>";
echo "The substr_compare() function compares two strings from a specified position <br>";
echo "Compare two strings using substr_compare() function<br>";
echo substr_compare("Hello world!","Hello world!",0)."<br>";
echo "Compare two strings, when start position in string 1 for the comparison is not zero <br>";
echo substr_compare("Hello world","world",6)."<br>";
echo "Using all parameters in substr_compare() functions <br>";
echo substr_compare("world","or",1,2)."<br>";
echo substr_compare("WORLD","RLD",-3,3)."<br>";
echo substr_compare("World", "OR",1,2,TRUE)."<br>";
echo "..............................................<br>";
echo "string 1 is greater than string 2 <br>";
echo substr_compare("Hello world","world",0)."<br>";
echo "string 2 is greater than string 1<br>";
echo substr_compare("world","Hello world",0)."<br>";
echo "..................................................<br>";
echo "The similar_text() function calculates the similarity between two strings <br>";
echo "Calculate the similarity between two strings and return the matching characters <br>";
echo similar_text("Hello world","Hello peter")."<br>";
echo ".....................................................<br>";
echo "Third parameter in similar_text() function specifies a variable name for storing the similarity in percent <br>";
$s=similar_text("Hello world","Hello peter",$percent)."<br>";

echo "Number of matching characters=". $s."<br>";
echo "Similarity in percentage=". $percent."<br>";
echo "...............................................<br>";






?>
</body>
</html>