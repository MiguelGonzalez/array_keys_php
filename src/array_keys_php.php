<?php

/**
 * This file contain the array_keys implementation in PHP
 *
 *
 * Copyright (c) 2016 Miguel
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * @category   PHP
 * @author     Miguel <miguelgonzalezgomez@gmail.com>
 * @copyright  2016
 * @license    https://opensource.org/licenses/MIT
 * @link       https://github.com/MiguelGonzalez/array_keys_php
 */

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