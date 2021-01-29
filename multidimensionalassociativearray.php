<!DOCTYPE html>
<html>
<head>
	<title>multidimensional associative array</title>
</head>
<body>
<?php
/*

PHP - Multidimensional Arrays
A multidimensional array is an array containing one or more arrays.

PHP supports multidimensional arrays that are two, three, four, five, or more levels deep.

*/
  echo "Multidimensional associative array<br>";
$student = array(
	        "Rakib" => array( "Data com" => 60,"Data base"=>75,"Compiler"=>80 ) , 
            "Naif" => array( "Data com" => 70,"Data base"=>65,"Compiler"=>60 ) ,  
            "Azim" => array( "Data com" => 68,"Data base"=>55,"Compiler"=>60 ) , 
            "kazi" => array( "Data com" => 58,"Data base"=>65,"Compiler"=>70 ) 
 
              );
        echo "<table border='2px'>";
        echo "<tr>
              <th>Student Name </th>
             <th>Data communication</th>
             <th>Data base </th>
             <th>Compiler</th>
            </tr>";
     foreach ($student as $key => $value) {
     	echo "<tr>";
     	# code...
     	echo "<td>". $key."</td>";
     	foreach ($value as $key1 => $value1) {
     		# code...
     		echo "<td>". $key1."=".$value1."</td> ";
     	}
     	echo "</tr>";
     }
     echo "</table>";
     echo "..........................................<br>";
$department = [
	              "CSE" => ["Machine learning"=>45,"Artificial intelligence"=>67,"Neural network"=>33],
                  "SE" => ["Web developing"=>55,"Digital device"=>47,"Neural network"=>37],
                  "CCE" => ["Algorithm"=>65,"graph theory"=>77,"Neural network"=>43]

               ];
   echo "<table border='2px'>";
   echo "<tr>
       <th>Department Name</th>
       <th>Course No:1 </th>
       <th>Course No:2 </th>
       <th>Course No:3 </th>
        </tr>";
  foreach ($department as $k => $v1) {
  	echo "<tr>";
  	# code...
  	echo "<td>";
  	echo $k;
    echo "</td>";
  	 foreach ($v1 as $k1 => $v2) {
  	 	# code...

  	 	echo "<td>".$k1."=".$v2."</td> ";
  	 }
  	 echo "</tr>";

  }
  echo "</table>";


 
?>

</body>
</html>