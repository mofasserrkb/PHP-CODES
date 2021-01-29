<!DOCTYPE html>
<html>
<head>
	<title>Logical Operator</title>
</head>
<body>
<?php
/*
PHP Logical Operators
The PHP logical operators are used to combine conditional statements.

Operator	
and 	(And =>	$x and $y	True if both $x and $y are true)
or	    (Or	=>$x or $y	True if either $x or $y is true)
xor	    (Xor =>	$x xor $y	True if either $x or $y is true, but not both)	
&&	    (And =>$x && $y	True if both $x and $y are true)
||	     (Or =>$x || $y	True if either $x or $y is true)	
!	     (Not =>	!$x	True if $x is not true)	
*/
$age=24;
if ($age>=18 && $age <=24)
{
	echo "You are eligible for this post because  age  is under 24<br>";
}
$age=25;
if ($age>=18 and $age<=25)
{
	echo "You are eligible for this post because your age is under 25<br>";

}
$age =23;
if ($age >23 || $age<=25)
{
	echo "You will be  eligible <br> ";
}
$age=35;
if($age>=30 or $age<=33)
{
	echo "Your age is perfect for applying for this post<br>";
}
$age=30;
if (!($age==29))
{
	echo "Your age is not 30<br>";
}
$age=32;
if(!($age==32))
{
	echo "Age is not 32<br>";
}
else 
{
	echo "Condition is false Age is 32<br>";
}
$xi=45;
$yi=89;
if($xi==45 xor $xi==90)
{
	echo " One condition true.Here one Value is matched.xor returns true<br>";
}
$xi=50;
$yi=80;
if($xi==40 xor $yi==80)
{
	echo "One condition true.One value is matched.xor returns true<br>";
}
else
{
	echo "Values are not matched <br>";

}
if($xi==41 xor $yi==81)
{
	echo "Values are matched <br>";

}
else
{
	echo "Both Condition are false.Values of xi and yi are not matched.So, xor returns false <br> ";
}
if ($xi==50 xor $yi==80)
{
	echo "Condition true";
}
else
{
	echo "Both Condition are true because both values are matched.SO, xor  returns false <br>";
}

?>
</body>
</html>