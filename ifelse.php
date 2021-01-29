<!DOCTYPE html>
<html>
<head>
	<title>if else statement </title>
</head>
<body>
<?php
/*
PHP - The if...else Statement
The if...else statement executes some code if a condition is true and another code if that condition is false.

Syntax
if (condition) {
  code to be executed if condition is true;
} else {
  code to be executed if condition is false;
}

*/


$age =35;
if ($age<=40)
{
	echo "You are eligible <br>";
}
else
{
	echo "You are not eligible";
}
$name ="Rakib";
$gender="Male";
if($gender=="Male")
{
	echo "Hello ".$name."<br>";
}
else
{
	echo "This is not ".$name."<br>";
}
?>
</body>
</html>