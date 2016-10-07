<?php
	

	 function array_keys_php ($array, $search_value = null, $strict = false) {

	 	$validarParametrosEntrada = function() use ($array, $search_value, $strict) {
 			if(!is_array($array)) {
		 		$type = gettype($array);

	    		trigger_error('Warning: array_keys() expects parameter 1 to be array, ' .
	    				gettype($array) . ' given', E_USER_WARNING);

		 		return false;
		 	}

		 	return true;
 		};

	 	if(! $validarParametrosEntrada()) {
	 		return null;
	 	}

	 	$output = array();

	 	foreach($array as $key => $value) {
	 		// Si se pasa más de un parámetro se está realizando una búsqueda
	 		if(func_num_args() > 1) {
	 			if(!$strict && $array[$key] == $search_value) {
	 				array_push($output, $key);
	 			} else if($strict && $array[$key] === $search_value) {
	 				array_push($output, $key);
	 			}
	 		} else {
	 			array_push($output, $key);
	 		}
	 	}

	 	return $output;
	 }