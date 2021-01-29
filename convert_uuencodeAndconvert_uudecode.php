<!DOCTYPE html>
<html>
<head>
	<title>convert_uuencode() and convert_uudecode() functions</title>
</head>
<body>
<?php
/*
Definition and Usage
The convert_uuencode() function encodes a string using the uuencode algorithm.

Note: This function encodes all strings (including binary) into printable characters. This will fix any problems with obscure binary data when storing in a database or transmit data over a network. Remember to use the convert_uudecode() function before using the data again.

Note: Uuencoded data is about 35% larger than the original.

Syntax
convert_uuencode(string)
Parameter Values
Parameter	Description
string	Required. The string to uuencode
Technical Details
Return Value:	Returns the uuencoded data
...............................................................
Definition and Usage
The convert_uudecode() function decodes a uuencoded string.

This function is often used together with the convert_uuencode() function.

Syntax
convert_uudecode(string)
Parameter Values
Parameter	Description
string	Required. The uuencoded string to decode
Technical Details
Return Value:	Returns the decoded data as a string


*/
echo "The convert_uudecode() function encodes a string using the uuencode algorithm<br>";
$str="Happy coding";
echo "Encode string<br>";
$encodeString=convert_uuencode($str);
echo $encodeString."<br>";
echo "The convert_uudecode() function decodes a uuencoded string<br>";
echo "Decode string<br>";
$decodeString=convert_uudecode($encodeString);
echo $decodeString."<br>";









?>
</body>
</html>