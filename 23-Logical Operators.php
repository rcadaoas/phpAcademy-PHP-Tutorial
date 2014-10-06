<?php
$upper = 1000;
$lower = 500;
$number =444;
// && AND = and logical operator
// || OR = or logical operator
if($number>=$lower && $number<=$upper ){

	echo "Ok.";
}
else{
	echo 'Number must be between '.$lower.' and '.$upper; 

}

$number2 = 400;

$canbe1 = 2;
$canbe2 = 4;

if($number2 == $canbe1 || $number2==$canbe2)
{
	echo 'Ok.';
}
else{
	echo 'Not Ok.';
}

?>

