<!DOCTYPE html>
<html>
<head>
	<title>global variable</title>
</head>
<body>
<?php
/*
PHP Variables Scope
In PHP, variables can be declared anywhere in the script.

The scope of a variable is the part of the script where the variable can be referenced/used.

PHP has three different variable scopes:

local
global
static

*/
echo ".........................................................<br>";
/*
Global and Local Scope
A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:

*/
echo "Global Scope: 
A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function. <br>Variable with global scope: <br>";

$x=10; //global variable 
function test()
{
	echo "Printing global variable inside the function X=".$x."<br>"; //will encounter an error

}
test();
echo "Printing global variable outside the function X=".$x."<br>";
echo ".........................................................<br>";
echo "A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:<br>";
function test1()
{
	$i=25; //local variable. This variable can only be used within this local variable.
	echo "Printing local variable inside the function i =".$i."<br>";
    $y=$i+10;
    echo "Printing local variable  inside the function y =".$y."<br>";
  

}
test1();

echo "Printing local variable outside the function i =".$i."<br>";
echo "Printing local variable outside the fuction y =".$y."<br>";
echo ".........................................................<br>";
/*
PHP The global Keyword
The global keyword is used to access a global variable from within a function.

To do this, use the global keyword before the variables (inside the function):

*/
echo "The global keyword is used to access a global variable from within a function.

To do this, use the global keyword before the variables (inside the function): <br>";
$m=100;
$n=350;
function add()
{
	global $m,$n,$z;
	$z=$m+$n;

}
add();
echo "printing global variable (using global keyword) which is in the function Z= ".$z."<br>";
echo ".........................................................<br>";
/*
PHP The static Keyword
Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.

To do this, use the static keyword when you first declare the variable:

*/
echo "Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.

To do this, use the static keyword when you first declare the variable: <br>";
function incre()
{
	static $x=0;
	static $y=1;
	$x++;
    $y=$x+$y;
    echo "x=".$x."<br>";
    echo "y=".$y."<br>";
}
 incre();
 incre();
 incre();
?>

</body>
</html>