<?php
/*
A session is a way to store information (in variables) to be used across multiple pages.

Unlike a cookie, the information is not stored on the users computer.

What is a PHP Session?
When you work with an application, you open it, do some changes, and then you close it. This is much like a Session. The computer knows who you are. It knows when you start the application and when you end. But on the internet there is one problem: the web server does not know who you are or what you do, because the HTTP address doesn't maintain state.

Session variables solve this problem by storing user information to be used across multiple pages (e.g. username, favorite color, etc). By default, session variables last until the user closes the browser.

So; Session variables hold information about one single user, and are available to all pages in one application.

Tip: If you need a permanent storage, you may want to store the data in a database.

*/
//start the session
session_start();
//Note: The session_start() function must be the very first thing in your document. Before any HTML tags.
?>

<!DOCTYPE html>
<html>
<head>
	<title>$_SESSION variables</title>
</head>
<body>
<?php
//set session variables
$_SESSION["favcolor"]="Green";
$_SESSION["favanimal"]="Cow";
//$_SESSION["favanimal"]="Deer"; modifying session
echo "session variables are set";

?>
</body>
</html>