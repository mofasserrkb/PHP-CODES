<?php declare(strict_types =0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>variable function</title>
</head>
<body>
<?php
echo "We are learning about anonymous variable function<br>";
$final=function ($a,$b)
{
	return $a+$b;
};

 $final(10,45);
 echo "The result of a and b =".$final."<br>";


?>
</body>
</html>