<!DOCTYPE html>
<html>
<head>
	<title>do while loop</title>
</head>
<body>
<?php
/*
The do...while loop - Loops through a block of code once, and then repeats the loop as long as the specified condition is true.
The do...while loop will always execute the block of code once, it will then check the condition, and repeat the loop while the specified condition is true.
Syntax
do {
  code to be executed;
} while (condition is true);
Note: In a do...while loop the condition is tested AFTER executing the statements within the loop. This means that the do...while loop will execute its statements at least once, even if the condition is false. See example below.

*/

$a=1;
do 
{
	if ($a%2==0)
	{
		echo "<b>".$a." Even number </b> <br>";
	}
	$a++;
} while ($a<=20);

 $s=10;
 do 
 {
 	echo "<b>".$s."</b> <br> Number is decreasing<br>";
 	$s--;

 }while($s>=1);
 echo "<b> Program for printing odd numbers between 1 to 20<b> <br>";
 $o=1;
 do
 {
 	if ($o%2 !=0)
 	{
 		echo "<b>".$o." is a ODD NUMBER<b> <br>";
 	}
 	$o++;
 }while($o<=20);

?>

</body>
</html>