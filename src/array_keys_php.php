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

	/* Funciones anónimas de ayuda */

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

	$seEstaRealizandoUnaBusqueda = function($numArgumentos) {
		return $numArgumentos > 1;
	};

	$esIgualValorBusqueda = function($valor) use ($search_value, $strict) {
		if(!$strict && $valor == $search_value) {
			return true;
		} else if($strict && $valor === $search_value) {
			return true;
		}

		return false;
	};

	/* Implementación */ 

	if(! $validarParametrosEntrada()) {
 		return null;
 	}

 	$output = array();

 	foreach($array as $key => $value) {
 		if($seEstaRealizandoUnaBusqueda(func_num_args()) ) {
 			if($esIgualValorBusqueda($array[$key])) {
				$output[] =  $key;
 			}
 		} else {
 			$output[] =  $key;
 		}
 	}

 	return $output;
}