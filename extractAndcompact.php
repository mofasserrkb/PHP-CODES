<!DOCTYPE html>
<html>
<head>
	<title>extract() and compact() functions</title>
</head>
<body>
<?php
/*
Definition and Usage
The extract() function imports variables into the local symbol table from an array.

This function uses array keys as variable names and values as variable values. For each element it will create a variable in the current symbol table.

This function returns the number of variables extracted on success.

Syntax
extract(array, extract_rules, prefix)
Parameter Values
Parameter	Description
array	Required. Specifies the array to use
extract_rules	Optional. The extract() function checks for invalid variable names and collisions with existing variable names. This parameter specifies how invalid and colliding names are treated.
Possible values:

EXTR_OVERWRITE - Default. On collision, the existing variable is overwritten
EXTR_SKIP - On collision, the existing variable is not overwritten
EXTR_PREFIX_SAME - On collision, the variable name will be given a prefix
EXTR_PREFIX_ALL - All variable names will be given a prefix
EXTR_PREFIX_INVALID - Only invalid or numeric variable names will be given a prefix
EXTR_IF_EXISTS - Only overwrite existing variables in the current symbol table, otherwise do nothing
EXTR_PREFIX_IF_EXISTS - Only add prefix to variables if the same variable exists in the current symbol table
EXTR_REFS - Extracts variables as references. The imported variables are still referencing the values of the array parameter
prefix	Optional. If EXTR_PREFIX_SAME, EXTR_PREFIX_ALL, EXTR_PREFIX_INVALID or EXTR_PREFIX_IF_EXISTS are used in the extract_rules parameter, a specified prefix is required.

This parameter specifies the prefix. The prefix is automatically separated from the array key by an underscore character.

Technical Details
Return Value:	Returns  the number of variables extracted on success
............................................................................
Definition and Usage
The compact() function creates an array from variables and their values.

Note: Any strings that does not match variable names will be skipped.

Syntax
compact(var1, var2...)
Parameter Values
Parameter	Description
var1	Required. Can be a string with the variable name, or an array of variables
var2,...	Optional. Can be a string with the variable name, or an array of variables. Multiple parameters are allowed.

Technical Details
Return Value:	Returns an array with all the variables added to it

*/
echo "The extract() function uses array keys as variable names and values as variabele values <br>";
$club=["one"=>"Real madrid","two"=>"Ac Milan","three"=>"Bayern munich","four"=>"Liverpool","five"=>"Barcelona"];
extract($club);
echo "First position =".$one."<br>";
echo "Second position =".$two."<br>";
echo "Third position =".$three."<br>";
echo "Fourth position =".$four."<br>";
echo "Fifth position =".$five."<br>";
echo "..................................................<br>";
$a="Man city";
$club1=["a"=>"Real madrid","b"=>"Ac Milan","c"=>"Bayern munich","d"=>"Liverpool","e"=>"Barcelona"];
echo "EXTR_PREFIX_SAME works on collision and variable name will be given a prefix<br>";
extract($club1,EXTR_PREFIX_SAME,"pos");
echo "The value of a=".$a."<br>";
echo "First position =".$pos_a."<br>";
echo "Second position =".$b."<br>";
echo "Third position =".$c."<br>";
echo "Fourth position =".$d."<br>";
echo "Fifth position =".$e."<br>";
echo "..................................<br>";
$club11=["A"=>"Real madrid","B"=>"Ac Milan","C"=>"Bayern munich","D"=>"Liverpool","E"=>"Barcelona"];
echo "EXTR_PREFIX_ALL works on collision and All variable names will be given a prefix<br>";
extract($club11,EXTR_PREFIX_ALL,"pos");

echo "First position =".$pos_A."<br>";
echo "Second position =".$pos_B."<br>";
echo "Third position =".$pos_C."<br>";
echo "Fourth position =".$pos_D."<br>";
echo "Fifth position =".$pos_E."<br>";
echo "...............................................<br>";
$i="ME";
$club22=["i"=>"cse","j"=>"EEE","k"=>"IPE"];
echo "The EXTR_SKIP works on collision. The existing variable is not overwritten <br>";
extract($club22,EXTR_SKIP);
echo "The value of i=".$i."<br>";
echo "The value of j=".$j."<br>";
echo "The value of k=".$k."<br>";
echo ".................................................<br>";
echo "The compact() function creates an array from variables and their values <br>";
$first_name= "Rajib";
$last_name="Rahman";
$age=36;
$hobby="Playin football";
$Agrabad="city";
$chattogram="division";
$bio=["Agrabad","chattogram"];
$newArray=compact("first_name","last_name","age","hobby",$bio);
echo "<pre>";
print_r($newArray);
echo "</pre>";

?>

</body>
</html>