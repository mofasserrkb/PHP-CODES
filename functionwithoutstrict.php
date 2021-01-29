<?php declare(strict_types=0); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>function with out strict declaration</title>
</head>
<body>
<?php 
/*
PHP is a Loosely Typed Language
In the example above, notice that we did not have to tell PHP which data type the variable is.

PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.

*/
function add(int $a,int$b)
{
	return $a+$b;
}
   $s=add(10,3);
   echo "Result".$s."<br>";
   $f=add(11," 3 three");
   echo "Result =".$f."<br>";

?>
</body>
</html>