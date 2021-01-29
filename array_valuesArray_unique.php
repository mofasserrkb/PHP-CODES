<!DOCTYPE html>
<html>
<head>
	<title>array_values() and array_unique() function</title>
</head>
<body>
<?php
/*
Definition and Usage
The array_values() function returns an array containing all the values of an array.

Tip: The returned array will have numeric keys, starting at 0 and increase by 1.

Syntax
array_values(array)
Parameter Values
Parameter	Description
array	Required. Specifying an array
....................................................
Definition and Usage
The array_unique() function removes duplicate values from an array. If two or more array values are the same, the first appearance will be kept and the other will be removed.

Note: The returned array will keep the first array item's key type.
Syntax
array_unique(array, sorttype)
Parameter Values
Parameter	Description
array	Required. Specifying an array
sorttype	Optional. Specifies how to compare the array elements/items. Possible values:
SORT_STRING - Default. Compare items as strings
SORT_REGULAR - Compare items normally (don't change types)
SORT_NUMERIC - Compare items numerically
SORT_LOCALE_STRING - Compare items as strings, based on current locale








*/
echo "The array_values() function returns an array containing all the values of an array not the keys <br>";
echo "Using array_values() function for indexed array <br>";
$color=["Blue","Green","Red","Yellow"];
$newArray=array_values($color);
echo "<pre>";
print_r($newArray);
echo "</pre>";
echo ".......................................... <br>";
echo "Using array_values() function for associative array <br>";
$color1=["a"=>"Black","b"=>"White","c"=>"Pink","d"=>"red"];
$newArray1=array_values($color1);
echo "<pre>";
print_r($newArray1);
echo "</pre>";
echo "............................................<br>";
echo "The array_unique() function removes duplicate values from an array. <br>";
$color2=["a"=>"Blue","b"=>"Green","c"=>"Blue","d"=>"Pink","e"=>"Blue","f"=>"White","g"=>"Pink","h"=>
"Megenda"];
$newArray2=array_unique($color2);
echo "<pre>";
print_r($newArray2);
echo "</pre>";
echo "....................................................... <br>";



?>
</body>
</html>