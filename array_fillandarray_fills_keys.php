<!DOCTYPE html>
<html>
<head>
	<title>array_fill_keys() and array_fills () function </title>
</head>
<body>
<?php
/*
Definition and Usage
The array_fill_keys() function fills an array with values, specifying keys.

Syntax
array_fill_keys(keys, value)
Parameter Values
Parameter	Description
keys	Required. Array of values that will be used as keys
value	Required. Specifies the value to use for filling the array
Technical Details
Return Value:	Returns the filled array
...................................................
Definition and Usage
The array_fill() function fills an array with values.

Syntax
array_fill(index, number, value)
Parameter Values
Parameter	Description
index	Required. The first index of the returned array
number	Required. Specifies the number of elements to insert
value	Required. Specifies the value to use for filling the array
Technical Details
Return Value:	Returns the filled array

*/
echo "The array_fill_keys() function fills an array with values, specifying keys <br>";
$color=["red","green","blue","black","pink","white","megenda"];
$newArray=array_fill_keys($color, "A grade quality");
echo "<pre>";
print_r($newArray);
echo "</pre>";
echo "..................................................<br>";
echo "The array_fill () function fills an array with values <br>";
$newArray1=array_fill(3, 5, "Positive");
echo "<pre>";
print_r($newArray1);
echo "</pre>";
echo "......................................................<br>";





?>
</body>
</html>