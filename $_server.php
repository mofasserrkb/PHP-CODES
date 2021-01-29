<!DOCTYPE html>
<html>
<head>
	<title>$_SERVER global variables</title>
</head>
<body>
    <form autocomplete="off" action ="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    	FIRST NAME:<input type="text" name="fname"><br>
    	LAST NAME:<input type="text" name="lname"><br>
    	AGE:          <input type="text" name="agename"><br><br>
           <input type="submit" name="save">

    </form>

<?php
if (isset($_POST['save'])) {
	echo $_POST['fname']."<br>";
	echo $_POST['lname']."<br>";
	echo $_POST['agename'];
}







?>
</body>
</html>