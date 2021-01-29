<!DOCTYPE html>
<html>
<head>
	<title> function arguments by reference</title>
</head>
<body>
<?php
/*
Passing Arguments by Reference
In PHP, arguments are usually passed by value, which means that a copy of the value is used in the function and the variable that was passed into the function cannot be changed.

When a function argument is passed by reference, changes to the argument also change the variable that was passed in. To turn a function argument into a reference, the & operator is used:

*/
echo "Passing arguments by reference<br>";


function add(&$num) // address of i will be stored in $num variable
{
    $num+=55; 
    echo  "The value of $num is ".$num."<br>";

}
$i=45;
add($i); //function call and address of i will be stored in $num variable.
echo "The value of i is ".$i."<br>"; 
//echo  "The value of $num is ".$num."<br>"; it is not possible because $num variable is only can be printed in add function 
echo "passing arguments by value<br>";
function add1($num1)
{
	$num1+=60;
	return $num1;

}
$t=56;
$g=add1($t);
echo "The value of t is ".$t."<br>"; 
echo "The value of g is ".$g."<br>";
?>
</body>
</html>