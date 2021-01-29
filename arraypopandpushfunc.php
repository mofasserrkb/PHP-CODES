<!DOCTYPE html>
<html>
<head>
	<title>array pop and push function</title>
</head>
<body>
<?php
/*
PHP array_pop() Function
The array_pop() function deletes the last element of an array.

Syntax
array_pop(array)
Parameter Values
Parameter	Description
array	Required. Specifies an array
...........................................................
Definition and Usage
The array_push() function inserts one or more elements to the end of an array.

Tip: You can add one value, or as many as you like.

Note: Even if your array has string keys, your added elements will always have numeric keys (See example below).

Syntax
array_push(array, value1, value2, ...)
Parameter Values
Parameter	Description
array	Required. Specifies an array
value1	Optional. Specifies the value to add (Required in PHP versions before 7.3)
value2	Optional. Specifies the value to add

Return Value:	Returns the new number of elements in the array

*/
echo "Program with array_pop() function <br>";
$color=["Blue","Red","Black","White"];
array_pop($color);
echo "printing array elements after using array_pop() function<br> ";
echo "<pre>";
print_r($color);
echo "</pre>";
 $r1=array_pop($color);
 echo $r1."<br>";//returns last element of an array
 echo "<pre>";
 print_r($color);
 echo "</pre>";
echo ".............................................. <br>";
echo "Program with array_push() function <br>";
$color1=["Yellow","Purple","bold blue"];
 $r2=array_push($color1,"Red","Megenada","Dark  blue");
echo "Returns the new number of elements in the array =". $r2."<br>";
echo "printing array elements after using array_push() function <br>";
echo "<pre>";
print_r($color1);
echo  "</pre>";

?>
</body>
</html>