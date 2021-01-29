<!DOCTYPE html>
<html>
<head>
	<title>actionpage1</title>
</head>
<body>
<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
echo $_POST['fname']."<br>";
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
echo "....................................................................<br>";
echo "doller_SERVER is a global variable which holds information about headers, paths and script locations <br>";
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
echo "........................................................<br>";
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['DOCUMENT_ROOT']."<br>";
echo "..........................................................<br>";



?>
</body>
</html>