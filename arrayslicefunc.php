<!DOCTYPE html>
<html>
<head>
	<title>array_slice() function</title>
</head>
<body>
<?php
/*
Definition and Usage
The array_slice() function returns selected parts of an array.

Note: If the array have string keys, the returned array will always preserve the keys
Syntax
array_slice(array, start, length, preserve)
Parameter Values
Parameter	Description
array	Required. Specifies an array
start	Required. Numeric value. Specifies where the function will start the slice. 0 = the first element. If this value is set to a negative number, the function will start slicing that far from the last element. -2 means start at the second last element of the array.
length	Optional. Numeric value. Specifies the length of the returned array. If this value is set to a negative number, the function will stop slicing that far from the last element. If this value is not set, the function will return all elements, starting from the position set by the start-parameter.
preserve	Optional. Specifies if the function should preserve or reset the keys. Possible values:
true - Preserve keys
false - Default. Reset keys

*/
echo "Start the slice from from the second array element, and return only three elements with a new array<br>";
$color=["green","blue","black","yellow","deep blue"];
$r1=array_slice($color,1,3);
echo "<pre>";
print_r($r1);
echo "</pre>";
echo "If this value is set to a negative number, the function will start slicing that far from the last element.Using a negative start parameter <br>";
$department=["CSE","EEE","ME","CE","IPE","ECE"];
$r2= array_slice($department,-4,3);
echo "<pre>";
print_r($r2);
echo "</pre>";
echo "With the preserve parameter set to true: <br>";
$club=["Real madrid","AC Milan","Bayern munich","Liverpool","Barcelona"];
$r3=array_slice($club,1,3,true);
echo "<pre>";
print_r($r3);
echo "</pre>";
echo "with the preserve parameter set to true in a associative array<br>";
$fclub=["A"=>"Real madrid","B"=>"AC Milan","C"=>"Bayern munich","D"=>"Liverpool","E"=>"Barcelona"];
$r4=array_slice($fclub, 0,3,true);
echo "<pre>";
print_r($r4);
echo "</pre>";
echo "with the preserve parameter set to true in a associative array<br>";
$f1club=["A"=>"Real madrid","B"=>"AC Milan","C"=>"Bayern munich",5=>"Liverpool","E"=>"Barcelona"];
$r5=array_slice($f1club,-4 ,4,true);
echo "<pre>";
print_r($r5);
echo "</pre>";
echo "with the preserve parameter set to true in a indexed array<br>";
$f11club=[1=>"Real madrid",2=>"AC Milan",3=>"Bayern munich",4=>"Liverpool",5=>"Barcelona"];
$r15=array_slice($f11club,2,3,true);
echo "<pre>";
print_r($r15);
echo "</pre>";
?>
</body>
</html>