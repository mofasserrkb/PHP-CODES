<!DOCTYPE html>
<html>
<head>
	<title>foreach loop with list function for indexed array and multidimensional associative array</title>
</head>
<body>
<?php
echo "...........................................<br>";
echo "foreach loop with list function [indexed array]<br>";
$student = [ 
	          [1,"Nafiz","Cse",4.00],
	          [2,"Habib","Cse",3.76],
	          [3,"Arif","Cse",3.86],
	          [4,"Azad","Cse",3.23]

            ];
            echo "<table border='2px'cellpadding='5px'>";
            echo "<tr>
               <th>ID</th>
               <th>Name</th>
               <th>Department</th>
               <th>CGPA</th>
                 </tr>";
        foreach ($student as list($id,$name,$department,$cgpa)) {
        	# code...
//echo "<tr>"."<td>".$id."</td> "."<td>".$name."</td> "."<td>".$department."</td> "."<td>".$cgpa."<td>" ."</tr>";
        	
        	echo "<tr>";
            echo "<td>".$id."</td>";
            echo "<td>".$name."</td>";
            echo "<td>".$department."</td>";
            echo "<td>".$cgpa."</td>";

        	echo "</tr>";
         
        }
        echo "</table>";
echo "...........................................<br>";
echo "Multidimensional associative array<br>";
$emp = [ 
         [      
            "id"=>1,
            "name"=>"Rafiq",
            "designation"=>"Manager",
            "salary"=>25000
         ],
         [      
            "id"=>2,
            "name"=>"Aafiq",
            "designation"=>"Assitant Manager",
            "salary"=>15000
         ],
         [      
            "id"=>3,
            "name"=>"Asif",
            "designation"=>"Engineer",
            "salary"=>35000
         ],
         [      
            "id"=>4,
            "name"=>"Haider",
            "designation"=>"Director",
            "salary"=>45000
         ]
       ];
       echo "<table border='2px' cellpadding='5px'>";
       echo "<tr>
          <th>ID</th>
          <th>Name</th>
          <th>Designation</th>
          <th>Salary</th>
            </tr>";

       foreach ($emp as list("id"=>$id,"name"=>$name,"designation"=>$designation,"salary"=>$salary)) {
           # code...
            echo "<tr>";
            echo "<td>".$id."</td> "."<td>".$name."</td> "."<td>".$designation."</td> "."<td>".$salary."</td>";
            echo "</tr>";
       }
       echo "</table>";


?>

</body>
</html>