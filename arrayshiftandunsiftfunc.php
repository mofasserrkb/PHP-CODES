<!DOCTYPE html>
<html>
<head>
	<title>array_shift () and array_unshift function</title>
</head>
<body>
<?php
/*
PHP array_shift() Function
The array_shift() function removes the first element from an array, and returns the value of the removed element.

Note: If the keys are numeric, all elements will get new keys, starting from 0 and increases by 1 (See example below).
Syntax
array_shift(array)
Parameter Values
Parameter	Description
array	Required. Specifies an array

Return Value:	Returns the value of the removed element from an array, or NULL if the array is empty
......................................................................
PHP array_unshift() Function

The array_unshift() function inserts new elements to an array. The new array values will be inserted in the beginning of the array.

Tip: You can add one value, or as many as you like.

Note: Numeric keys will start at 0 and increase by 1. String keys will remain the same.

Syntax
array_unshift(array, value1, value2, value3, ...)
Parameter Values
Parameter	Description
array	Required. Specifying an array
value1	Optional. Specifies a value to insert (Required in PHP versions before 7.3)
value2	Optional. Specifies a value to insert
value3	Optional. Specifies a value to insert

Return Value:	Returns the new number of elements in the array

*/
echo "Program using array_shift() function <br>";
echo "The array_shift() function removes the first element from an array, and returns the value of the removed elemen <br>";
$department=["PME","CSE","ME"];

  $r1=array_shift($department);
echo " returns the value of the removed element=".$r1."<br>";
echo "Printing the element of the array after using array_shift() function <br>";
echo"<pre>";
print_r($department);
echo "</pre>";
echo"if the keys are not numeric<br>";
$subject=["A"=>"Algorithm","B"=>"Data structure","C"=>"Compiler"];
$r3=array_shift($subject);
echo "returs the value of the removed element=".$r3."<br>";
echo "<pre>";
print_r($subject);
echo "</pre>";
echo ".............................................. <br>";
echo "Program using array_unshift() function<br>";
echo "The array_unshift() function inserts new elements to an array. The new array values will be inserted in the beginning of the array <br>";
$ranking=["Kuet","Cuet","Ruet","IUT"];
$r5=array_unshift($ranking, "Buet","Brac");
echo "Returns the new number of elements in the array=".$r5."<br>";
echo "Printing the element of the array after using array_shift() function <br>";
echo "<pre>";
print_r($ranking);
echo "</pre>";
echo "If the keys are not numeric<br>";
$ranking1=["A"=>"Kuet","B"=>"Cuet","C"=>"Ruet","D"=>"IUT"];
$r6=array_unshift($ranking1, "Buet","Brac","NSU");
echo "Printing the elements of the array after using array_unshift() function <br> ";
echo "<pre>";
print_r($ranking1);
echo "</pre>";




?>
</body>
</html>