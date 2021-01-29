<!DOCTYPE html>
<html>
<head>
	<title>count function and size function</title>
</head>
<body>
<?php
/*
PHP count() Function:
The count() function returns the number of elements in an array.
Syntax
count(array, mode)
Parameter Values
Parameter	Description
array	Required. Specifies the array
mode	Optional. Specifies the mode. Possible values:
0 - Default. Does not count all elements of multidimensional arrays
1 - Counts the array recursively (counts all the elements of multidimensional arrays)
......................................................................................
The sizeof() function returns the number of elements in an array.

The sizeof() function is an alias of the count() function.
Syntax
sizeof(array, mode)
Parameter Values
Parameter	Description
array	Required. Specifies the array
mode	Optional. Specifies the mode. Possible values:
0 - Default. Does not count all elements of multidimensional arrays
1 - Counts the array recursively (counts all the elements of multidimensional arrays)
......................................................................................
PHP array_count_values() Function
The array_count_values() function counts all the values of an array.

Syntax
array_count_values(array)

*/
echo "The count() function returns the number of elements in an array <br> ";
$department = ["cse","EEE","ECE","CE","IPE"];
echo count($department);

echo"<br>....................................................<br>";
echo "The sizeof() function returns the number of elements in an array <br>";
$subject = ["Database","Data com","Compiler","Algorithm","Networking","Simulation"];
echo sizeof($subject);

echo"<br>....................................................<br>";
echo "count function for multidimensional array<br>";
$number=[
	["one"=>1,"Two"=>2,"Three"=>3,"Four"=>4],
	["Twenty one"=>21,"Twenty Two"=>22,"Twenty Three"=>23,"Twenty Four"=>24],
    ["Fourty one"=>41,"Fourty Two"=>42,"Fourty Three"=>43,"Fourty Four"=>44]
];
echo count($number)."<br>";
echo "Using parameter mode in count() <br>";
echo count($number,1)."<br>";
echo count($number[1],1);
echo"<br>....................................................<br>";
echo "size of function for multidimensional array <br>";
$student=[
           [
             "Database"=>40,
             "Networking"=>35,
             "Java"=>49

           ],
           [
             "Data com"=>20,
             "Networking"=>45,
             "Java"=>39

           ],
           [
             "Database"=>30,
             "Networking"=>25,
             "Java"=>29

           ]


         ];
         echo "The length of the multidimensional array =".sizeof($student)."<br>";
         echo " Every element in the multidimensional associative array is=".sizeof($student,1)."<br>";
         echo"<br>....................................................<br>";
        $student1=[
         "CSE"=>  [
             "Database"=>40,
             "Networking"=>35,
             "Java"=>49

           ],
        "CCE"=>   [
             "Data com"=>20,
             "Networking"=>45,
             "Java"=>39

           ],
      "ICE"=> [
             "Database"=>30,
             "Networking"=>25,
             "Java"=>29,
             "Machine learning"=>33

           ]
         ]; 
         echo "Printing every element of a selected array in the multidimensional associative array =".sizeof($student1["ICE"],1)."<br>";
          echo "<br>....................................................</br>";
          echo "Using sizeof() and count() in a loop";
          $book = array( "C programming" ,"Digital electronics","Algorithm","Neural network" );
          $len=count($book);
          echo "<ul>";
          for($i=0;$i<$len;$i++)
          {
          	echo "<li>".$book[$i]."</li><br>";
          }
          echo "</ul>";
         echo "<br>....................................................</br>"; 
         echo "array_count_values(input) function  for indexed array <br>";
   $item=["apple","Banana","Jackfruit","apple","pineapple"];
   echo "<pre>";
   print_r(array_count_values($item));
   echo "</pre>";
   echo "<br>....................................................</br>"; 
   echo"array_count_values(input) function for associative array<br>";
   $itemlist=["item1"=>"Apple","item2"=>"Banana","item3"=>"Jackfruit","item4"=>"Apple","item5"=>"pineapple","item6"=>"Banana"];  
   echo "<pre>";
   print_r(array_count_values($itemlist));
   echo "</pre>";
 echo "<br>....................................................</br>"; 
   echo"array_count_values(input) function for multidimensional associative array<br>";
$student11=[
         "CSE"=>  [
             "Database",
             "Networking",
             "Java"

           ],
        "CCE"=>   [
             "Data com",
             "Networking",
             "Java",
             "Data com"

           ],
      "ICE"=> [
             "Database"=>40,
             "Networking"=>50,
             "Java"=>55,
             "Machine learning"=>40,
          
           ]
         ]; 
echo "Using array_count_values() for Multidimensional associative array,first we have to assign mutidimensional array variable then in the third bracket we have to put array key <br> ";
echo "<pre>";

print_r(array_count_values($student11["ICE"]));


echo "</pre>";
echo "Using array_count_values() for Multidimensional associative array,first we have to assign mutidimensional array variable then in the third bracket we have to put array key <br> ";
echo "<pre>";

print_r(array_count_values($student11["CCE"]));


echo "</pre>";


?>

</body>
</html>