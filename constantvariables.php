<!DOCTYPE html>
<html>
<head>
	<title>Constant variable</title>
</head>
<body>
<?php
/*
Syntax
define(name, value, case-insensitive)
Parameters:

name: Specifies the name of the constant
value: Specifies the value of the constant
case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false

*/
define("num",20);
define("test",56.6,true);
define("Cars",  array('Audi','volvo','BMW','Toyota' )
);

echo num."<br>";
echo Test."<br>";
echo Test + 24.5."<br>";
echo Cars[2];


?>
</body>
</html>