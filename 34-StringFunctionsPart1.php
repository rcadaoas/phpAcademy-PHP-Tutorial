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
	$strreverse = strrev($string4);
	//echo $strreverse;

	//Checking the similiraty of text using similar_text function
	$string_one = 'This is my essay. I\'m going to be talking about php.';
	$string_two = 'This is my essay. I wiil be talking about the subject php.';

	similar_text($string_one, $string_two,$result);
	// echo 'The similarity is '.$result;

	//get the length of string 
	$string5 = 'This is an example string.';
	$string_length = strlen($string5);
	// echo $string_length;

	//Trimming Text - trim,ltrim,rtrim
	$string5 = ' This is an example string. ';
	$string_trimmed = trim($string5); //remove space on both side
    $string_rtrimmed = rtrim($string5); //remove space of right side
    $string_ltrimmed = ltrim($string5); //remove space on left side
	//echo $string_trimmed;

	//add slashes
	$string5 = ' This is a <img src="image.jpg"> string. ';
	$string_slashes = htmlentities(addslashes($string5));

	echo $string_slashes;
	echo stripslashes($string_slashes);
?>