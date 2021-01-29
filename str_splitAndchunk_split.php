<!DOCTYPE html>
<html>
<head>
	<title>str_split() and chunk_split() functions </title>
</head>
<body>
<?php
/*
Definition and Usage
The str_split() function splits a string into an array.

Syntax
str_split(string,length)
Parameter Values
Parameter	Description
string	Required. Specifies the string to split
length	Optional. Specifies the length of each array element. Default is 1
Technical Details
Return Value:	If length is less than 1, the str_split() function will return FALSE.  If length is larger than the length of string, the entire string will be returned as the only element of the array.
.............................................................................
Definition and Usage
The chunk_split() function splits a string into a series of smaller parts.

Note: This function does not alter the original string.

Syntax
chunk_split(string,length,end)
Parameter Values
Parameter	Description
string	Required. Specifies the string to split
length	Optional. A number that defines the length of the chunks. Default is 76
end	Optional. A string that defines what to place at the end of each chunk. Default is \r\n
Technical Details
Return Value:	Returns the split string

*/
echo "The str_split() function splits a string into an array <br>";
$club="Liverpool";
$newArray=str_split($club);
echo "<pre>";
print_r($newArray);
echo "</pre>";
echo "..........................................................<br>";
echo "Using length parameter in str_split() function <br>";
$newArray1=str_split($club,2);
echo "<pre>";
print_r($newArray1);
echo "</pre>";
echo "............................................................<br>";
echo "If length is larger than the length of string, the entire string will be returned as the only element of the array<br>";
$newArray2=str_split($club,25);
echo "<pre>";
print_r($newArray2);
echo "</pre>";
echo ".................................................................<br>";
echo "The chunk_split() fuction splits a string into a series of smaller part. Split <br>";
$b= "hello! World. My health is good. <br>";
$new=chunk_split($b,2,"--");
echo $new."<br>";
echo "..............................................................<br>";






?>
</body>
</html>