<!DOCTYPE html>
<html>
<head>
	<title>Html entities and html special character</title>
</head>
<body>
<?php
/*
Definition and Usage
The htmlentities() function converts characters to HTML entities.

Tip: To convert HTML entities back to characters, use the html_entity_decode() function.

Tip: Use the get_html_translation_table() function to return the translation table used by htmlentities().

Syntax
htmlentities(string,flags,character-set,double_encode)
Parameter Values
Parameter	Description
string	Required. Specifies the string to convert
flags	Optional. Specifies how to handle quotes, invalid encoding and the used document type.
The available quote styles are:

ENT_COMPAT - Default. Encodes only double quotes
ENT_QUOTES - Encodes double and single quotes
ENT_NOQUOTES - Does not encode any quotes
Invalid encoding:

ENT_IGNORE - Ignores invalid encoding instead of having the function return an empty string. Should be avoided, as it may have security implications.
ENT_SUBSTITUTE - Replaces invalid encoding for a specified character set with a Unicode Replacement Character U+FFFD (UTF-8) or &#FFFD; instead of returning an empty string.
ENT_DISALLOWED - Replaces code points that are invalid in the specified doctype with a Unicode Replacement Character U+FFFD (UTF-8) or &#FFFD;
Additional flags for specifying the used doctype:

ENT_HTML401 - Default. Handle code as HTML 4.01
ENT_HTML5 - Handle code as HTML 5
ENT_XML1 - Handle code as XML 1
ENT_XHTML - Handle code as XHTML
character-set	Optional. A string that specifies which character-set to use.
Allowed values are:

UTF-8 - Default. ASCII compatible multi-byte 8-bit Unicode
ISO-8859-1 - Western European
ISO-8859-15 - Western European (adds the Euro sign + French and Finnish letters missing in ISO-8859-1)
cp866 - DOS-specific Cyrillic charset
cp1251 - Windows-specific Cyrillic charset
cp1252 - Windows specific charset for Western European
KOI8-R - Russian
BIG5 - Traditional Chinese, mainly used in Taiwan
GB2312 - Simplified Chinese, national standard character set
BIG5-HKSCS - Big5 with Hong Kong extensions
Shift_JIS - Japanese
EUC-JP - Japanese
MacRoman - Character-set that was used by Mac OS
Note: Unrecognized character-sets will be ignored and replaced by ISO-8859-1 in versions prior to PHP 5.4. As of PHP 5.4, it will be ignored an replaced by UTF-8.

double_encode	Optional. A boolean value that specifies whether to encode existing html entities or not.
TRUE - Default. Will convert everything
FALSE - Will not encode existing html entities

Technical Details
Return Value:	Returns the converted string. However, if the string parameter contains invalid encoding, it will return an empty string, unless either the ENT_IGNORE or ENT_SUBSTITUTE flags are set
...................................................................................
Definition and Usage
The htmlspecialchars() function converts some predefined characters to HTML entities.

The predefined characters are:

& (ampersand) becomes &amp;
" (double quote) becomes &quot;
' (single quote) becomes &#039;
< (less than) becomes &lt;
> (greater than) becomes &gt;
Tip: To convert special HTML entities back to characters, use the htmlspecialchars_decode() function.

Syntax
htmlspecialchars(string,flags,character-set,double_encode)
Parameter Values
Parameter	Description
string	Required. Specifies the string to convert
flags	Optional. Specifies how to handle quotes, invalid encoding and the used document type.
The available quote styles are:

ENT_COMPAT - Default. Encodes only double quotes
ENT_QUOTES - Encodes double and single quotes
ENT_NOQUOTES - Does not encode any quotes
Invalid encoding:

ENT_IGNORE - Ignores invalid encoding instead of having the function return an empty string. Should be avoided, as it may have security implications.
ENT_SUBSTITUTE - Replaces invalid encoding for a specified character set with a Unicode Replacement Character U+FFFD (UTF-8) or &#FFFD; instead of returning an empty string.
ENT_DISALLOWED - Replaces code points that are invalid in the specified doctype with a Unicode Replacement Character U+FFFD (UTF-8) or &#FFFD;
Additional flags for specifying the used doctype:

ENT_HTML401 - Default. Handle code as HTML 4.01
ENT_HTML5 - Handle code as HTML 5
ENT_XML1 - Handle code as XML 1
ENT_XHTML - Handle code as XHTML
character-set	Optional. A string that specifies which character-set to use.
Allowed values are:

UTF-8 - Default. ASCII compatible multi-byte 8-bit Unicode
ISO-8859-1 - Western European
ISO-8859-15 - Western European (adds the Euro sign + French and Finnish letters missing in ISO-8859-1)
cp866 - DOS-specific Cyrillic charset
cp1251 - Windows-specific Cyrillic charset
cp1252 - Windows specific charset for Western European
KOI8-R - Russian
BIG5 - Traditional Chinese, mainly used in Taiwan
GB2312 - Simplified Chinese, national standard character set
BIG5-HKSCS - Big5 with Hong Kong extensions
Shift_JIS - Japanese
EUC-JP - Japanese
MacRoman - Character-set that was used by Mac OS
Note: Unrecognized character-sets will be ignored and replaced by ISO-8859-1 in versions prior to PHP 5.4. As of PHP 5.4, it will be ignored an replaced by UTF-8.

double_encode	Optional. A boolean value that specifies whether to encode existing html entities or not.
TRUE - Default. Will convert everything
FALSE - Will not encode existing html entities
ADVERTISEMENT


Technical Details
Return Value:	Returns the converted string

If the string contains invalid encoding, it will return an empty string, unless either the ENT_IGNORE or ENT_SUBSTITUTE flags are set
............................................................................
*/
echo "The htmlentities() function converts the characters to html entities <br>";
$str= "A 'quote' is <b>bold</b>";
echo $str."<br><br>";
echo "........................................<br>";
echo htmlentities($str)."<br>";
$str1= '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
echo $str1."<br><br>";
echo "...........................................<br>";
echo htmlentities($str1)."<br>";
echo ".............................................<br>";
echo htmlentities($str,ENT_QUOTES)."<br>";
echo "..............................................<br>";
echo htmlentities($str1,ENT_QUOTES)."<br>";
echo "..............................................<br>";
echo htmlentities($str,ENT_NOQUOTES)."<br>";
echo "...............................................<br>";
echo htmlentities($str1,ENT_NOQUOTES)."<br>";
echo "...................................................<br>";
echo "The htmlspecialchars() function converts some predefined characters into html entities<br>";
echo "..............................................<br>";
$str2="This is some <b>bold</b> text";
echo $str2."<br>";
echo "..............................................<br>";
echo htmlspecialchars($str2)."<br>";
echo "..............................................<br>";
$str3='I love "PHP"';
echo "Converts double and single quotes<br>";
echo ".........................................<br>";
echo htmlspecialchars($str3,ENT_QUOTES)."<br>";
echo ".........................................<br>";
$str4='java script & "Python"';
echo"...........................................<br>";
echo htmlspecialchars($str4,ENT_COMPAT)."<br>";
echo "..............................................<br>";
echo htmlspecialchars($str4,ENT_QUOTES)."<br>";
echo "..............................................<br>";
echo htmlspecialchars($str4,ENT_NOQUOTES)."<br>";
echo ".........................................<br>";
$str5="'Java script','Python' &'PHP'";
echo htmlentities($str5,ENT_QUOTES)."<br>";
echo"............................................<br>";
$s1=htmlentities($str5,ENT_QUOTES);
echo html_entity_decode($s1,ENT_QUOTES)."<br>";
echo ".................................<br>";
$str6="I love 'PHP','DOT NET','PYTHON','REACT','ANgular'";
$s2=htmlspecialchars($str6);
echo htmlspecialchars_decode($s2)."<br>";
echo "....................................<br>";
echo "Using get_html_translation_table() function <br>";
echo"<pre>";
print_r(get_html_translation_table(HTML_SPECIALCHARS));
echo"</pre>";
echo "<pre>";
print_r(get_html_translation_table(HTML_ENTITIES));
echo "</pre>";
?>

</body>
</html>