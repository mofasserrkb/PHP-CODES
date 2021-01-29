<!DOCTYPE html>
<html>
<head>
	<title>Ternary operator</title>
</head>
<body>
<?php
/*
?:	Ternary	$x = expr1 ? expr2 : expr3	Returns the value of $x.
The value of $x is expr2 if expr1 = TRUE.
The value of $x is expr3 if expr1 = FALSE

*/
$x=35;
($x>=30)? $z="The value is greater or equal to 30<br>" : $z="The vlue is smaller than 30<br>";
echo $z;
$x=220;
$z=($x%2==0)? "This is even number<br>" :"This is odd number<br>";
echo $z;
$s=670;
$p=($s<700)? $s+=670:$s-=670;
echo  $p;

?>
</body>
</html>