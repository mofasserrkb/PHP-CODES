<!DOCTYPE html>
<html>
<head>
	<title>php indexed array</title>
</head>
<body>
<?php
/*
PHP Indexed Arrays
There are two ways to create indexed arrays:

The index can be assigned automatically (index always starts at 0), like this:

*/
$cars=array("BMW","VOLVO","TOYOTA");
$arraylength=count($cars);
echo "The length of array = ". $arraylength."<br>";
for ($i=0;$i<$arraylength;$i++)
{
    echo $cars[$i]."<br>";
}


?>
</body>
</html>