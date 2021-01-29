<?php
echo "Get php session variables <br>";
session_start();
 echo "Printing all session variables values. It is another way to see all session variables values <br>";
 echo "<pre>";
 print_r($_SESSION);
 echo "</pre>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Get session variables</title>
</head>
<body>
<?php
echo "My favourite color is ".$_SESSION['favcolor']."<br>";
if(isset($_SESSION["favanimal"]))
{
  echo "My favourite animal is ".$_SESSION["favanimal"]."<br>";
}
else
{
	echo "session variable is not found <br>";
}





?>
</body>
</html>