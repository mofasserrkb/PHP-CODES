<!DOCTYPE html>
<html>
<head>
	<title>array_diff() function</title>
</head>
<body>
<?php
/*
Definition and Usage
The array_diff() function compares the values of two (or more) arrays, and returns the differences.

This function compares the values of two (or more) arrays, and return an array that contains the entries from array1 that are not present in array2 or array3, etc.

Syntax
array_diff(array1, array2, array3, ...)
Parameter Values
Parameter	Description
array1	Required. The array to compare from
array2	Required. An array to compare against
array3,...	Optional. More arrays to compare against
.............................................................
Definition and Usage
The array_diff_key() function compares the keys of two (or more) arrays, and returns the differences.

This function compares the keys of two (or more) arrays, and return an array that contains the entries from array1 that are not present in array2 or array3, etc.

Syntax
array_diff_key(array1, array2, array3, ...)
Parameter Values
Parameter	Description
array1	Required. The array to compare from
array2	Required. An array to compare against
array3,...	Optional. More arrays to compare against
..............................................................
Definition and Usage
The array_diff_assoc() function compares the keys and values of two (or more) arrays, and returns the differences.

This function compares the keys and values of two (or more) arrays, and return an array that contains the entries from array1 that are not present in array2 or array3, etc.

Syntax
array_diff_assoc(array1,array2,array3...)
Parameter Values
Parameter	Description
array1	Required. The array to compare from
array2	Required. An array to compare against
array3,...	Optional. More arrays to compare against
...........................................................
The array_diff_uassoc() function compares the keys and values of two (or more) arrays, and returns the differences.

Note: This function uses a user-defined function to compare the keys!

This function compares the keys and values of two (or more) arrays, and return an array that contains the entries from array1 that are not present in array2 or array3, etc.
...........................................................................
Definition and Usage
The array_udiff_assoc() function compares the keys and values of two or more arrays, and returns the differences.

Note: This function uses a built-in function to compare the keys, and a user-defined function to compare the values!

This function compares the keys and values of two (or more) arrays, and return an array that contains the entries from array1 that are not present in array2 or array3, etc.
...........................................................................
Definition and Usage
The array_udiff() function compares the values of two or more arrays, and returns the differences.

Note: This function uses a user-defined function to compare the values!

This function compares the values of two (or more) arrays, and return an array that contains the entries from array1 that are not present in array2 or array3, etc.
.................................................................................
Definition and Usage
The array_udiff_uassoc() function compares the keys and values of two or more arrays, and returns the differences.

Note: This function uses two user-defined functions for comparison; the key is used in the first function and the value is used in the second!

This function compares the keys and values of two (or more) arrays, and return an array that contains the entries from array1 that are not present in array2or array3, etc.

Syntax
array_udiff_uassoc(array1, array2, array3, ..., myfunc_key, myfunc_value)
Parameter Values
Parameter	Description
array1	Required. The array to compare from
array2	Required. An array to compare against
array3,...	Optional. More arrays to compare against
myfunc_key	Required. The name of the user-defined function that compares the array keys.
A string that define a callable comparison function. The comparison function must return an integer <, =, or > than 0 if the first argument is <, =, or > than the second argument
myfunc_value	Required. The name of the user-defined function that compares the array values.
A string that define a callable comparison function. The comparison function must return an integer <, =, or > than 0 if the first argument is <, =, or > than the second argument.
.........................................................................
*/
echo "The array_diff() function compares the values of two (or more) arrays, and returns the differences. 
<br>";
$color=["a"=>"red","b"=>"green","c"=>"yellow","d"=>"white","g"=>"dark blue", "i"=>"silver"];
$color1=["a"=>"black","b"=>"green","c"=>"yellow","f"=>"white"];
$color2=["a"=>"red","b"=>"pink", "d"=>"white","i"=>"grey"];
$newArray=array_diff($color,$color1);

echo "<pre>";
print_r($newArray);
echo "</pre>";
echo "..................................................................<br>";
echo" The array_diff_key() function compares the keys of two (or more) arrays, and returns the differences.
<br>";
$newArray1=array_diff_key($color,$color1);
echo "<pre>";
print_r($newArray1);
echo "</pre>";
echo ".........................................................................<br>";
echo "The array_diff_assoc() function compares the keys and values of two (or more) arrays, and returns the differences. <br> ";
$newArray2=array_diff_assoc($color,$color1);
echo "<pre>";
print_r($newArray2);
echo "</pre>";
echo "........................................................ <br>";
$newArray3=array_diff_assoc($color,$color1,$color2);
echo "<pre>";
print_r($newArray3);
echo "</pre>";
echo ".................................................... <br>";
echo "The array_diff_uassoc() function compares the keys and values of two (or more) arrays, and returns the differences. <br>";
function myfunction ($i1,$i2)
{
	if($i1===$i2)
	{
		return 0;
	}
	return ($i1>$i2)?1:-1;

}
$programming=["A"=>"C","B"=>"C#","C"=>"Asp dot net","D"=>"Java","f"=>"Rubi"];
$programming1=["A"=>"Python","B"=>"C#","C"=>"Asp dot net","f"=>"Java","E"=>"Java script"];
$newArray4=array_diff_uassoc($programming,$programming1,"myfunction");
echo "<pre>";
print_r($newArray4);
echo "</pre>";
echo "..................................................<br>";
echo "array_udiff_assoc()function works as like as the array_diff_uassoc() function <br>";
$newArray5=array_udiff_assoc($programming,$programming1,"myfunction");
echo "<pre>";
print_r($newArray5);
echo "</pre>";
echo ".....................................................<br>"; 
echo "The array_udiff() function compares the values of two or more arrays, and returns the differences. <br>";
$newArray6=array_udiff($programming,$programming1,"myfunction");
echo "<pre>";
print_r($newArray6);
echo "</pre>";
echo "............................................................<br>";
echo "The array_udiff_uassoc() function compares the keys and values of two or more arrays, and returns the differences.<br>";
function myfunction_key($j1,$j2)
{
   if($j1===$j2)
   {
   	 return 0;
   }
   return ($j1>$j2)? 1:-1;

}
function myfunction_value($j1,$j2)
{
	if($j1===$j2)
	{
		return 0;
	}
 return ($j1>$j2)? 1:-1;
}
$uni=["rank 1"=>"Buet","rank 2"=>"Kuet","rank 3"=>"Cuet","rank 4"=>"Ruet"];
$uni1=["rank 1"=>"Buet","rank 5"=>"kuet","rank 3"=>"Cuet","rank 4"=>"IUT"];
$uni2=["rank 1"=>"Buet", "rank 5"=>"DU","rank 3"=>"Nsu","rank 2"=>"kuet","rank 4"=>"Aust"];
$newArray7=array_udiff_uassoc($uni,$uni1,"myfunction_key","myfunction_value");
echo "<pre>";
print_r($newArray7);
echo "</pre>";





?>

</body>
</html>