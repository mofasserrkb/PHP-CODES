<?php declare(strict_types=1);
?>
<!DOCTYPE html>
<html>
<head>
	<title>function with strict declaration</title>
</head>
<body>
<?php
/*
In PHP 7, type declarations were added. This gives us an option to specify the expected data type when declaring a function, and by adding the strict declaration, it will throw a "Fatal Error" if the data type mismatches.

*/
function add1(int $a,int $b)
{
	return $a+$b;
}
 $s= add1(23,45);
 echo "This will not show any fatal error. So the result of s =".$s."<br>";
 echo "The result of f will not be gained.Instead it will show a fatal error<br> ";
 $f=add1(67,445.5);
 
 echo $f."<br>";




?>
</body>
</html>