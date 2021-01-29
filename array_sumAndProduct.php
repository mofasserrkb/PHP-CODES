<!DOCTYPE html>
<html>
<head>
	<title>array_sum() and array_product () function </title>
</head>
<body>
<?php
/*
Definition and Usage
The array_sum() function returns the sum of all the values in the array.

Syntax
array_sum(array)
Parameter Values
Parameter	Description
array	Required. Specifies an array
Technical Details
Return Value:	Returns the sum of all the values in an array
...................................................................
Definition and Usage
The array_product() function calculates and returns the product of an array.

Syntax
array_product(array)
Parameter Values
Parameter	Description
array	Required. Specifies an array
Technical Details
Return Value:	Returns the product as an integer or float

*/
echo "The array_sum() function returns the sum of all values in an array <br>";
$number=[23,45,6.7,223,90];
$newArray=array_sum($number);
echo "Sum=". $newArray;
echo "............................................................... <br>";
echo "The array_product() function calculates and returns the product of an array <br>";
$number1= [2.5,3,7,8,14];
$newArray1= array_product($number1);
echo "Product =".$newArray1;
echo ".................................................................. <br>";










?>
</body>
</html>