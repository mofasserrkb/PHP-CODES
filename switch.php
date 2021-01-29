<!DOCTYPE html>
<html>
<head>
	<title>Switch statement</title>
</head>
<body>
<?php	
/*
The PHP switch Statement
Use the switch statement to select one of many blocks of code to be executed.

Syntax
switch (n) {
  case label1:
    code to be executed if n=label1;
    break;
  case label2:
    code to be executed if n=label2;
    break;
  case label3:
    code to be executed if n=label3;
    break;
    ...
  default:
    code to be executed if n is different from all labels;
}
This is how it works: First we have a single expression n (most often a variable), that is evaluated once. The value of the expression is then compared with the values for each case in the structure. If there is a match, the block of code associated with that case is executed. Use break to prevent the code from running into the next case automatically. The default statement is used if no match is found.

*/
$num=24;
switch ($num%2) {
	case 0:
		echo "This is even number <br>";
		break;
	
	default:
		echo "This is odd number <br>";
		
}

$favcolor="Green";
switch ($favcolor) {
	case 'Red':
		# code...
	   echo "My favourite color is Red";
		break;
	case 'Green':
	echo "My favourite color is Green";
	break;
	case 'Yellow':
	echo "My favourite color is yellow";
	break;

	default:
		# code...
	echo "I have no favourite color";
}

?>
</body>
</html>