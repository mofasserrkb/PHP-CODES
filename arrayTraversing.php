<!DOCTYPE html>
<html>
<head>
	<title>array traversing functions</title>
</head>
<body>
<?php
/*
Definition and Usage
The current() function returns the value of the current element in an array.

Every array has an internal pointer to its "current" element, which is initialized to the first element inserted into the array.

Tip: This function does not move the arrays internal pointer.

Related methods:

end() - moves the internal pointer to, and outputs, the last element in the array
next() - moves the internal pointer to, and outputs, the next element in the array
prev() - moves the internal pointer to, and outputs, the previous element in the array
reset() - moves the internal pointer to the first element of the array
each() - returns the current element key and value, and moves the internal pointer forward
Syntax
current(array)
Parameter Values
Parameter	Description
array	Required. Specifies the array to use

Technical Details
Return Value:	Returns the value of the current element in an array, or FALSE on empty elements or elements with no value
.........................................................................................
Definition and Usage
The next() function moves the internal pointer to, and outputs, the next element in the array.

Related methods:

prev() - moves the internal pointer to, and outputs, the previous element in the array
current() - returns the value of the current element in an array
end() - moves the internal pointer to, and outputs, the last element in the array
reset() - moves the internal pointer to the first element of the array
each() - returns the current element key and value, and moves the internal pointer forward
Syntax
next(array)
Parameter Values
Parameter	Description
array	Required. Specifies the array to use

Technical Details
Return Value:	Returns the value of the next element in the array on success, or FALSE if there are no more elements
..............................................................................
Definition and Usage
The key() function returns the element key from the current internal pointer position.

This function returns FALSE on error.

Syntax
key(array)
Parameter Values
Parameter	Description
array	Required. Specifies the array to use
Technical Details
Return Value:	Returns the key of the array element that is currently being pointed to by the internal pointer
......................................................................
Definition and Usage
The pos() function returns the value of the current element in an array.

This function is an alias of the current() function.

Every array has an internal pointer to its "current" element, which is initialized to the first element inserted into the array.

Tip: This function does not move the arrays internal pointer.
...........................................................................
Definition and Usage
The each() function returns the current element key and value, and moves the internal pointer forward.

Note: The each() function is deprecated in PHP 7.2.

This element key and value is returned in an array with four elements. Two elements (1 and Value) for the element value, and two elements (0 and Key) for the element key.
........................................................................................

*/
echo "The current() function returns the value of the current element in an array <br>";
$club=["Real madrid","Bayern munich","Liverpool","Man city","Barcelona","Man u"];

$newArray=current($club);
echo $newArray."<br>";

echo "The next() function moves the internal pointer to,and outputs,the next element in the array <br>";
echo next($club)."<br>";
echo "The prev() function moves the internal pointer to,and outputs, the previous element in the array <br>";
echo prev($club)."<br>";
echo "The end() function moves the internal point to ,and outputs, to the last element in the array<br>";
echo end($club)."<br>";
echo "The key() function returns the element key from the current internal pointer position <br>";
echo key($club)."<br>";
echo "The pos() function returns the value of the current element in an array.This function doesnot move the arrays internal pointer <br>";
echo pos($club)."<br>";
echo "The each() function returns the current element key and value. This function is deprecated in php 7.2 <br>";
each($club);
echo "<pre>";
print_r($club);
echo "</pre>";
echo "The reset() function moves the internal pointer to the first element of the array <br>";
echo reset($club)."<br>";
echo key($club)."<br>";

?>

</body>
</html>