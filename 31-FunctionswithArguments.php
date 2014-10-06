<?php

	$num1 = 10;
	$num2 = 5;
	function add($number1,$number2){
		echo $number1 + $number2;
	}

	add($num1,$num2);


	function displayDate($day,$date,$year){

		echo '<br>'.$day.' '.$date.' '.$year;
	}

	displayDate('Monday',31,2011);
?>