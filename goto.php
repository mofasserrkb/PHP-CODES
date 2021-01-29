<!DOCTYPE html>
<html>
<head>
	<title>go to statement</title>
</head>
<body>
<?php
for($i=1;$i<=30;$i++)
{

   if($i%2==0)
{
	goto t1;
	t1:
echo "EVEN NUMBER ".$i."<br>";
}

}
$j=25;
if ($j<30)
{
	goto t2;
}
t2:
echo $j."=is a odd number <br>";
for($n=1;$n<=100;$n=$n+10)
{
	for($m=$n;$m<$n+10;$m++)
	{
		echo $m." ";
	}
	echo "<br>";
}


?>
</body>
</html>