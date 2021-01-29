<!DOCTYPE html>
<html>
<head>
	<title>multidimensional array</title>
</head>
<body>
<?php
/*
PHP - Multidimensional Arrays
A multidimensional array is an array containing one or more arrays.

PHP supports multidimensional arrays that are two, three, four, five, or more levels deep. However, arrays more than three levels deep are hard to manage for most people.

The dimension of an array indicates the number of indices you need to select an element.

For a two-dimensional array you need two indices to select an element
*/
echo "Multidimensional array<br>";
$emp = array
(  array(1 ,"Sakib","Manager",25000),
   array(2,"Arif","Director",30000),
   array(3,"Rajib","Engineer",40000),
   array(4,"Basir","Controller",50000)
 );
for($row=0;$row<4;$row++)
{
	for($col=0;$col<4;$col++)
	{
	    echo $emp[$row][$col]." ";
	}
	echo "<br>";
}

echo"................................................<br>";
echo "Another way to define a multidimensional array and printing array element using foreach loop <br>";
$emp1 = 
[ [1 ,"Akib","Manager",125000],
  [2,"Afif","Director",130000],
  [3,"Rafib","Engineer",140000],
  [4,"Rasir","Controller",150000]
 ];
 foreach ($emp1 as  $value) {
 	# code...
 	foreach ($value as  $value1) {
 		# code...
 		echo $value1." ";
 	}
 	echo "<br>";
 }
echo"........................................................<br>";
echo "Multidimensional array,foreach loop,printing array element in a table <br>";
$emp2 = 
[ [1 ,"Azim","Manager",3125000],
  [2,"Naif","Director",3130000],
  [3,"Rabib","Engineer",3140000],
  [4,"Rasel","Controller",3150000]
 ];
  echo "<table border='2px' cellpadding='5px'>";
  echo "<tr>
    <th>ID</th>
    <th>NAME</th>
    <th>Designation</th>
    <th>Salary</th>
  </tr>";
 foreach ($emp2 as $value3) {
 	# code...
 	echo "<tr>";
 	foreach ($value3 as $value4) {
 		# code...
 		echo "<td>". $value4 ."</td>";
 	}
    echo "</tr>";
 }
 echo "</table>";
echo"........................................................<br>";

echo"print_() is used for only testing case . Here we used for $emp array<br>";

echo "<pre>";
print_r($emp);
echo "</pre>";

echo"........................................................<br>";
echo"print_() is used for only testing case . Here we used for $emp1 array<br>";

echo "<pre>";
print_r($emp1);
echo "</pre>";

echo"........................................................<br>";
echo"print_() is used for only testing case . Here we used for $emp2 array<br>";

echo "<pre>";
print_r($emp2);
echo "</pre>";
?>
</body>
</html>