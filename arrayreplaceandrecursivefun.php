<!DOCTYPE html>
<html>
<head>
	<title>array_replace() and array_replace_recursive</title>
</head>
<body>
<?php
/*
PHP array_replace() Function
The array_replace() function replaces the values of the first array with the values from following arrays.

Tip: You can assign one array to the function, or as many as you like.

If a key from array1 exists in array2, values from array1 will be replaced by the values from array2. If the key only exists in array1, it will be left as it is.If a key exist in array2 and not in array1, it will be created in array1.If multiple arrays are used, values from later arrays will overwrite the previous ones 
Syntax
array_replace(array1, array2, array3, ...)
Parameter Values
Parameter	Description
array1	Required. Specifies an array
array2	Optional. Specifies an array which will replace the values of array1
array3,...	Optional. Specifies more arrays to replace the values of array1 and array2, etc. Values from later arrays will overwrite the previous ones.
.................................................................................
PHP array_replace_recursive() Function
The array_replace_recursive() function replaces the values of the first array with the values from following arrays recursively.
If a key from array1 exists in array2, values from array1 will be replaced by the values from array2. If the key only exists in array1, it will be left as it is. If a key exist in array2 and not in array1, it will be created in array1. If multiple arrays are used, values from later arrays will overwrite the previous ones.
Syntax
array_replace_recursive(array1, array2, array3, ...)
Parameter Values
Parameter	Description
array1	Required. Specifies an array
array2	Optional. Specifies an array which will replace the values of array1
array3,...	Optional. Specifies more arrays to replace the values of array1 and array2, etc. Values from later arrays will overwrite the previous ones.
*/
echo "If a key from array1 exists in array2, and if the key only exists in array1:replacing associative array with indexed array<br>";
$a1=["a"=>"RED","b"=>"GREEN","c"=>"BLACK"];
$a2=["a"=>"BLUE","b"=>"YELLOW"];
$a3=array_replace($a1,$a2);
echo "<pre>";
print_r($a3);
echo "</pre>";
echo".....................................................<br>";
echo "If a key exists in array12 and not in array11:<br>";
$a11=["one"=>"CE","two"=>"EEE","CSE"];
$a12=["one"=>"ME","four"=>"IPE"];
$a13=array_replace($a11,$a12 );
echo $a13[0]."<br>";
echo $a13["one"]."<br>";
echo "<pre>";
print_r($a13);
echo "</pre>";
echo".....................................................<br>";
echo "Using three arrays - the last array a24 will overwrite the previous ones (a21 and 22)<br>";
$a21=["Dhaka","London","New york","A"=>"chittagong"];
$a22=["Munich","Milan"];
$a23=["Madrid","Manchester","Tokio"];
$a24=array_replace($a21,$a22,$a23);
echo "<pre>";
print_r($a24);
echo "</pre>";
echo".....................................................<br>";
echo "Using numeric keys - If a key exists in array32 and not in array31<br>";
$a31=["Barcelona","Juventus","Manchester united","Manchester city"];
$a32=[0=>"Bayern munich",2=>"Real madrid"];
$a33=array_replace($a31,$a32);
echo "<pre>";
print_r($a33);
echo "</pre>";
echo".....................................................<br>";
echo "The array_replace_recursive() function replaces the values of the first array with the values from following arrays recursively <br>";
$a31=[
       "Number one"=>["CU"],
       "Number two"=>["DU","RU"],
       "Number four"=>["DIU","IIUC","MBSTU"]
      ];

$a32=[
        "Number one"=>["AUST","NSU","AIUB"],

        "Number two"=>["UIU","ULAB","UAP"]

     ];
         
 $a33 = [    
          "Number one"=>["BUET","CUET","KUET","RUET"],
          "Number two"=>["Sust","IUT","DUET"],
          "Number three"=>["JU","JNU","BRAC"]
        ];
 $a34=array_replace_recursive($a31,$a32,$a33);
 echo "<pre>";
 print_r($a34);
 echo "</pre>";
 echo ".................................................<br>";
 echo "Difference between array_replace() and array_replace_recursive() function<br>";
 $item=[
 	    "i1"=>["Table","Pencil"],
 	    "i2"=>["Cot","Calculator","laptop"]
       ];
 $item1=[
 	      "i1"=>["sound box","tablet","Macbook"],
 	       "i2"=>["Mouse","Chair","Airphone"]


        ];
      $r1= array_replace_recursive($item,$item1);
    echo "<pre>";
    print_r($r1);
    echo "</pre>";
$item11=[
 	    "i11"=>["Table","Pencil"],
 	    "i12"=>["Cot","Calculator","laptop"]
       ];
 $item12=[
 	      "i11"=>["sound box","tablet"],
 	       "i12"=>["Mouse","Chair"]


        ];

    $r2=array_replace($item11,$item12);
     echo "<pre>";
     print_r($r2);
     echo "</pre>";


?>
</body>
</html>