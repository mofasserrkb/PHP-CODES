<!DOCTYPE html>
<html>
<head>
	<title>array_merge() array_merge_recursive() array_combine()</title>
</head>
<body>
<?php
/*
PHP array_merge() Function
The array_merge() function merges one or more arrays into one array.

Tip: You can assign one array to the function, or as many as you like.

Note: If two or more array elements have the same key, the last one overrides the others.

Note: If you assign only one array to the array_merge() function, and the keys are integers, the function returns a new array with integer keys starting at 0 and increases by 1 for each value
Syntax
array_merge(array1, array2, array3, ...)
Parameter Values
Parameter	Description
array1	Required. Specifies an array
array2	Optional. Specifies an array
array3,...	Optional. Specifies an array
Return Value:	Returns the merged array









*/
echo "Merge two index array using array_merge () <br>";
$color=["blue","red","green"];
$color1=["white","black","yellow"];
$r1= array_merge($color,$color1);
echo "printing r1 array element after using array_merge=". $r1[4]."<br>";
echo "printing all the array elements by using print_r() funcition <br>";
echo "<pre>";
print_r($r1);
echo "</pre>";
echo "Merge three index array using array_merge ()<br>";
$department =["CSE","ME","IPE"];
$department1=["SE","CE","ME"];
$department2=["PME","EEE","ICE","Architecture"];
$r2=array_merge($department,$department1,$department2);
echo "printing r2 array element after using array_merge function=".$r2[7]."<br>";
echo "Printing all the array elements by using print_r() function <br>";
echo "<pre>";
print_r($r2);
echo "</pre>";
echo "Merge two associative array using array_merge() <br>";
$fruit=["f1"=>"Apple","f2"=>"Banana"];
$fruit1=["f3"=>"pineapple","f2"=>"guava","f4"=>"Jackfruit"];
$r3=array_merge($fruit,$fruit1);
echo "printing r3 array element after using array_merge() function =".$r3["f2"]."<br>";
echo "<pre>";
print_r($r3);
echo "</pre>";
echo "Merge associative array and indexed array using array_merge() <br>";
$fruit11=["f11"=>"Apple","Banana"];
$fruit12=["f13"=>"pineapple","f12"=>"guava","f14"=>"Jackfruit"];
$r13=array_merge($fruit11,$fruit12);
echo "printing r3 array element after using array_merge() function =".$r13["f12"]."<br>";
echo "<pre>";
print_r($r13);
echo "</pre>";
echo "Merge two associative array with a indexed array  using array_merge() <br>";
$fruit41=["f41"=>"Apple","f45"=>"Banana"];
$fruit42=["f43"=>"pineapple","f42"=>"guava","f44"=>"Jackfruit"];
$fruit43=["Avocado","blackberris","carambola"];
$r43=array_merge($fruit42,$fruit41,$fruit43);
echo "printing r3 array element after using array_merge() function =".$r43["f42"]."<br>";
echo "<pre>";
print_r($r43);
echo "</pre>";
echo "....................................................<br>";
echo "The difference between array_merge() function and the array_merge_recursive() function is when two or more array elements have the same key. Instead of override the keys, the array_merge_recursive() function makes the value as an array.";
echo "Merge two associative array with common key using array_merge_recursive() function<br>";
$country=["A"=>"Algeria","B"=>"Bangladesh","C"=>"Canada"];
$country1=["C"=>"Palestine","D"=>"Qater","E"=>"Saudi Arabia"]; 
  $m1=array_merge_recursive($country,$country1);
echo "<pre>";
print_r($m1);
echo "</pre>";
echo "Merge associative array with complex associative array<br>";
$fastfood=["A"=>"Hamburger","B"=>"French fries","C"=>"Onion rings"];
$fastfood1=[ "B"=> ["item"=> ["sandwiches","pizza","hot dogs"] ],   
	         "D"=>"Fried chicken",
	         "tacos"
           ];
$m2=array_merge_recursive($fastfood,$fastfood1);
echo "<pre>";
print_r($m2);
echo "</pre>";
echo "Printing element of B key element after applying array_merge_recursive() =".$m2["B"]["item"][1];
?>
</body>
</html>