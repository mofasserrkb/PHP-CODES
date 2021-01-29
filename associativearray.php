<!DOCTYPE html>
<html>
<head>
	<title>Associative array</title>
</head>
<body>
<?php
/*
PHP Associative Arrays
Associative arrays are arrays that use named keys that you assign to them.

*/
$number = array("One" =>1 ,"Two"=>2,"Three"=>3,"Four"=>4,1=>5 );
echo $number["One"]."<br>";
echo $number["Two"]."<br>";
echo $number["Three"]."<br>";
echo $number["Four"]."<br>";
echo $number["1"]."<br>";
echo "<pre>";
echo var_dump($number);
echo "</pre>";
?>
</body>
</html>