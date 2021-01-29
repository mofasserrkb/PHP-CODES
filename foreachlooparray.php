<!DOCTYPE html>
<html>
<head>
	<title>foreach loop for array</title>
</head>
<body>
<?php
/*
The foreach loop - Loops through a block of code for each element in an array.

The PHP foreach Loop
The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.

Syntax
foreach ($array as $value) {
  code to be executed;
}
For every loop iteration, the value of the current array element is assigned to $value and the array pointer is moved by one, until it reaches the last array element.

*/
$subject = array("Algorithm" , "Operating system","Database","Compiler");
foreach ($subject as  $value) {
	# code...
	echo $value."<br>";
}
echo ".................................................<br>";
echo "foreach loop for indexed array<br>";
$department = array('CSE' ,'EEE','ECE','CE','SW' );
foreach ($department as $key => $value1) {
	# code...
	echo $key."=".$value1."<br>";
}
echo"......................................................<br>";
echo "foreach loop for associative array<br>";

$student = array('CSE' =>50,'EEE'=>69,'ECE'=>45,'IPE'=>79 );
echo "<ul>";
foreach ($student as $key1 => $value2) {
	
	# code...
	echo "<li>". $key1."=".$value2."</li><br>";

}
echo "</ul>";



?>




</body>
</html>