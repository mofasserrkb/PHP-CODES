<!DOCTYPE html>
<html>
<head>
	<title>list() function </title>
</head>
<body>
<?php
/*
Definition and Usage
The list() function is used to assign values to a list of variables in one operation.

Note: Prior to PHP 7.1, this function only worked on numerical arrays.

Syntax
list(var1, var2, ...)
Parameter Values
Parameter	Description
var1	Required. The first variable to assign a value to
var2,...	Optional. More variables to assign values to
Technical Details
Return Value:	Returns the assigned array

*/
$club=["Real madrid","Ac milan","Bayern munich","Liverpool","Barcelona"];
list($a,$b,$c,$d,$e)=$club;
echo "The value of a=".$b."<br>";
echo "The value of b= $b <br>";
echo "The value of c= $c <br>";
echo "The value of d= ".$d."<br>";
echo "The value of e=".$e."<br>";
echo ".....................................................<br>";
echo "using list() function for associative array with numeric keys<br>";
$club1= [0=>"Arsenal",1=>"Juventus",2=>"Inter milan",3=>"Napoli",4=>"Valencia"];
list($i,$j,$k,$l)=$club1;
echo "The value of first position=".$i."<br>";
echo "The value of second position=$j<br>";
echo "The value of third position=".$k."<br>";
echo "The value of fourth position=$l<br>";
echo ".......................................................<br>";
echo "Because of undefined offset number four and number five value will not be printed.<br>";
$club11= [0=>"Arsenal",2=>"Juventus",3=>"Inter milan",143=>"Napoli","team"=>"Valencia"];
list($i1,$j1,$k1,$l1,$t1)=$club11;
echo "The value of first position=".$i1."<br>";
echo "The value of second position=$j1<br>";
echo "The value of third position=".$k1."<br>";
echo "The value of fourth position=$l1<br>";
echo "The value of fifth position=".$t1."<br>";
echo ".......................................................<br>";
$color=[0=>"red",1=>"green",2=>"blue"];
list($r, ,$t)=$color;
echo "First color =$r<br>";
echo "Second color=".$t."<br>";
echo "..........................................................<br>";
$color1=["pink","yellow","megenda"];
list($n[0],$n[1],$n[2])=$color1;
echo "first color=$n[0]<br>";
echo "second color=".$n[1]."<br>";
echo "third color=".$n[2]."<br>";
echo "............................................................<br>";
$num=[234,7880,345];
list($g,$h,$i)=$num;
echo "first number=$g<br>";
echo "second number=".$h."<br>";
echo "third number=".$i."<br>";
echo ".................................................................<br>";





?>
</body>
</html>