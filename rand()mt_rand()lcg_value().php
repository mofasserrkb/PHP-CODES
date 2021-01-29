<!DOCTYPE html>
<html>
<head>
	<title>rand(),mt_rand(),lcg_value() function</title>
</head>
<body>
<?php
/*
Definition and Usage
The rand() function generates a random integer.

Tip: If you want a random integer between 10 and 100 (inclusive), use rand (10,100).

Tip: The mt_rand() function produces a better random value, and is 4 times faster than rand().

Syntax
rand();

or

rand(min,max);
Parameter Values
Parameter	Description
min	Optional. Specifies the lowest number to be returned. Default is 0
max	Optional. Specifies the highest number to be returned. Default is getrandmax()
Technical Details
Return Value:	A random integer between min (or 0) and max (or getrandmax() inclusive)
.........................................................................
Definition and Usage
The mt_rand() function generates a random integer using the Mersenne Twister algorithm.

Tip: This function produces a better random value, and is 4 times faster than rand().

Tip: If you want a random integer between 10 and 100 (inclusive), use mt_rand (10,100).

Syntax
mt_rand();

or

mt_rand(min,max);
Parameter Values
Parameter	Description
min	Optional. Specifies the lowest number to be returned. Default is 0
max	Optional. Specifies the highest number to be returned. Default is mt_getrandmax()
Technical Details
Return Value:	A random integer between min (or 0) and max (or mt_getrandmax() inclusive). Returns FALSE if max < min
.............................................
Definition and Usage
The lcg_value() function returns a pseudo random number in a range between 0 and 1.

Syntax
lcg_value();
Technical Details
Return Value:	A pseudo random float value in a range between 0 and 1
*/
echo "The rand() function generates a random integer<br>";
echo (rand())."<br>";
echo (rand())."<br>";
echo (rand(0,20))."<br>";
echo (rand(15,45))."<br>";
echo (rand(10,100))."<br>";
echo ".........................................................<br>";
echo "The mt_rand() function generates a random integer using mersenne twister algorithm <br>";
echo (mt_rand())."<br>";
echo (mt_rand())."<br>";
echo (mt_rand(0,30))."<br>";
echo (mt_rand(80,1024))."<br>";
echo (mt_rand(50,200))."<br>";
echo "...............................................................<br>";
echo "The lcg_value() function returns a pseudo random float number in a range between 0 and 1 <br>";
echo (lcg_value())."<br>";






?>
</body>
</html>