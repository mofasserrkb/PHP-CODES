<!DOCTYPE html>
<html>
<head>
	<title>array_walk() and array_walk_recursive() function </title>
</head>
<body>
<?php
/*
Definition and Usage
The array_walk() function runs each array element in a user-defined function. The array's keys and values are parameters in the function.

Note: You can change an array element's value in the user-defined function by specifying the first parameter as a reference: &$value (See Example 2).

Tip: To work with deeper arrays (an array inside an array), use the array_walk_recursive() function.

Syntax
array_walk(array, myfunction, parameter...)
Parameter Values
Parameter	Description
array	Required. Specifying an array
myfunction	Required. The name of the user-defined function
parameter,...	Optional. Specifies a parameter to the user-defined function. You can assign one parameter to the function, or as many as you like
Return Value:	Returns TRUE on success or FALSE on failure

..................................................................
Definition and Usage
The array_walk_recursive() function runs each array element in a user-defined function. The array's keys and values are parameters in the function. The difference between this function and the array_walk() function is that with this function you can work with deeper arrays (an array inside an array).

Syntax
array_walk_recursive(array, myfunction, parameter...)
Parameter Values
Parameter	Description
array	Required. Specifying an array
myfunction	Required. The name of the user-defined function
parameter,...	Optional. Specifies a parameter to the user-defined function. You can assign one parameter to the function, or as many as you like.
Return Value:	Returns TRUE on success or FALSE on failure

*/
echo "The array_walk() function runs each array element in a user-defined function. The array's keys and values are parameters in the function <br>";
function my_function ($key,$value)
{
   echo "Name =".$key." Department=".$value."<br>";
}
$info=["Azim"=>"CSE","kalim"=>"EEE","Asif"=>"AE","Basir"=>"PME"];
 array_walk($info, "my_function");
echo ".......................................................... <br>";
echo "You cna change an array element's value in the user-defined function by specifying the first parameter as a reference <br>";

function my_function1($key,$value,$p)
{
	$value="YEllOW";
	echo "code= ".$key .$p." name= ".$value."<br>";

}
$color=["a"=>"red","b"=>"green","c"=>"black","d"=>"white","e"=>"pink"];
array_walk($color,"my_function1","&");
echo ".........................................................<br>";
echo "The array_walk_recursive( ) function runs each array element in a user-defined function. The array's keys and values are the parameters in the function.This function can work with deeper arrays .array inside array<br>";
function my_function2($k,$v,$para)
{
	echo "code= ".$k.$para." name= ".$v."<br>";
}
$color1=["a"=>"red","b"=>"green","c"=>"black","d"=>"white","e"=>"pink"];
$color2=[
	       $color1,
	       "1"=> "Megenda",
	       "2"=>"Yellow",
	       "3"=>"Purple",
	       "4"=>"blue"
        ];
array_walk_recursive($color2, "my_function2","And");







?>
</body>
</html>