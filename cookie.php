<?php
/*
What is a Cookie?
A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too. With PHP, you can both create and retrieve cookie values.

Create Cookies With PHP
A cookie is created with the setcookie() function.

Syntax
setcookie(name, value, expire, path, domain, secure, httponly);
Only the name parameter is required. All other parameters are optional.
Note: The setcookie() function must appear BEFORE the <html> tag.

Note: The value of the cookie is automatically URLencoded when sending the cookie, and automatically decoded when received (to prevent URLencoding, use setrawcookie() instead).
*/
$cookie_name="user";
$cookie_value="Jamil";
echo "modifying cookie value from Jamil to Rana<br>";
$cookie_value="Rana";//modifying cookie value from Jamil to Rana
setcookie($cookie_name,$cookie_value,time()+(8600*30),"/");

?>



<!DOCTYPE html>
<html>
<head>
	<title>Cookie</title>
</head>
<body>
<p>The following example creates a cookie named "user" with the value "John Doe". The cookie will expire after 30 days (86400 * 30). The "/" means that the cookie is available in entire website (otherwise, select the directory you prefer).

We then retrieve the value of the cookie "user" (using the global variable $_COOKIE). We also use the isset() function to find out if the cookie is set:

 </p>
<?php

if(!isset($_COOKIE[$cookie_name]))
{
	echo "cookie is not set";
}
else
{
	echo "cookie name: ".$cookie_name."    is set<br>";
	echo "cookie value: ".$_COOKIE[$cookie_name]." <br>";

}

?>
</body>
</html>