<?php

echo "Showing cookie value from cookie php page: ".$_COOKIE['user']."<br>";

 echo "Deleting cookie <br>";
//setcookie("user"," ",time()-(8600*30),"/");


?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
To delete a cookie, use the setcookie() function with an expiration date in the past.

</body>
</html>