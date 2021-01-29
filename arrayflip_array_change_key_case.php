<!DOCTYPE html>
<html>
<head>
	<title>array_flip () and array_change_key () function </title>
</head>
<body>
<?php
/*
Definition and Usage
The array_flip() function flips/exchanges all keys with their associated values in an array.

Syntax
array_flip(array)
Parameter Values
Parameter	Description
array	Required. Specifies an array of key/value pairs to be flipped
Technical Details
Return Value:	Returns the flipped array on success. NULL on failure
............................................................................
Definition and Usage
The array_change_key_case() function changes all keys in an array to lowercase or uppercase.

Syntax
array_change_key_case(array, case)
Parameter Values
Parameter	Description
array	Required. Specifies the array to use
case	Optional. Possible values:
CASE_LOWER - Default value. Changes the keys to lowercase
CASE_UPPER - Changes the keys to uppercase
Technical Details
Return Value:	Returns an array with its keys in lowercase or uppercase, or FALSE if array is not an array





*/
$language=["position one"=>"Python","position two"=>"java script","position three"=>"Asp.net","position four"=>"Ruby"];
$newArray=array_flip($language);
echo "The array_flip() function flips/exchanges all keys with their associated values in an array <br>";

echo "<pre>";
print_r($newArray);
echo "</pre>";
echo "............................................................<br>";
echo "The array_change_key() function changes all the keys in an array to lowercase or uppercase <br>";
$age=["one"=>35,"two"=>40,"three"=>55,"four"=>65,"five"=>70];
$newArray1=array_change_key_case($age,CASE_UPPER);
echo "<pre>";
print_r($newArray1);
echo "</pre>";
echo "............................................................<br>";
echo "If two or more keys will be equal after running array_change_key_case() (e.g. b and B), the latest array will override the other <br>";
$animal=["a"=>"tiger","b"=>"horse","c"=>"cat","b"=>"python","d"=>"dog"];
$newArray2=array_change_key_case($animal,CASE_UPPER);
echo "<pre>";
print_r($newArray2);
echo "</pre>";










?>
</body>
</html>