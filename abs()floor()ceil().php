<!DOCTYPE html>
<html>
<head>
	<title>abs(),floor(),ceil() functions</title>
</head>
<body>
<?php
/*
Definition and Usage
The abs() function returns the absolute (positive) value of a number.

Syntax
abs(number);
Parameter Values
Parameter	Description
number	Required. Specifies a number. If the number is of type float, the return type is also float, otherwise it is integer
Technical Details
Return Value:	The absolute value of the number
....................................................
Definition and Usage
The ceil() function rounds a number UP to the nearest integer, if necessary.

Tip: To round a number DOWN to the nearest integer, look at the floor() function.

Tip: To round a floating-point number, look at the round() function.

Syntax
ceil(number);
Parameter Values
Parameter	Description
number	Required. Specifies the value to round up
Technical Details
Return Value:	The value rounded up to the nearest integer
...........................................................
Definition and Usage
The floor() function rounds a number DOWN to the nearest integer, if necessary, and returns the result.

Tip: To round a number UP to the nearest integer, look at the ceil() function.

Tip: To round a floating-point number, look at the round() function.

Syntax
floor(number);
Parameter Values
Parameter	Description
number	Required. Specifies the number to round down
Technical Details
Return Value:	The value rounded down to the nearest integer
..............................................................
Definition and Usage
The round() function rounds a floating-point number.

Tip: To round a number UP to the nearest integer, look at the ceil() function.

Tip: To round a number DOWN to the nearest integer, look at the floor() function.

Syntax
round(number,precision,mode);
Parameter Values
Parameter	Description
number	Required. Specifies the value to round
precision	Optional. Specifies the number of decimal digits to round to. Default is 0
mode	Optional. Specifies a constant to specify the rounding mode:
PHP_ROUND_HALF_UP - Default. Rounds number up to precision decimal, when it is half way there. Rounds 1.5 to 2 and -1.5 to -2
PHP_ROUND_HALF_DOWN - Round number down to precision decimal places, when it is half way there. Rounds 1.5 to 1 and -1.5 to -1
PHP_ROUND_HALF_EVEN - Round number to precision decimal places towards the next even value
PHP_ROUND_HALF_ODD - Round number to precision decimal places towards the next odd value

Technical Details
Return Value:	The rounded value
*/
echo "The abs() function returns the absolute(positive) value of a number <br>";
echo (abs(6.7))." <br>";
echo (abs(-6.7))."<br>";
echo (abs(3))."<br>";
echo (abs(-3))."<br>";
echo ".......................................<br>";
echo "The ceil() function rounds a number up to the nearest integer, if necessary.<br>";
echo (ceil(0.60))."<br>";
echo (ceil(0.40))."<br>";
echo (ceil(5))."<br>";
echo (ceil(5.1))."<br>";
echo (ceil(-5.1))."<br>";
echo (ceil(-5.9))."<br>";
echo "............................................<br>";
echo "The floor() function rounds a number down to the nearest integer, if necessary, returns the result <br>";
echo (floor(0.60))."<br>";
echo (floor(0.40))."<br>";
echo (floor(5))."<br>";
echo (floor(5.1))."<br>";
echo (floor(-5.1))."<br>";
echo (floor(-5.9))."<br>";
echo "..................................................<br>";
echo "The round() function rounds a floating point number <br>";
echo (round(0.60))."<br>";
echo (round(0.40))."<br>";
echo (round(5))."<br>";
echo (round(5.1))."<br>";
echo (round(-5.1))."<br>";
echo (round(-5.9))."<br>";
echo "......................................................<br>";
echo "Round numbers to two decimals <br>";
echo (round(4.98725,2))."<br>";
echo (round(3.43789,2))."<br>";
echo (round(2.5634,2))."<br>";
echo (round(-3.76501,2))."<br>";
echo (round(2.23245,2))."<br>";



echo ".........................................................<br>";
echo "Round number using constants<br>";
echo "PHP_ROUND_HALF_UP - Default. Rounds number up to precision decimal, when it is half way there. Rounds 1.5 to 2 and -1.5 to -2 <br>";
echo (round(1.6,0,PHP_ROUND_HALF_UP))."<br>";
echo (round(1.49,0,PHP_ROUND_HALF_UP))."<br>";
echo "............................................................<br>";
echo "PHP_ROUND_HALF_DOWN - Round number down to precision decimal places, when it is half way there. Rounds 1.5 to 1 and -1.5 to -1 <br>";
echo (round(1.6,0,PHP_ROUND_HALF_DOWN))."<br>";
echo (round(1.49,0,PHP_ROUND_HALF_DOWN))."<br>";
echo (round(2.5,0,PHP_ROUND_HALF_DOWN))."<br>";
echo "..................................................................<br>";
echo "PHP_ROUND_HALF_EVEN - Round number to precision decimal places towards the next even value<br>";
echo(round(3.5,0,PHP_ROUND_HALF_EVEN))."<br>";
echo (round(4.5,0,PHP_ROUND_HALF_EVEN))."<br>";
echo (round(2.4,0,PHP_ROUND_HALF_EVEN))."<br>";
echo (round(1.4,0,PHP_ROUND_HALF_EVEN))."<br>";
echo (round(2.6,0,PHP_ROUND_HALF_EVEN))."<br>";
echo "PHP_ROUND_HALF_ODD - Round number to precision decimal places towards the next odd value <br>";
echo (round(3.5,0,PHP_ROUND_HALF_ODD))."<br>";
echo (round(4.5,0,PHP_ROUND_HALF_ODD))."<br>";
echo (round(2.4,0,PHP_ROUND_HALF_ODD))."<br>";
echo (round(1.4,0,PHP_ROUND_HALF_ODD))."<br>";
echo (round(2.6,0,PHP_ROUND_HALF_ODD))."<br>";







?>
</body>
</html>