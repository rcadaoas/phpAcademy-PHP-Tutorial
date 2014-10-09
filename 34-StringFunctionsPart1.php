<?php
	$string = 'This is an example string & this is a tutorial .';
	//Word count function
	$string_word_count =  str_word_count($string);
	$string_word_count1 =  str_word_count($string,1); //converts a string into an array
	$string_word_count2 =  str_word_count($string,2); //will display the Position of the word
	$string_word_count3 =  str_word_count($string,1, '&.'); //include special character as a word

	// echo $string_word_count;
	// print_r($string_word_count1);
	// print_r($string_word_count2);
	// print_r($string_word_count3);

	//Word Shuffle function
	$string2 = 'This is an example string.';
	$string_shuffled = str_shuffle($string2);

	// echo $string_shuffled;

	$string3 = 'abcdefghijklmnopqrstuvwxyz1234567890';
	$string_shuffled2 = str_shuffle($string3);

	// echo $string_shuffled2;

	//substr function or truncate string
	$five = substr($string_shuffled2, 0,4 );
	$half = substr($string_shuffled2, 0,strlen($string_shuffled2)/2 );

	// echo $half;

	//Reverse string
	$string4 = 'This is an example string.';
	$strreverse = str_reverse($string4);
	echo $strreverse;



?>