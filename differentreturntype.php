<?php declare(strict_types=1);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Different return type</title>
</head>
<body>
<?php
/*
PHP Return Type Declarations
PHP 7 also supports Type Declarations for the return statement. Like with the type declaration for function arguments, by enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch.

To declare a type for the function return, add a colon ( : ) and the type right before the opening curly ( { )bracket when declaring the function.


You can specify a different return type, than the argument types, but make sure the return is the correct type:
*/
function sum(float $a,float$b) :float
{
	return ($a+$b);

}
$s=sum(3.5,4.59);
echo "The sum of s =".$s."<br>";
echo "You can specify a different return type, than the argument types, but make sure the return is the correct type:<br>";
function sum1(float $d,float$e) : int 
{
	return (int) ($d+$e);	
}
$s1=sum1(35.7,89.3534);
echo "The sum of s1=".$s1."<br>";
?>
</body>
</html>