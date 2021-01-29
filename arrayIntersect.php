<!DOCTYPE html>
<html>
<head>
	<title>
		array_intersect () function
	</title>
</head>
<body>
<?php
/*
PHP array_intersect() Function
Definition and Usage
The array_intersect() function compares the values of two (or more) arrays, and returns the matches.

This function compares the values of two or more arrays, and return an array that contains the entries from array1 that are present in array2, array3, etc.
...........................................................................
Definition and Usage
The array_intersect_key() function compares the keys of two (or more) arrays, and returns the matches.

This function compares the keys of two or more arrays, and return an array that contains the entries from array1 that are present in array2, array3, etc.
Syntax
array_intersect_key(array1, array2, array3, ...)

Parameter	Description
array1	Required. The first array is the array that the others will be compared with
array2	Required. An array to be compared with the first array
array3,...	Optional. An array to be compared with the first array
..............................................................................
Definition and Usage
The array_intersect_assoc() function compares the keys and values of two (or more) arrays, and returns the matches.

This function compares the keys and values of two or more arrays, and return an array that contains the entries from array1 that are present in array2, array3, etc.
......................................................................................
Definition and Usage
The array_intersect_uassoc() function compares the keys and values of two (or more) arrays, and returns the matches.

Note: This function uses a user-defined function to compare the keys!

This function compares the keys and values of two or more arrays, and return an array that contains the entries from array1 that are present in array2, array3, etc.
Syntax
array_intersect_uassoc(array1, array2, array3, ..., myfunction)

Parameter	Description
array1	Required. The first array is the array that the others will be compared with
array2	Required. An array to be compared with the first array
array3,...	Optional. An array to be compared with the first array
myfunction	Required. A string that define a callable comparison function. The comparison function must return an integer <, =, or > than 0 if the first argument is <, =, or > than the second argument.


............................................................................................
Definition and Usage
The array_intersect_ukey() function compares the keys of two (or more) arrays, and returns the matches.

Note: This function uses a user-defined function to compare the keys!

This function compares the keys of two or more arrays, and return an array that contains the entries from array1 that are present in array2, array3, etc.

Syntax
array_intersect_ukey(array1, array2, array3, ..., myfunction)

Parameter	Description
array1	Required. The first array is the array that the others will be compared with
array2	Required. An array to be compared with the first array
array3,...	Optional. An array to be compared with the first array
myfunction	Required. A string that define a callable comparison function. The comparison function must return an integer <, =, or > than 0 if the first argument is <, =, or > than the second argument
........................................................................
Definition and Usage
The array_uintersect() function compares the values of two or more arrays, and returns the matches.

Note: This function uses a user-defined function to compare the values!

This function compares the values of two (or more) arrays, and return an array that contains the entries from array1 that are present in array2, array3, etc.

Syntax
array_uintersect(array1, array2, array3, ..., myfunction)

Parameter	Description
array1	Required. The array to compare from
array2	Required. An array to compare against
array3,...	Optional. More arrays to compare against
myfunction	Required. A string that define a callable comparison function. The comparison function must return an integer <, =, or > than 0 if the first argument is <, =, or > than the second argument
.......................................................................................
Definition and Usage
The array_uintersect_uassoc() function compares the keys and values of two or more arrays, and returns the matches.

Note: This function uses two user-defined functions for comparison; the key is used in the first function and the value is used in the second!

This function compares the keys and values of two (or more) arrays, and return an array that contains the entries from array1 that are present in array2, array3, etc.

Syntax
array_uintersect_uassoc(array1, array2, array3, ..., myfunc_key, myfunc_value)

Parameter	Description
array1	Required. The array to compare from
array2	Required. An array to compare against
array3,...	Optional. More arrays to compare against
myfunc_key	Required. The name of the user-defined function that compares the array keys.
A string that define a callable comparison function. The comparison function must return an integer <, =, or > than 0 if the first argument is <, =, or > than the second argument
myfunc_value	Required. The name of the user-defined function that compares the array values.
A string that define a callable comparison function. The comparison function must return an integer <, =, or > than 0 if the first argument is <, =, or > than the second argument.
*/
echo "array_intersect() function. This function matches same datatypes of value.<br>";
$team=["One"=>"Real madrid","Two"=>"Liverpool","Five"=>"Manchester city","Four"=>"Aston villa"];
$team1=["One"=>"Real madrid","Two"=>"Bayern munich","Three"=>"Liverpool","Five"=>"Barcelona"];
$team2=["One"=>"Real madrid","Two"=>"Everton","Six"=>"Celta vigo","Five"=>"Crystal palace"];
$newArray=array_intersect($team,$team1);
$newArray1=array_intersect($team,$team1,$team2);
echo "<pre>";
print_r($newArray);
echo "</pre>";
echo ".......................................................<br>";
echo "using array_intersect() function for three array<br>";
echo "<pre>";
print_r($newArray1);
echo "</pre>";
echo "...........................................................<br>";
echo "The array_intersect_key() function compares the keys of two (or more) arrays, and returns the matches.<br>";
 $newArray2=array_intersect_key($team,$team1);
 echo "<pre>";
 print_r($newArray2);
 echo "</pre>";
 echo ".............................................................. <br>";
 echo "array_intersect_key() for indexed array <br>";
 $subject=["Database","Compiler","Image processing","Machine learning","Digital electronics"];
 $subject1=["Neural network","Simulation","Discrete mathematics"];
 $newArray3=array_intersect_key($subject,$subject1);
 echo "<pre>";
 print_r($newArray3);
 echo "</pre>";
 echo "...................................................................<br>";
 echo "The array_intersect_assoc() function compares the keys and values of two (or more) arrays, and returns the matches. <br>";
 $newArray4=array_intersect_assoc($team,$team1,$team2);
 echo "<pre>";
 print_r($newArray4);
 echo "</pre>";
 echo "..................................................... <br>";
$Buet=["Dept 1"=>"EEE","Dept 2"=>"CSE","Dept 3"=>"ME","Dept 4"=>"CE"];
$kuet=["Dept 1"=>"CSE","Dept 2"=>"EEE","Dept 3"=>"ME","Dept 4"=>"CE"];
$newArray4=array_intersect_assoc($Buet,$kuet);
echo "<pre>";
print_r($newArray4);
echo "</pre>";
echo "...........................................<br>";
echo "The array_intersect_uassoc() function compares the keys and values of two (or more) arrays, and returns the matches. <br>
Compare the keys and values of two arrays, and return the matches (using a user-defined key comparison function):<br>";
function myfunction($a,$b)
{
	if($a===$b)
	{
		return 0;

	}
	return ($a>$b)? 1:-1;
}

$color=["a1"=>"White","b1"=>"Green","c1"=>"Yellow","d1"=>"Blue"];
$color1=["e1"=>"purple","a1"=>"White","c1"=>"Yellow","d1"=>"Green"];
$newArray5=array_intersect_uassoc($color,$color1,"myfunction");
echo "<pre>";
print_r($newArray5);
echo "</pre>";
echo "........................................................<br>";
echo "Compare the keys and values of three arrays (use a user-defined function to compare the keys), and return the matches: <br>";

function myfunction1($A,$B)
{
if ($A===$B)
  {
  return 0;
  }
  return ($A>$B)?1:-1;
}

$a11=["a"=>"red","b"=>"green","c"=>"blue"];
$a12=["a"=>"red","b"=>"green","d"=>"blue"];
$a13=["e"=>"yellow","a"=>"red","d"=>"blue"];

$result=array_intersect_uassoc($a11,$a12,$a13,"myfunction1");
echo "<pre>";

print_r($result);
echo "</pre>";
echo "..............................................................<br>";
echo "array_intersect_uassoc() works as like as the  array_uintersect_assoc() <br> ";
$result1=array_uintersect_assoc($a11,$a12,$a13,"myfunction1");
echo "<pre>";
print_r($result1);
echo "</pre>";
echo".............................................................<br>";
echo "The array_intersect_ukey() function compares the keys of two (or more) arrays, and returns the matches.<br>";
$result2=array_intersect_ukey($a11,$a12,$a13,"myfunction1");
echo "<pre>";
print_r($result2);
echo "</pre>";
echo "...........................................................<br>";
echo "The array_uintersect() function compares the values of two or more arrays, and returns the matches<br>";
$result3=array_uintersect($a12,$a13,"myfunction1");
echo "<pre>";
print_r($result3);
echo "</pre>";
echo"....................................................................<br>";
echo " The array_uintersect_uassoc() function compares the keys and values of two or more arrays, and returns the matches. <br>";
function myfunction_key($S1,$S2)
{
	if($S1===$S2)
	{
		return 0;
	}
	return ($S1>$S2)? 1:-1;

}
function myfunction_value($S1,$S2)
{
	if($S1===$S2)
	{
		return 0;

	}
	return ($S1>$S2)?1:-1;

}
$country=["rank 1"=>"Pakistan","rank 2"=>"Srilanka","rank 3"=>"Nepal","rank 4"=>"Bangladesh"];
$country1=["rank 1"=>"Pakistan","rank 2"=>"Bhutan","rank 3"=>"Nepal","rank 4"=>"Bangladesh"];

$newArray6=array_uintersect_uassoc($country,$country1,"myfunction_key","myfunction_value");
echo "<pre>";
print_r($newArray6);
echo "</pre>";






?>

</body>
</html>