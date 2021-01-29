<!DOCTYPE html>
<html>
<head>
	<title>array_reduce () function </title>
</head>
<body>
<?php
/*
Definition and Usage
The array_reduce() function sends the values in an array to a user-defined function, and returns a string.

Note: If the array is empty and initial is not passed, this function returns NULL.

Syntax
array_reduce(array, myfunction, initial)
Parameter Values
Parameter	Description
array	Required. Specifies an array
myfunction	Required. Specifies the name of the function
initial	Optional. Specifies the initial value to send to the function









*/
echo "The array_reduce() function sends the values in an array to user-defined function, and returns a string <br>";
function myfunction($v,$v1)
{
	return $v."-".$v1;

}


$a=["horse","dog","cat"];
$newArray=array_reduce($a, myfunction);
echo "<pre>";
print_r($newArray);
echo "</pre>";
echo "................................................<br>";
echo "Using the array_reduce() function with the initial parameter<br>";
function myfunction1($v2,$v3)
{
	return $v2."-".$v3;
}

$a1=["Tiger","Lion","Monkey","Donkey"];
$newArray1=array_reduce($a1, myfunction1,5);
echo "<pre>";
print_r($newArray1);
echo "</pre>";
echo "......................................................<br>";
echo "Using the array_reduce() function to return a sum <br>";
function myfunction2($v4,$v5)
{
	return $v4+$v5;
}

$a2=[1,2,3,4,5,6,7,8];
$newArray2=array_reduce($a2,myfunction2,10);
echo "<pre>";
print_r($newArray2);
echo "</pre>";
echo ".......................................................<br>";





?>
</body>
</html>