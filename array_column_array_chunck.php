<!DOCTYPE html>
<html>
<head>
	<title>array_column() and array_chunk() function</title>
</head>
<body>
<?php
/*
Definition and Usage
The array_column() function returns the values from a single column in the input array.

Syntax
array_column(array, column_key, index_key)
Parameter Values
Parameter	Description
array	Required. Specifies the multi-dimensional array (record-set) to use. As of PHP 7.0, this can also be an array of objects.
column_key	Required. An integer key or a string key name of the column of values to return. This parameter can also be NULL to return complete arrays (useful together with index_key to re-index the array)
index_key	Optional. The column to use as the index/keys for the returned array
......................................................
Definition and Usage
The array_chunk() function splits an array into chunks of new arrays.

Syntax
array_chunk(array, size, preserve_key)
Parameter Values
Parameter	Description
array	Required. Specifies the array to use
size	Required. An integer that specifies the size of each chunk
preserve_key	Optional. Possible values:
true - Preserves the keys
false - Default. Reindexes the chunk numerically













*/
echo "array_column() function returns the values from a single column in the input array <br>";
$club= [
        ["id"=>11,
         "first name"=>"Habib",
         "last name"=>"Karim"
        ],
        [
        	"id"=>12,
        	"first name"=>"Mohammad",
        	"last name"=>"Sakib"

        ],

        [
        	"id"=>13,
        	"first name"=>"Adnan",
        	"last name"=>"Ashik"
        ],
        [
        	"id"=>14,
        	"first name"=>"cyan",
        	"last name"=>"Tarek"
        ]

      ];
$newArray=array_column($club,"first name");
echo "<pre>";
print_r($newArray);
echo "</pre>";
echo ".................................................. <br>";
echo "Returning the values from a single column using array_column() function.This function can be used for creating associative array <br> ";
$newArray1=array_column($club, "first name","id");

echo "<pre>";
print_r($newArray1);
echo "</pre>";
echo "..................................................................<br>";
$club1= [ "BMW","Mercedes","Audi","Toyota","Honda","Opel"];

echo "The array_chunk() function splits an array into chunks of new array.(indexed array) <br> ";
$newArray2= array_chunk($club1,2);
echo "<pre>";
print_r($newArray2);
echo "</pre>";
echo "......................................................................<br>";
$newArray3=array_chunk($club1,4);
echo "<pre>";
print_r($newArray3);
echo "</pre>";
echo "Using array_chunk() function for an associative array<br>";
$age=[
       "Rajib"=>45,
       "Karim"=>33,
       "Sajid"=>77,
       "Arif"=>89

    ];
    $newArray4=array_chunk($age,2,true);
    echo "<pre>";
    print_r($newArray4);
    echo "</pre>";
    echo ".................................................<br>";
    





?>
</body>
</html>