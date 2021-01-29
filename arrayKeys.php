<!DOCTYPE html>
<html>
<head>
	<title>array keys function</title>
</head>
<body>
<?php
/*
Definition and Usage
The array_keys() function returns an array containing the keys.
Syntax
array_keys(array, value, strict)
Parameter Values
Parameter	Description
array	Required. Specifies an array
value	Optional. You can specify a value, then only the keys with this value are returned
strict	Optional. Used with the value parameter. Possible values:
true - Returns the keys with the specified value, depending on type: the number 5 is not the same as the string "5".
false - Default value. Not depending on type, the number 5 is the same as the string "5".
...........................................................................................................
PHP array_key_exists() Function

Definition and Usage
The array_key_exists() function checks an array for a specified key, and returns true if the key exists and false if the key does not exist.

Tip: Remember that if you skip the key when you specify an array, an integer key is generated, starting at 0 and increases by 1 for each value.
Syntax
array_key_exists(key, array)
Parameter Values
Parameter	Description
key	Required. Specifies the key
array	Required. Specifies an array
Return Value:	Returns TRUE if the key exists and FALSE if the key does not exis

*/
echo "array_keys() function <br>";
echo "array_keys() function return an array containing the keys <br>";
$club=["Position1"=>"Real madrid","Position2"=>"Liverpool","Position3"=>"Bayern munich"];
$newArray=array_keys($club);
echo "<pre>";
print_r($newArray);
echo "</pre>";
echo ".................................................... <br>";
echo "using the value parameter in the  array_keys() function <br> ";
$Epl=["One"=>"Liverpool","Two"=>"Manchester city","Three"=>"Everton","Four"=>"Aston villa"];
$newArray1=array_keys($Epl,"Manchester city");
echo "<pre>";
print_r($newArray1);
echo "</pre>";
echo "......................................................<br>";
echo "using strict parameter,true in the array_keys() <br>";
$number=["One"=>50,"Two"=>40,"Three"=>30,"Four"=>"40","Fifth"=>40];
$newArray2= array_keys($number,40,true);
echo "<pre>";
print_r($newArray2);
echo "</pre>";
echo ".....................................................<br>";
echo "using strict parameter,false in the array_keys() <br>";
$number1=["One"=>150,"Two"=>40,"Three"=>30,"Four"=>"150","Fifth"=>150];
$newArray3= array_keys($number1,150,false);
echo "<pre>";
print_r($newArray3);
echo "</pre>";
echo ".....................................................<br>";
echo "array_key_exists() function <br>";
echo "The array_key_exists() function checks an array for a specified key, and returns true if the key exists and false if the key does not exist.<br>";
$subject=["ONE"=>"CSE","TWO"=>"EEE","THREE"=>"IPE","FOUR"=>"ME"];
echo "<br>Checking a specific key using array_key_exists() function <br>";
if(array_key_exists("TWO", $subject))
{
	echo "Array key exists <br>";

}
else
{
   echo "Array key does not exist <br>";
}
echo "..........................................................<br>";
echo "<br>Check if the integer key 0 exists in an array:<br>";
$brand=["Nike","Addidas","Puma"];
if (array_key_exists(0,$brand))
{
	echo "Array key exist <br>";
}
else
{
	echo "Array key does not exist <br>";

}
echo "............................................................ <br>";
echo "key_exists() function <br>";
$class1=["one"=>1,"two"=>2,"three"=>3,"four"=>4,"five"=>5];
if (key_exists("three",$class1))
{
	echo "Array key exists <br>";
}
else
{
	echo "Array key doesnot exist <br>";
}
echo "......................................................<br>";
echo "array_key_first() function <br>";
$class2= array_key_first($class1);
echo "<pre>";
print_r($class2);

echo "</pre>";
echo "........................................................<br>";
echo "array_key_last() function <br>";
$class3= array_key_last($class1);
echo "<pre>";
print_r($class3);
echo "</pre>";





?>
</body>
</html>