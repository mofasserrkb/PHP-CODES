<!DOCTYPE html>
<html>
<head>
	<title>php basic array</title>
</head>
<body>
<?php
/*
An array stores multiple values in one single variable:
An array is a special variable, which can hold more than one value at a time.
Create an Array in PHP
In PHP, the array() function is used to create an array:

array();

*/
echo"..............................................<br>";
$color = array("RED","YELLOW","WHITE","GREEN","BLACK" );//array declaration
echo $color[0]."<br>";
echo $color[1]."<br>";
echo $color[2]."<br>";
echo $color[3]."<br>";
echo $color[4]."<br>";
echo"..............................................<br>";
$cars = array('Audi' , 'Bmw','Toyota','Lambrugini');
echo "Our company will buy <ul>"."<li>".$cars[1]."</li>"."<li>". $cars[0]."</li>"."<li>". $cars[2]."</li>"."<li>". $cars[3]."</li></ul><br>";
echo"..............................................<br>";
$book = array("Data structure","Algorithm","Networking","Discrete mathematices");
$price=array(120,200,230,150.55);
echo $book[0]."=".$price[0]."<br>";
echo $book[1]."=".$price[1]."<br>";
echo $book[2]."=".$price[2]."<br>";
echo $book[3]."=".$price[3]."<br>";
echo"..............................................<br>";
$subject = array('Database','Compiler','Algorithm','Data structure','Operating system','Machine learning' );
 echo "<ul>";
  for($i=0;$i<=5;$i++)
  {
  	echo "<li><b>".$subject[$i]."</b></li>";
  }
  echo "</ul>";
  echo"..............................................<br>";
  echo "for testing case, there is  a special function for array called print_r() <br>";
  $temperature=array(35.5,56,99.5);
echo "<pre>";
  print_r($temperature);//for testing case,this function is used
echo "</pre>";
?>
</body>
</html>