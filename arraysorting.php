<!DOCTYPE html>
<html>
<head>
	<title>array sorting function </title>
</head>
<body>
<?php
/*
Definition and Usage
The sort() function sorts an indexed array in ascending order.

Tip: Use the rsort() function to sort an indexed array in descending order.

Syntax
sort(array, sorttype)
Parameter Values
Parameter	Description
array	Required. Specifies the array to sort
sorttype	Optional. Specifies how to compare the array elements/items. Possible values:
0 = SORT_REGULAR - Default. Compare items normally (don't change types)
1 = SORT_NUMERIC - Compare items numerically
2 = SORT_STRING - Compare items as strings
3 = SORT_LOCALE_STRING - Compare items as strings, based on current locale
4 = SORT_NATURAL - Compare items as strings using natural ordering
5 = SORT_FLAG_CASE -
Return Value:	TRUE on success. FALSE on failure
......................................................
Definition and Usage
The rsort() function sorts an indexed array in descending order.

Tip: Use the sort() function to sort an indexed array in ascending order.

Syntax
rsort(array, sorttype)
Parameter Values
Parameter	Description
array	Required. Specifies the array to sort
sorttype	Optional. Specifies how to compare the array elements/items. Possible values:
0 = SORT_REGULAR - Default. Compare items normally (don't change types)
1 = SORT_NUMERIC - Compare items numerically
2 = SORT_STRING - Compare items as strings
3 = SORT_LOCALE_STRING - Compare items as strings, based on current locale
4 = SORT_NATURAL - Compare items as strings using natural ordering
5 = SORT_FLAG_CASE -
Return Value:	TRUE on success. FALSE on failure
.............................................................
Definition and Usage
The asort() function sorts an associative array in ascending order, according to the value.

Tip: Use the arsort() function to sort an associative array in descending order, according to the value.

Tip: Use the ksort() function to sort an associative array in ascending order, according to the key.

Syntax
asort(array, sorttype)
Parameter Values
Parameter	Description
array	Required. Specifies the array to sort
sorttype	Optional. Specifies how to compare the array elements/items. Possible values:
0 = SORT_REGULAR - Default. Compare items normally (don't change types)
1 = SORT_NUMERIC - Compare items numerically
2 = SORT_STRING - Compare items as strings
3 = SORT_LOCALE_STRING - Compare items as strings, based on current locale
4 = SORT_NATURAL - Compare items as strings using natural ordering
5 = SORT_FLAG_CASE -

Technical Details
Return Value:	TRUE on success. FALSE on failure
...........................................................
Definition and Usage
The ksort() function sorts an associative array in ascending order, according to the key.

Tip: Use the krsort() function to sort an associative array in descending order, according to the key.

Tip: Use the asort() function to sort an associative array in ascending order, according to the value.

Syntax
ksort(array, sorttype)
Parameter Values
Parameter	Description
array	Required. Specifies the array to sort
sorttype	Optional. Specifies how to compare the array elements/items. Possible values:
0 = SORT_REGULAR - Default. Compare items normally (don't change types)
1 = SORT_NUMERIC - Compare items numerically
2 = SORT_STRING - Compare items as strings
3 = SORT_LOCALE_STRING - Compare items as strings, based on current locale
4 = SORT_NATURAL - Compare items as strings using natural ordering
5 = SORT_FLAG_CASE -

Technical Details
Return Value:	TRUE on success. FALSE on failure
................................................................
Definition and Usage
The natsort() function sorts an array by using a "natural order" algorithm. The values keep their original keys.

In a natural algorithm, the number 2 is less than the number 10. In computer sorting, 10 is less than 2, because the first number in "10" is less than 2.

Syntax
natsort(array)
Parameter Values
Parameter	Description
array	Required. Specifies the array to sort

Technical Details
Return Value:	Returns TRUE on success, or FALSE on failure.
.......................................................................
Definition and Usage
The natcasesort() function sorts an array by using a "natural order" algorithm. The values keep their original keys.

In a natural algorithm, the number 2 is less than the number 10. In computer sorting, 10 is less than 2, because the first number in "10" is less than 2.

This function is case-insensitive.

Syntax
natcasesort(array)
Parameter Values
Parameter	Description
array	Required. Specifies the array to sort
Technical Details
Return Value:	TRUE on success. FALSE on failure
.............................................................................................
Definition and Usage
The array_multisort() function returns a sorted array. You can assign one or more arrays. The function sorts the first array, and the other arrays follow, then, if two or more values are the same, it sorts the next array, and so on.

Note: String keys will be maintained, but numeric keys will be re-indexed, starting at 0 and increase by 1.

Note: You can assign the sortorder and the sorttype parameters after each array. If not specified, each array parameter uses the default values.

Syntax
array_multisort(array1, sortorder, sorttype, array2, array3, ...)
Parameter Values
Parameter	Description
array1	Required. Specifies an array
sortorder	Optional. Specifies the sorting order. Possible values:
SORT_ASC - Default. Sort in ascending order (A-Z)
SORT_DESC - Sort in descending order (Z-A)
sorttype	Optional. Specifies the type to use, when comparing elements. Possible values:
SORT_REGULAR - Default. Compare elements normally (Standard ASCII)
SORT_NUMERIC - Compare elements as numeric values
SORT_STRING - Compare elements as string values
SORT_LOCALE_STRING - Compare elements as string, based on the current locale (can be changed using setlocale())
SORT_NATURAL - Compare elements as strings using "natural ordering" like natsort()
SORT_FLAG_CASE - Can be combined (bitwise OR) with SORT_STRING or SORT_NATURAL to sort strings case-insensitively
array2	Optional. Specifies an array
array3	Optional. Specifies an array
Technical Details
Return Value:	Returns TRUE on success or FALSE on failure
.................................................................................
Definition and Usage
The array_reverse() function returns an array in the reverse order.

Syntax
array_reverse(array, preserve)
Parameter Values
Parameter	Description
array	Required. Specifies an array
preserve	Optional. Specifies if the function should preserve the keys of the array or not. Possible values:
true
false

Technical Details
Return Value:	Returns the reversed array
..................................................
Definition and Usage
The usort() function sorts an array using a user-defined comparison function.

Syntax
usort(array, myfunction)
Parameter Values
Parameter	Description
array	Required. Specifies the array to sort
myfunction	Optional. A string that define a callable comparison function. The comparison function must return an integer <, =, or > than 0 if the first argument is <, =, or > than the second argument
Technical Details
Return Value:	TRUE on success. FALSE on failure
...........................................................................
Definition and Usage
The uasort() function sorts an array by values using a user-defined comparison function.

Tip: Use the uksort() function to sort an array by keys using a user-defined comparison function.

Syntax
uasort(array, myfunction)
Parameter Values
Parameter	Description
array	Required. Specifies the array to sort
myfunction	Optional. A string that define a callable comparison function. The comparison function must return an integer <, =, or > than 0 if the first argument is <, =, or > than the second argument
Technical Details
Return Value:	TRUE on success. FALSE on failure
............................................................................
Definition and Usage
The uksort() function sorts an array by keys using a user-defined comparison function.

Tip: Use the uasort() function to sort an array by values using a user-defined comparison function.

Syntax
uksort(array, myfunction)
Parameter Values
Parameter	Description
array	Required. Specifies the array to sort
myfunction	Optional. A string that define a callable comparison function. The comparison function must return an integer <, =, or > than 0 if the first argument is <, =, or > than the second argument
Technical Details
Return Value:	TRUE on success. FALSE on failure
..................................................................

*/
echo "The sort() function sorts an indexed array in ascending order <br>";
$a=["Horse","Ant","Tiger","Elephant","Lion","Frog","cock"];
sort($a);
echo "<pre>";
print_r($a);
echo "</pre>";
echo "........................................................<br>";
echo "If array elements are both in uppercase and lowercase, it first sorts uppercase array elements and then it sorts lowercase array elements<br>";
$b=["Horse","Ant","Tiger","Elephant","Lion","Frog","cock","hare","tortoise"];
sort($b);
echo "<pre>";
print_r($b);
echo "</pre>";
echo "............................................................<br>";
echo "The rsort() function sorts an indexed array in descending order <br>";
$c=["Horse","Ant","Tiger","Elephant","Lion","Frog"];
rsort($c);
echo "<pre>";
print_r($c);
echo "</pre>";
echo ".............................................................<br>";
echo "The sort() and rsort() functions for indexed array with numeric values<br>";
$d=[23,89,25,90,10,45,33];
$f=[23,89,25,90,10,45,33];
sort($d);
rsort($f);
echo "<pre>";
print_r($d);
echo "</pre>";
echo "..............................................<br>";
echo "<pre>";
print_r($f);
echo "</pre>";
echo "...................................................<br>";
echo "sort () and rsort () functions for associative array <br>";
$g=["a"=>"pink","b"=>"yellow","c"=>"black","d"=>"green","e"=>"white","f"=>"megenda"];
$h=["a"=>"pink","b"=>"yellow","c"=>"black","d"=>"green","e"=>"white","f"=>"megenda"];

sort($g);
rsort($h);
echo "<pre>";
print_r($g);
echo "</pre>";
echo "......................................................<br>";
echo "<pre>";
print_r($h);
echo "</pre>";
echo ".............................................................<br>";
echo "using asort() and arsort() functions for associative array <br>";
echo "The asort() sorts an associative array in ascending order,according to the value <br>";
$i=["a"=>"pink","b"=>"yellow","c"=>"black","d"=>"green","e"=>"white","f"=>"megenda"];
$j=["a"=>"pink","b"=>"yellow","c"=>"black","d"=>"green","e"=>"white","f"=>"megenda"];
asort($i);
arsort($j);
echo "<pre>";
print_r($i);
echo "</pre>";
echo "................................................................<br>";
echo "The arsort() function sorts an associative array in descending order,according to the value <br>";
echo "<pre>";
print_r($j);
echo "</pre>";
echo ".....................................................................<br>";
echo "Using ksort()and krsort() functions for an  associative array <br>";
echo "The ksort() function sorts an associative array in ascending order according to the key<br>";
$k=["a"=>"pink","b"=>"yellow","c"=>"black","d"=>"green","e"=>"white","f"=>"megenda"];
$l=["a"=>"pink","b"=>"yellow","c"=>"black","d"=>"green","e"=>"white","f"=>"megenda"];
ksort($k);
echo "<pre>";
print_r($k);
echo "</pre>";
echo "...............................................<br>";
echo "The krsort() function sorts an associative array in descending order according to the key <br>";
krsort($l);
echo "<pre>";
print_r($l);
echo "</pre>";
echo "......................................................<br>";
echo "The natsort()function sorts an array by using natural order algorithm.The values keep their original keys. <br>";
$temp_files=["temp15.txt","temp1.txt","temp2.txt","temp13.txt","temp10.txt","temp22.txt"];
echo "standard sorting using sort() function <br>";
sort($temp_files);
echo "<pre>";
print_r($temp_files);
echo "</pre>";
echo ".............................................................<br>";
echo "sorts an array in natural order algorithm using natsort() function <br>";
natsort($temp_files);
echo "<pre>";
print_r($temp_files);
echo "</pre>";
echo "..................................................................<br>";
echo "The natcasesort() function sorts an array by using natural order algoritm. The values keep their original keys <br>";
$temp_files1=["temp15.txt","Temp10.txt","temp1.txt","Temp22.txt","temp2.txt"];
echo "natural order using natsort() function <br>";
natsort($temp_files1);
echo "<pre>";
print_r($temp_files1);
echo "</pre>";
echo "......................................................................<br>";
echo "natural order case insensitive using natcasesort() function <br>";
natcasesort($temp_files1);
echo "<pre>";
print_r($temp_files1);
echo "</pre>";
echo "...........................................................<br>";
echo "The array_multisort() function returns a sorted array <br>";
echo"Return a sorted array in ascending order for a single array <br>";
$s=["Real madrid","Arsenal","Liverpool","Chelsea","Barcelona"];
array_multisort($s);
echo "<pre>";
print_r($s);
echo "</pre>";
echo "..............................................................<br>";
echo "Return a sorted array in ascending order for two arrays <br> ";
echo "If array_multisort() function sorts first array in ascending order then it sorts second array in descending array. If this function sorts first array in descending then it sorts second array in ascending order<br>";

$sub1=["Dog","Cat","Frog","Ant","Elephant"];
$sub2=["Fido","Missy","Cow","Rat","Hare"];

array_multisort($sub1,$sub2);
$sub11=["Dog","Cat","Frog","Ant","Elephant"];
$sub21=["Fido","Missy","Cow","Rat","Hare"];
array_multisort($sub11,SORT_DESC,$sub21);
echo "If array_multisort() function sorts first array in ascending order then it sorts second array in descending array. <br>";
echo "<pre>";
print_r($sub1);
echo "</pre>";
echo ".................................................................<br>";
echo "If this function sorts first array in descending then it sorts second array in ascending order<br>";
echo "<pre>";
print_r($sub2);
echo "</pre>";
echo "...................................................................<br>";
echo "<pre>";
print_r($sub11);
echo "</pre>";
echo "......................................................................<br>";
echo "<pre>";
print_r($sub21);
echo "</pre>";
echo "........................................................................<br>";
echo "The array_reverse() function returns an array in the reverse order.but this function doesnot change the main array.it returns a new array in the reverse order <br>";
$car=["a"=>"BMW","b"=>"Audi","c"=>"Lambrogini","d"=>"Mecedes"];
$new1=array_reverse($car);
echo "<pre>";
print_r($new1);
echo "</pre>";
echo "......................................................................<br>";
echo "Return the original array ,the reverse array and the preserved array <br>";
$car2=["volvo","XC90",

       [ "BMW","Audi"],
       "Lambrogini"
];
$reverse=array_reverse($car2);
$preserve=array_reverse($car2,true);
echo "<pre>";
print_r($car2);
echo "</pre>";
echo ".........................................................................<br>";
echo "Showing array elements without preserved keys <br>";
echo "<pre>";
print_r($reverse);
echo "</pre>";
echo ".......................................................................<br>";
echo "Showing array elements with preserved keys <br>";
echo "<pre>";
print_r($preserve);
echo "</pre>";
echo "............................................................................<br>";
echo "The usort( ) function sorts an array using a user-defined comparison function <br>";
function myfunction($t,$t1)
{
	if ($t==$t1) 
	{
		return 0;
	}
	return ($t<$t1)? -1:1;
}

$x=[5,2,7,4,9,10,3,2];
usort($x, "myfunction");
echo "<pre>";
print_r($x);
echo "</pre>";
echo "...............................................................................<br>";
echo "The uasort() function sorts an array by values using a user-defined comparison function <br>";
function myfunction1($t2,$t3)
{
	if($t2==$t3)
	{
		return 0;
	}
	return ($t2<$t3)?-1:1;	
}
$x1=["a"=>45,"b"=>22,"c"=>89,"d"=>15,"e"=>2,"f"=>100];
uasort($x1,"myfunction1");
echo "<pre>";
print_r($x1);
echo "</pre>";
echo ".................................................................... <br>";
echo "The uksort() function sorts an array by keys using a user-defined comparison function <br>";
uksort($x1,"myfunction1");
echo "<pre>";
print_r($x1);
echo "</pre>";
echo "..........................................................................<br>";









?>
</body>
</html>