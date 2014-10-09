<?php
	$string = 'This is an example string .';
	$string_word_count =  str_word_count($string);
	$string_word_count1 =  str_word_count($string,1); //converts a string into an array
	$string_word_count2 =  str_word_count($string,2); //will display the Position of the word
	$string_word_count3 =  str_word_count($string,1, '.');

	echo $string_word_count;
	print_r($string_word_count1);
	print_r($string_word_count2);
	print_r($string_word_count3);



?>