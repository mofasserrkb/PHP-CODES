<!DOCTYPE html>
<html>
<head>
	<title>array_rand() and array_suffle() function</title>
</head>
<body>
<?php
/*
Definition and Usage
The array_rand() function returns a random key from an array, or it returns an array of random keys if you specify that the function should return more than one key.

Syntax
array_rand(array, number)
Parameter Values
Parameter	Description
array	Required. Specifies an array
number	Optional. Specifies how many random keys to return

*/
echo "The array_rand() function returns a random key from an array, or it returns an array of random keys if you specify that the function should return more than one key <br>";
$department=["CSE","EEE","CE","ME","IPE","SE","PME","ETE","CCE"];
$newArray=array_rand($department);
echo "<pre>";
print_r($newArray);
echo "</pre>";
echo $department[$newArray]."<br>";
echo "..........................................<br>";
echo "The array_rand() function returns an array of random keys if you specify that the function should return more than one key <br>";
$department1=["IPE","SE","PME","ETE","CCE","CSE","EEE","CE"];
$newArray1=array_rand($department1,2);
echo "<pre>";
print_r($newArray1);
echo "</pre>";
echo $department1[$newArray1[0]]."<br>";
echo $department1[$newArray1[1]]."<br>";
echo "..........................................<br>";
echo "Using array_rand() for associative array <br>";
$department2=["one"=>"CSE","two"=>"EEE","three"=>"CE","four"=>"ME","five"=>"IPE","six"=>"SE","seven"=>"PME","eight"=>"ETE","nine" =>"CCE"];
$newArray3=array_rand($department2,3);
echo "<pre>";
print_r($newArray3);
echo "</pre>";
echo $department2[$newArray3[0]]."<br>";
echo $department2[$newArray3[1]]."<br>";
echo $department2[$newArray3[2]]."<br>";
echo "..............................................<br>";
echo "Using shuffle(array) function <br>";

$newArray4=["IPE","SE","PME","ETE","CCE","CSE","EEE","CE"];
shuffle($newArray4);
echo "<pre>";
print_r($newArray4);
echo "</pre>";
echo "................................................<br>";






?>
</body>
</html>