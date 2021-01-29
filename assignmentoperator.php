<!DOCTYPE html>
<html>
<head>
	<title>Assignment operator</title>
</head>
<body>

<?php

/*
Assignment
x = y	x = y	The left operand gets set to the value of the expression on the right	
x += y	x = x + y	Addition	
x -= y	x = x - y	Subtraction	
x *= y	x = x * y	Multiplication	
x /= y	x = x / y	Division	
x %= y	x = x % y	Modulus
*/
$a=45;
$b=65;
$a=$b;
echo $a."<br>";
$x=34;
$y=80;
$x+=$y;
echo $x;
$t=89;
$w=87;
$t+=$w;
echo $t."<br>";
$r=45.6;
$e=89.34;
$r*=$e;
echo $r."<br>";
$v=23.4;
$s=4;
$v/=$s;
echo $v."<br>";
$i=37;
$j=2;
$i%=$j;
echo $i."<br>";


?>

</body>
</html>