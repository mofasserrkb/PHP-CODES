<!DOCTYPE html>
<html>
<head>
	<title>break continue statement</title>
</head>
<body>
<?php
for($i=1;$i<=10;$i++)

{
	if($i==4)

    {
    	echo "Number 4 will be skipped<br>";
    	 continue;


    }  
     
     echo "Serial".$i."<br>";
}
for ($j=1;$j<=15;$j++)
{
	if($j==8)
	{
		echo "Terminate loop<br>";
		break;
	}
	echo "Serial No".$j."<br>";
}



?>
</body>
</html>