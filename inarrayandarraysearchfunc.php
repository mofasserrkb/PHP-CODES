<!DOCTYPE html>
<html>
<head>
	<title>in_array() and array_search()</title>
</head>
<body>
<?php
/*
PHP in_array() Function
The in_array() function searches an array for a specific value.

Note: If the search parameter is a string and the type parameter is set to TRUE, the search is case-sensitive.

Syntax
in_array(search, array, type)
Parameter Values
Parameter	Description
search	Required. Specifies the what to search for
array	Required. Specifies the array to search
type	Optional. If this parameter is set to TRUE, the in_array() function searches for the search-string and specific type in the array.

*/
echo "in_array(,) function in a program<br>";
echo "................................................<br>";
echo "in_array() function for a indexed array<br>";
$department=["CSE","CE","ME","SE","IPE"];
echo "in_array() returns 1 if element is found in the array<br>";
echo in_array("CSE", $department)."<br>";


if (in_array("IPE",$department))
{
	echo "This function returns ".in_array("IPE", $department)."<br>";
	echo "find successfully and the element is IPE<br>";
}
else
{
	echo "can not find the element<br>";
}
$department1=["EEE","NSE","PME",190];
if (in_array(190,$department1,TRUE))

{


     echo "Function returns  ".in_array(190,$department1)."<br>";
     
	echo "Find successfully and the element is 190<br>";
}
else
{
	echo "can not find the element<br>";
}
if (in_array("EEE",$department1,TRUE))

{


     echo "Function returns  ".in_array("EEE",$department1,TRUE)."<br>";
     
	echo "Find successfully and the element is EEE<br>";
}
else
{
	echo "can not find the element<br>";
}
echo "................................................<br>";
echo "in_array() function for a multdimensional indexed array<br>";
$item= [ 
        
        ["chair","table","dining table"],
        ["Freeze","dressing table","chair"],
        ["Cot","Freeze","table fan"]
       ];
  if(in_array(["Freeze","dressing table","chair"],$item,TRUE))
  {
      echo "in_array can also be used to search an array in the multidimensional indexed array <br>";

     echo "The result of the search =". in_array(["Freeze","dressing table","chair"],$item,TRUE)."<br>";
    

  }
  else 
  {
  	echo "can't find <br>";
  }
  echo "................................................<br>";
  echo "Searching an array element using array_search(,) function <br>";
  $roll= ["Tania","Tanjim","Rajib","Rina","Azim","Ayrin"];
  echo "array_search(,) gives the index number if the searched element is found in an array[for indexed array]<br>";
  echo "The result of element using array_search() is ".array_search("Rajib",$roll,TRUE)."<br>";
  echo "................................................<br>";
  echo "Searchin an array element using array_search() function in associatived array<br>";
  $roll1=["r1"=>"Imran","r2"=>"Irin","r3"=>"Zarif","r4"=>"Zarin","r5"=>"Parvez","r6"=>"Papia"];
   echo "array_search(,) gives the key if the searched element is found in an array[for associative array]<br>";
  echo "The result of element using array_search() is= ".array_search("Irin",$roll1,TRUE)."<br>";
   echo "................................................<br>";
  $roll2=[
  	["r11"=>"Imran", "r12"=> "Rafid","r13"=>"Rajan"],
  	["r21"=>"Irin","r22"=> "Gazi","r23"=>"Rana"],
  	["r31"=>"Zarif","r32"=> "zia","r33"=>"Hamid"]
  
  ];
  echo "Searching an array in a multidimensional array & it will return index number of the array =" .array_search(["r11"=>"Imran", "r12"=> "Rafid","r13"=>"Rajan"], $roll2,TRUE)."<br>";
  $roll3=[
  "cat1"=>	["r11"=>"Imran", "r12"=> "Rafid","r13"=>"Rajan"],
  "cat2"=>	["r21"=>"Irin","r22"=> "Gazi","r23"=>"Rana"],
  "cat3"=>  ["r31"=>"Zarif","r32"=> "zia","r33"=>"Hamid"]
  
  ];
  echo "Searching an array in a multidimensional array & it will return key of the array =". array_search(["r21"=>"Irin","r22"=> "Gazi","r23"=>"Rana"],$roll3,TRUE);

?>
</body>
</html>