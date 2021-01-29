<!DOCTYPE html>
<html>
<head>
	<title>for loop</title>
</head>
<body>
<?php
/*
The for loop is used when you know in advance how many times the script should run.

Syntax
for (init counter; test counter; increment counter) {
  code to be executed for each iteration;
}
Parameters:

init counter: Initialize the loop counter value
test counter: Evaluated for each loop iteration. If it evaluates to TRUE, the loop continues. If it evaluates to FALSE, the loop ends.
increment counter: Increases the loop counter value

*/
 echo "Printing 1 to 10 number<br>";
 for ($i=1;$i<=10;$i++)
 {
 	echo "<b>".$i."</b> <br>";
 }
echo "Printing 10 to 1 number<br>";
for ($j=10;$j>=1;$j--)
{
	echo "<b>".$j."</b> <br>";
}
 echo "Printing Even number<br>";
 for($n=1;$n<=10;$n++)
 {
 	if ($n%2==0)
 	{
 	   echo "<b>".$n." is a even number</b><br>";
 	}
 }
 echo " Printing number with a difference two <br>";
 for($m=1;$m<=10;$m=$m+2)
 {
     echo "<b>".$m." <br> diffeence two <br>";
 }
?>

</body>
</html>