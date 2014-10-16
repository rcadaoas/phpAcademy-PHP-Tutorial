<?php
	$food = array('Healthy'=>array('Salad','Vegetables','Pasta') //Multi Dimensional Array

				,'UnHealthy'=>array('Pizza','Ice Cream'));
	
	//foreach statement will loop through the elements of an array
	foreach ($food as $element => $inner_array) {
		echo $element.'<br/>';
		foreach ($inner_array as $item ) {
			echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$item.'<br/>';
		}
	}

?>