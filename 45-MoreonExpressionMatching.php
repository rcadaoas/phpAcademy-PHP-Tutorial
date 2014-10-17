<?php

	function has_space($string){
		if(preg_match('/ /', $string)){
			return true;
		}
		else
		{

			return false;
		}
	}


	if(has_space('Thisdoesnothavespace'))
	{
		echo "Has at least one space";
	}
	else{
		echo "Has no space";
	}
?>