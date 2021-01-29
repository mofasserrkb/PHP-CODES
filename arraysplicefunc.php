<!DOCTYPE html>
<html>
<head>
	<title>array_splice function </title>
</head>
<body>
	<?php
/*
Definition and Usage
The array_splice() function removes selected elements from an array and replaces it with new elements. The function also returns an array with the removed elements.
Tip: If the function does not remove any elements (length=0), the replaced array will be inserted from the position of the start parameter
Note: The keys in the replaced array are not preserved.
Syntax
array_splice(array, start, length, array)
Parameter Values
Parameter	Description
array	Required. Specifies an array
start	Required. Numeric value. Specifies where the function will start removing elements. 0 = the first element. If this value is set to a negative number, the function will start that far from the last element. -2 means start at the second last element of the array.
length	Optional. Numeric value. Specifies how many elements will be removed, and also length of the returned array. If this value is set to a negative number, the function will stop that far from the last element. If this value is not set, the function will remove all elements, starting from the position set by the start-parameter.
array	Optional. Specifies an array with the elements that will be inserted to the original array. If it's only one element, it can be a string, and does not have to be an array.

Return Value:	Returns the array consisting of the extracted elements
*/
echo "Removing array elements from the position 1 using array_splice() function <br> ";
$color=["Red","Green","Yellow","Black","White"];
array_splice($color,2);
echo "<pre>";
print_r($color);
echo "</pre>";
echo "....................................................... <br>";
echo "Removing array elements from the position 2 and removes 2 elements using array_splice() function <br>";
$car=["Audi","BMW","Mercedez","Lambrogini","Toyota"];
array_splice($car,2,2);
echo "<pre>";
print_r($car);
echo "</pre>";
echo "............................................................... <br> ";
$team1=["Real madrid","AC Milan","Bayern munich","Liverpool","Barcelona","Inter milan"];
array_splice($team1,1,-2);
echo "<pre>";
print_r($team1);
echo "</pre>";
echo "..................................................................<br>";
echo "Removing last array element using array_splice() function <br>";
$subject=["Algorithm","Networking","Compiler","Database","Web programming"];
array_splice($subject,-1);
echo "<pre>";
print_r($subject);
echo "</pre>";
echo ".................................................................<br>";
echo "Removing first array element using array_splice() function <br>";
$department=["Architecture","EEE","CSE","CE","IPE","PME"];
array_splice($department,0,1);
echo "<pre>";
print_r($department);
echo "</pre>";
echo "...................................................... <br>";
echo "Replacing two array element with different two array element using array_splice() function <br>";
$cricTeam=["Bangladesh","india"," Australia","England","Srilanka"];
$cricTeam1=["Newzeland","Pakistan"];
array_splice($cricTeam,1,2,$cricTeam1);
echo "<pre>";
print_r($cricTeam);
echo "</pre>";
echo "...........................................<br>";
$cricTeam01=["Bangladesh","india"," Australia","England","Srilanka"];
$cricTeam02=["Newzeland","Pakistan"];
echo "Removing array elements from the fixed position and then adding new elements in the array <br> ";
array_splice($cricTeam01,1,count($cricTeam01),$cricTeam02);
echo "<pre>";
print_r($cricTeam01);
echo "</pre>";
echo "..................................................<br>";
echo "Without removing array elememts and adding new elements in the array <br>";
$cricTeam301=["Bangladesh","india"," Australia","England","Srilanka"];
$cricTeam302=["Newzeland","Pakistan","Windies"];
array_splice($cricTeam302,1,0,$cricTeam301);
echo "<pre>";
print_r($cricTeam302);
echo "</pre>";
echo "Without removing array elememts and adding new elements in the last position of the array <br>";
$cricTeam4301=["Bangladesh","india"," Australia","England","Srilanka"];
$cricTeam4302=["Newzeland","Pakistan","Windies"];
array_splice($cricTeam4301,count($cricTeam4301),0,$cricTeam4302);
echo "<pre>";
print_r($cricTeam4301);
echo "</pre>";


	?>


</body>
</html>