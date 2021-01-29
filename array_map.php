<!DOCTYPE html>
<html>
<head>
	<title>array_map() function</title>
</head>
<body>
<?php
/*
Definition and Usage
The array_map() function sends each value of an array to a user-made function, and returns an array with new values, given by the user-made function.

Tip: You can assign one array to the function, or as many as you like.

Syntax
array_map(myfunction, array1, array2, array3, ...)
Parameter Values
Parameter	Description
myfunction	Required. The name of the user-made function, or null
array1	Required. Specifies an array
array2	Optional. Specifies an array
array3	Optional. Specifies an array
Return Value:	Returns an array containing the values of array1, after applying the user-made function to each one


*/
echo "The array_map() function sends each value of an array to a user-made function, and returns an array with new values, given by the user-made function. <br>";
echo "An example for a array_map( ) function <br>";
$a=[1,2,3,4,5,6];

function square($n)
{
	return $n*$n;
}

$newArray=array_map("square",$a);
echo "<pre>";
print_r($newArray);
echo "</pre>";
echo "........................................... <br>";
echo "using a user-made function to change the values of an array <br>";
function myfunction($v)
{
   if($v==="Dog")
   {
   	return "Cow";
   }
return $v;

}

$b=["Horse","Dog","Cat"];
$newArray1=array_map("myfunction",$b);
echo "<pre>";
print_r($newArray1);
echo "</pre>";
echo "................................................................ <br>";
echo "array_map() function and two arrays <br>";
function myfunction1($v1,$v2)
{
     if ($v1===$v2)
     {
     	return "Same";
     }
     return "Different";
}

$c=["Lion","Hare","Hen","Donkey"];
$d=["Tiger","Hare","Monkey","Donkey"];
$newArray2=array_map("myfunction1",$c,$d);
echo "<pre>";
print_r($newArray2);
echo "</pre>";
echo ".............................................<br>";
echo "Change all letters of the array values to uppercase <br> ";
function myfunction2($v3)

{
      $v3=strtoupper($v3);
      return $v3;
}

$e=["Animal"=>"horse","type"=>"mammal"];
$newArray3=array_map("myfunction2",$e);
echo "<pre>";
print_r($newArray3);
echo "</pre>";
echo "...................................................<br>";
echo "Assign null as the function name in the array_map() function<br>";
$f=["Tiger","Elephant","Cocodile"];
$g=["Lion","Dog","Horse"];
$newArray4= array_map(null,$f,$g);
echo "<pre>";
print_r($newArray4);
echo "</pre>";
echo "...........................<br>";
function myfunction3($v11,$v12)
{
  return "$v11=$v12";
}
$a11=[1,2,3];
$a12=["Horse","Dog","Cat"];
$newArray5=array_map("myfunction3",$a11,$a12);
echo "<pre>";
print_r($newArray5);
echo "</pre>";

?>
</body>
</html>