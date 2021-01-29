<!DOCTYPE html>
<html>
<head>
	<title>max() and min() functions</title>
</head>
<body>
<?php
/*
Definition and Usage
The max() function returns the highest value in an array, or the highest value of several specified values.

Syntax
max(array_values);

or

max(value1,value2,...);
Parameter Values
Parameter	Description
array_values	Required. Specifies an array containing the values
value1,value2,...	Required. Specifies the values to compare (must be at least two values)
Technical Details
Return Value:	The numerically highest value
.........................................................
Definition and Usage
The min() function returns the lowest value in an array, or the lowest value of several specified values.

Syntax
min(array_values);

or

min(value1,value2,...);
Parameter Values
Parameter	Description
array_values	Required. Specifies an array containing the values
value1,value2,...	Required. Specifies the values to compare (must be at least two values)
Technical Details
Return Value:	The numerically lowest value
*/
echo "The max() function returns the highest value in an array, or the highest value of several specified values<br>";
echo (max(45,34,102,78,90,13,45,100))." max value in a list<br>";
echo "................................................<br>";
echo (max([56,23,90,45,60,70,13]))." max value in an array<br>";
echo ".................................................<br>";
echo "The min() function returns the lowest value in an array, or the lowest value of several specified values<br>";
echo (min(45,34,102,78,90,13,45,100))." min value in a list<br>";
echo (min([56,23,90,45,15,60,70,108]))." min value in an array<br>";
echo ".......................................<br>";









?>
</body>
</html>