<!DOCTYPE html>
<html>
<head>
	<title>strip_tag() and wordwrap() functions</title>
</head>
<body>
<?php
/*
Definition and Usage
The strip_tags() function strips a string from HTML, XML, and PHP tags.

Note: HTML comments are always stripped. This cannot be changed with the allow parameter.

Note: This function is binary-safe.

Syntax
strip_tags(string,allow)
Parameter Values
Parameter	Description
string	Required. Specifies the string to check
allow	Optional. Specifies allowable tags. These tags will not be removed
Technical Details
Return Value:	Returns the stripped string
..................................................................

Definition and Usage
The wordwrap() function wraps a string into new lines when it reaches a specific length.

Note: This function may leave white spaces at the beginning of a line.

Syntax
wordwrap(string,width,break,cut)
Parameter Values
Parameter	Description
string	Required. Specifies the string to break up into lines
width	Optional. Specifies the maximum line width. Default is 75
break	Optional. Specifies the characters to use as break. Default is "\n"
cut	Optional. Specifies whether words longer than the specified width should be wrapped:
FALSE - Default. No-wrap
TRUE - Wrap
Technical Details
Return Value:	Returns the string broken into lines on success, or FALSE on failure.

*/
echo "The strip_tags() function strips a string from HTML,XML,and PHP tags<br>";
$str="Hello  <b>programmers</b> HAPPY <i>CODING</i>";
echo $str."Before stripping<br>";
echo strip_tags($str)." (After stripping)<br>";
echo strip_tags($str,"<i>")." (After allowing italic tag and stripping bold tag)<br>";
echo "....................................................................<br>";
echo "The wordwrap() function wraps a string into new lines when it reaches a specific lenght<br>";
$str1="A example of long word is: supercalifragulistic";
echo wordwrap("Hello programmers",4,"<br>")." (when cut parameter is not used,it wraps when space is found)<br>";
echo"..........................................<br>";
echo wordwrap("Hello programmers",4,"<br>",TRUE)." (When cut parameter is used)<br>";
echo ".................................................<br>";
echo wordwrap($str1,4,"<br>")." (When cut parameter is not used)<br>";
echo ".....................................................<br>";
echo wordwrap($str1,4,"<br>",TRUE)." (When cut parameter is used<br>";
echo ".....................................................<br>";











?>
</body>
</html>