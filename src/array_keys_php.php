<?php
	
/**
  * Return all the keys or a subset of the keys of an array
  *
  * @param array $array Input array
  * @param mixed $search_value Value to search for
  * @param boolean $strict Do strict comparison
  *
  * @return array Return just the keys from the input array, optionally only for the specified search_value
*/
function array_keys_php($array, $search_value = null, $strict = false) {

 	$validarParametrosEntrada = function() use ($array, $search_value, $strict) {
		if(!is_array($array)) {
    		trigger_error('Warning: array_keys() expects parameter 1 to be array, ' .
    				gettype($array) . ' given', E_USER_WARNING);

	 		return false;
	 	}

	 	if(!is_bool($strict)) {
    		trigger_error('Warning: array_keys() expects parameter 3 to be boolean, ' .
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
 		/* Si se pasa más de un parámetro se está realizando una búsqueda */
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