<!DOCTYPE html>
<html>
<head>
	<title>while loop</title>
</head>
<body>
<?php
/*
while - loops through a block of code as long as the specified condition is true
The while loop executes a block of code as long as the specified condition is true.

Syntax
while (condition is true) {
  code to be executed;
}

*/
$a=1;
while ($a<=10)
{
	echo $a."<b>Number</b> <br>";
	$a++;
}
$s=20;
while ($s>=1)
{
	echo $s." number<br>";
	$s--;
}
$i=1;
while($i<=10)
{
	if ($i%2==0)
	{
		echo $i."<b> Even number<b> <br>";

	}
	$i++;
}
$j=1;
while ($j<=10)
{
	if($j%2!=0)
	{
		echo $j."<b> Odd number<br>";
	}
	$j++;
}
$l=1;
echo "<ul>";
while($l<=20)
{
	echo "<li>" .$l. "<b>number</b> </li>";
	$l=$l+2;
}
echo "</ul>";
$g=2;

 while($g<=20)
 {
 	echo "<b>".$g."<b> <br>";
 	$g=$g+2;
 }


?>

</body>
</html>