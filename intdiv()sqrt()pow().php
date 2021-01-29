<!DOCTYPE html>
<html>
<head>
	<title>intdiv(),sqrt() and pow() functions</title>
</head>
<body>
<?php
/*
Definition and Usage
The intdiv() function is used for integer division.

Syntax
intdiv(dividend, divisor);
Parameter Values
Parameter	Description
dividend	Required. Specifies a number that will be divided
divisor	Required. Specifies the number to divide the dividend by
Technical Details
Return Value:	The integer part of the division
........................................................
Definition and Usage
The sqrt() function returns the square root of a number.

Syntax
sqrt(number);
Parameter Values
Parameter	Description
number	Required. Specifies a number
Technical Details
Return Value:	The square root of number, or NAN for negative numbers
...............................................................
Definition and Usage
The pow() function returns x raised to the power of y.

Syntax
pow(x,y);
Parameter Values
Parameter	Description
x	Required. Specifies the base to use
y	Required. Specifies the exponent
Technical Details
Return Value:	x raised to the power of y
*/
echo "The intdiv() function is used for integer division <br>";
echo (intdiv(100, 5))."<br>";
echo (intdiv(120, 3))."<br>";
echo (intdiv(150,-2))."<br>";
echo (intdiv(-170,-5))."<br>";
echo (intdiv(21,2))."<br>";
echo "...........................................................<br>";
echo "The sqrt() function returns the squre root of a number <br>";
echo (sqrt(0))."<br>";
echo (sqrt(1))."<br>";
echo (sqrt(2))."<br>";
echo (sqrt(5))."<br>";
echo (sqrt(49))."<br>";
echo (sqrt(81))."<br>";
echo "...........................................................<br>";
echo "The pow() function returns x raised to the power of y <br>";
echo (pow(1,0))."<br>";
echo (pow(-2,3))."<br>";
echo (pow(-10,2))."<br>";
echo (pow(-20,5))."<br>";
echo (pow(-20,-5))."<br>";
echo (pow(-2,-3.2))."<br>";
echo (pow(-2,-4))."<br>";








?>
</body>
</html>