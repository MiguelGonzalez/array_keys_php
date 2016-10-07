<?php 

require_once dirname(__FILE__) . '/../PHPTest_Unit.php';

class validacionArraysAsociativosTest extends PHPTest_Unit {

	public function testArrayAsociativoNumeros() {
		$input = array(1=>1, 2=>2, 3=>3);

		$output = array_keys_php($input);
		$expected = array(1, 2, 3);

		$this->assertEquals($expected, $output);
	}

	public function testArrayAsociativoLetras() {
		$input = array('a'=>1, 'b'=>'b', 'c'=>3);

		$output = array_keys_php($input);
		$expected = array('a', 'b', 'c');

		$this->assertEquals($expected, $output);
	}
/*
	public function testArrayAsociativoMixed() {
		$input = array('a'=>1, 2=>2, 'c'=>3);

		$output = array_keys_php($input);
		$expected = array('a', 2, 'c');

		$this->assertEquals($expected, $output);
	}*/
}