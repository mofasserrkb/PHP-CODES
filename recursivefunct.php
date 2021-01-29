<!DOCTYPE html>
<html>
<head>
	<title>recursive function</title>
</head>
<body>
<?php

echo "printing 1 to 10 numbers using recursive function<br>";
function num($a)
{
	if($a<=10)
	{
		echo $a."<br>";
		num($a+1);
	}
}
num(1);
echo "--------------------------------------------------------<br>";
echo "Write an another program by using recursive function<br>";

function num1($a1)
{
	if($a1==0)
	{
		return 1;//a1=5,
		          //5*num1(5-1)
		          //5*4*num()

	}
	else
	{
		return ($a1*num1($a1-1));
	}
}
$a2= num1(5);
echo $a2."<br>";
echo "--------------------------------------------------------<br>";
echo "writing a program which finds odd number from 1 to 20<br>";
function find($i)
{
	
    if($i<=20)
  {  	
	if($i%2 !=0)
	{
		echo $i."<br>";
		
	}
	$i=$i+1;
	find($i);
  }
}
find(1);

?>
</body>
</html>