<!DOCTYPE html>
<html>
<head>
	<title>function with return value</title>
</head>
<?php
//function with return value
function even($a,$b)
{
     if($a%$b==0)
     {
     	return $a;
     }
}
  $d=even(10,2);
  echo $d." is a even number<br>";
  function add($t,$y)
  {
  	return $t+$y;
  }

 $h=add(56,89);
 echo $h." Answer<br>";
 function odd1($k,$x)
 {
 
 	if($k%$x !=0)
 	{

 		return $k;
 	}
 
}
 $m= odd1(65,2);
echo $m." is a odd number<br>";
function total($math,$science,$English)
{
	 $s=$math+$science+$English;
	 return $s;
}
function avar($c)
{
   $i= $c/3;
   return $i;
}




  $f=total(80,88,75);
   $A=avar($f);
   echo "Final result".$A;


?>




</body>
</html>