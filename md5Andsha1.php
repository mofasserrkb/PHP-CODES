<!DOCTYPE html>
<html>
<head>
	<title>md5() and sha1() functions</title>
</head>
<body>
<?php
/*
Definition and Usage
The md5() function calculates the MD5 hash of a string.

The md5() function uses the RSA Data Security, Inc. MD5 Message-Digest Algorithm.

From RFC 1321 - The MD5 Message-Digest Algorithm: "The MD5 message-digest algorithm takes as input a message of arbitrary length and produces as output a 128-bit "fingerprint" or "message digest" of the input. The MD5 algorithm is intended for digital signature applications, where a large file must be "compressed" in a secure manner before being encrypted with a private (secret) key under a public-key cryptosystem such as RSA."

To calculate the MD5 hash of a file, use the md5_file() function.

Syntax
md5(string,raw)
Parameter Values
Parameter	Description
string	Required. The string to be calculated
raw	Optional. Specifies hex or binary output format:
TRUE - Raw 16 character binary format
FALSE - Default. 32 character hex number

Technical Details
Return Value:	Returns the calculated MD5 hash on success, or FALSE on failure
......................................................................
Definition and Usage
The sha1() function calculates the SHA-1 hash of a string.

The sha1() function uses the US Secure Hash Algorithm 1.

From RFC 3174 - The US Secure Hash Algorithm 1: "SHA-1 produces a 160-bit output called a message digest. The message digest can then, for example, be input to a signature algorithm which generates or verifies the signature for the message. Signing the message digest rather than the message often improves the efficiency of the process because the message digest is usually much smaller in size than the message. The same hash algorithm must be used by the verifier of a digital signature as was used by the creator of the digital signature."

Tip: To calculate the SHA-1 hash of a file, use the sha1_file() function.

Syntax
sha1(string,raw)
Parameter Values
Parameter	Description
string	Required. The string to be calculated
raw	Optional. Specify hex or binary output format:
TRUE - Raw 20 character binary format
FALSE - Default. 40 character hex number

Technical Details
Return Value:	Returns the calculated SHA-1 hash on success, or FALSE on failure
*/
echo "The md5() function calculats the MD5 hash of a string.MD5 uses message digest algorithm<br>";
$str="Happy coding";
echo "THe STRING".$str."<br>";
echo "True-Raw 16 character binary format for md5    ".md5($str,TRUE)."<br><br>";
echo "false-32 character of hex number for md5 ".md5($str)."<br><br>";
echo "The sha1() function calculates the SH-1 hash of a string. sha1 uses US secure hash algorithm
<br> ";
echo "THe STRING".$str."<br>";
echo "True-Raw 20 character binary format for sha1    ".sha1($str,TRUE)."<br><br>";
echo "false-40 character of hex number for sha1 ".sha1($str)."<br><br>";
if (md5($str)=="076f0c8a68f706b1be1a8b173d592e14") {
      echo "Password match";
}
else
{
	echo "Wrong password";
}






?>
</body>
</html>