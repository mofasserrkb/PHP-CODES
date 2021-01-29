<!DOCTYPE html>
<html>
<head>
	<title>actionpage</title>
</head>
<body>
<?php
echo "<pre>";
print_r($_GET);
echo "</pre>";
echo $_GET['lname']."<br>";
echo $_GET['fname']."<br>";
/*
PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.

*/
echo "............................................................<br>";
echo "doller_REQUEST works both get and post method <br>";
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
echo $_REQUEST['fname']."<br>";
echo $_REQUEST['lname']."<br>";

?>
</body>
</html>