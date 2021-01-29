<!DOCTYPE html>
<html>
<head>
	<title>function with parameters</title>
</head>
<body>
<?php
/*
PHP Function Arguments
Information can be passed to functions through arguments. An argument is just like a variable.

Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma


syntax
function functionName(parameter1,parameter2,parameter3.....)
{
	code to be executed;
}
*/
function add($a,$b,$c)
{
	echo "Result=".($a+$b+$c)."<br>";

}
add(10,20,30);
add(45,35,90);
add(30,35.5,1003.45);

function  sum($i=400,$j=400,$z=400.23) //function definition with parameter and setting default parameter value
{
    echo "Sum of three variables =".($i+$j+$z)."<br>";

}
echo "printing default parameter value<br>";
sum(); 
echo "Printing different parameter value<br>";
sum(2556,456.23,908);
sum(100);
sum(100,500);
$m=300;
$n=400;
$l=500;
sum($m,$n,$l);
sum(10,-50,60);


?>




</body>
</html>