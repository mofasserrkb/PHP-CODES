<!DOCTYPE html>
<html>
<head>
	<title>Comparison Operator</title>
</head>
<body>
<?php
/*
Operator	
==	Equal	$x == $y	(Returns true if $x is equal to $y)	
===	Identical	$x === $y	(Returns true if $x is equal to $y, and they are of the same type)	
!=	Not equal	$x != $y	(Returns true if $x is not equal to $y)	
<>	Not equal	$x <> $y	(Returns true if $x is not equal to $y)	
!==	Not identical	$x !== $y	(Returns true if $x is not equal to $y, or they are not of the same type)	
>	Greater than	$x > $y	(Returns true if $x is greater than $y)	
<	Less than	$x < $y	(Returns true if $x is less than $y)	
>=	Greater than or equal to	$x >= $y	(Returns true if $x is greater than or equal to $y)	
<=	Less than or equal to	$x <= $y	(Returns true if $x is less than or equal to $y)	
<=>	Spaceship	$x <=> $y	(Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.)

*/
$x=34;
$y=34;
echo ($x==$y)."<br>";
$q=45;
$w=67;
echo ($q==$w)."<br>";

$e=356;
$f=356;
echo ($e===$f)."<br>";
$g=45;
$h=345;
echo ($g!=$h)."<br>";
$y=34;
$t=45;
echo ($y+=$t)."<br>";
$at=45;
$yi="45";
echo ($at===$yi)."<br>";
$at="45";
echo ($at===$yi)."<br>";
$an =56;
$bn =47;
echo ($an>$bn)."<br>";
$bn =78;
echo ($an<$bn)."<br>";
$gi=55;
$hi=43;
echo ($gi>=$hi)."<br>";
$hi=55;
echo($gi>=$hi)."<br>";
$hi=56;
echo($gi<=$hi)."<br>";
$gi=70;
echo ($gi<=$hi)."<br>";
$gi=56;
echo ($gi<=$hi)."<br>";
#space ship operator

$xi=23;
$yi=67;
echo ($xi<=>$yi)."<br>";
$xi=45;
$yi=34;
echo($xi<=>$yi)."<br>";
$xi=89;
$yi=89;
echo ($xi<=>$yi)."<br>";
?>
</body>
</html>