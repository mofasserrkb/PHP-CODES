<!DOCTYPE html>
<html>
<head>
	<title>range() function</title>
</head>
<body>
<?php
/*
Definition and Usage
The range() function creates an array containing a range of elements.

This function returns an array of elements from low to high.

Note: If the low parameter is higher than the high parameter, the range array will be from high to low.

Syntax
range(low, high, step)
Parameter Values
Parameter	Description
low	Required. Specifies the lowest value of the array
high	Required. Specifies the highest value of the array
step	Optional. Specifies the increment used in the range. Default is 1

Technical Details
Return Value:	Returns an array of elements from low to high.
.............................................................................

*/
echo "The range () function creates an array containing a range of elements <br>";
$newArray=range(1,10);
echo "<pre>";
print_r($newArray);
echo "</pre>";
echo "...................................<br>";
echo "Return an array of elements from 0 to 50 and incremnet by 10 <br>";
$newArray1=range(0,50,10);
echo "<pre>";
print_r($newArray1);
echo "</pre>";
echo "............................................<br>";
echo "Using letter -return array of elements from a to z <br>";
$newArray2=range("a","z");
echo "<pre>";
print_r($newArray2);
echo "</pre>";
echo "....................................................<br>";
$newArray32=range("Z","A",2);
echo "<pre>";
print_r($newArray32);
echo "</pre>";
echo "....................................................<br>";






?>
</body>
</html>