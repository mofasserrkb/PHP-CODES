<!DOCTYPE html>
<html>
<head>
	<title>function</title>
</head>
<body>
<?php
/*
PHP User Defined Functions
Besides the built-in PHP functions, it is possible to create your own functions.

A function is a block of statements that can be used repeatedly in a program.
A function will not execute automatically when a page loads.
A function will be executed by a call to the function.
Create a User Defined Function in PHP
A user-defined function declaration starts with the word function:

Syntax
function functionName() {
  code to be executed;
}

*/
function sum () //function definition
{
	$a=128;
	$b=40;
	$c=$a+$b;
	echo "Sum of a and b =".$c."<br>";
}
echo "Program for adding two integer values <br>";
sum(); //function call
echo "We can use sum function as many as we want.Example is below <br>";
sum();


?>
</body>
</html>