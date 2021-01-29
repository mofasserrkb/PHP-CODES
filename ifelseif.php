<!DOCTYPE html>
<html>
<head>
	<title>if elseif statement</title>
</head>
<body>
<?php
/*
PHP - The if...elseif...else Statement
The if...elseif...else statement executes different codes for more than two conditions.

Syntax
if (condition) {
  code to be executed if this condition is true;
} elseif (condition) {
  code to be executed if first condition is false and this condition is true;
} else {
  code to be executed if all conditions are false;
}

*/
$marks=67;
if ($marks>=80 && $marks<=100)
{
	echo "Your grade is A+<br>";
}
elseif($marks>=70 && $marks<=79)
{
	echo "Your grade is A<br>";
}
elseif ($marks>=60 &&$marks<=69) 
{ 
	echo "Your grade is A-<br>";
}
elseif ($marks>=50 && $marks<=59)
 {
	# code...
	echo "Your grade is B+ <br>";

}
elseif ($marks>=40 && $marks<=49) {
	echo "Your grade is B-<br>";
}
else {
	# code...
	echo "You have failed in the exam<br>";
}




?>
</body>
</html>