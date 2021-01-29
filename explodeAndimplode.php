<!DOCTYPE html>
<html>
<head>
	<title>explode() and implode functions </title>
</head>
<body>
<?php
/*
Definition and Usage
The explode() function breaks a string into an array.

Note: The "separator" parameter cannot be an empty string.

Note: This function is binary-safe.

Syntax
explode(separator,string,limit)
Parameter Values
Parameter	Description
separator	Required. Specifies where to break the string
string	Required. The string to split
limit	Optional. Specifies the number of array elements to return.
Possible values:

Greater than 0 - Returns an array with a maximum of limit element(s)
Less than 0 - Returns an array except for the last -limit elements()
0 - Returns an array with one element

Technical Details
Return Value:	Returns an array of strings
..................................................................
Definition and Usage
The implode() function returns a string from the elements of an array.

Note: The implode() function accept its parameters in either order. However, for consistency with explode(), you should use the documented order of arguments.

Note: The separator parameter of implode() is optional. However, it is recommended to always use two parameters for backwards compatibility.

Note: This function is binary-safe.

Syntax
implode(separator,array)
Parameter Values
Parameter	Description
separator	Optional. Specifies what to put between the array elements. Default is "" (an empty string)
array	Required. The array to join to a string
Technical Details
Return Value:	Returns a string from elements of an array

*/
echo "The explode () function breaks a string into an array <br>";
$a="Hello world. It's a beautiful day.";
$newArray=explode(" ",$a);
echo "<pre>";
print_r($newArray);
echo "</pre>";
echo "......................................<br>";
echo " specifies the number of elements to return by using third parameter in explode() function <br>";
$newArray1=explode(" ",$a,3);
echo "<pre>";
print_r($newArray1);
echo "</pre>";
echo ".......................................<br>";
echo "Using the zero limit parameter to return a number of array elements <br>";
$newArray2=explode(" ",$a,0);
echo "<pre>";
print_r($newArray2);
echo "</pre>";
echo "........................................<br>";
echo "Using the negative limit parameter to return a number of array elements <br>";
$newArray3=explode(" ",$a,-1);
echo "<pre>";
print_r($newArray3);
echo "</pre>";
echo "......................................................<br>";
echo "The implode() function returns a string from the elements of an array <br>";
$a1=["Binary","digit","are","0","and","1"];
$newArray3=implode(" ",$a1);
echo $newArray3."<br>";
echo "..........................................................<br>";
$newArray4=implode("-",$a1);
echo $newArray4."<br>";
echo "..........................................................<br>";






?>
</body>
</html>