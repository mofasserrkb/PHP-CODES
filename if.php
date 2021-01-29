<!DOCTYPE html>
<html>
<head>
	<title>if statement</title>
</head>
<body>
<?php
/*
if statement - executes some code if one condition is true
Syntax
if (condition) {
  code to be executed if condition is true;
}
*/
$s=335;
if ($s>45)
{
	echo "S is greater ".$s."<br>";

}
$s=34;
if ($s>202)
{
	echo "S if greater ".$s."<br>";
}
echo " S is smaller than 202<br>";
if ($s==34)
{
	echo "The value of S is equal to 34<br>";
}
if ($s!="34");
{
	echo "The value of S is not equal to string value 34<br>";
}
$s="45";
$i="45";
if ($s===$i)
{
	echo "The value and data type of S and I  are same<br>";
}

?>
</body>
</html>