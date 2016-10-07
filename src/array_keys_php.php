<?php
	

	 function array_keys_php ($array ,$search_value = null ,$strict = false) {

	 	function parametrosEntradaValidos($array , $search_value , $strict) {
	 		if(!is_array($array)) {
		 		$type = gettype($array);

	    		trigger_error('Warning: array_keys() expects parameter 1 to be array, ' .
	    				gettype($array) . ' given', E_USER_WARNING);

		 		return false;
		 	}

	 	}

	 	if(!parametrosEntradaValidos($array, $search_value, $strict)) {
	 		return null;
	 	}

	 	return null;
	 }