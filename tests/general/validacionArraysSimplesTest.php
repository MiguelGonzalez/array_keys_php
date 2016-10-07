<?php 

require_once dirname(__FILE__) . '/../PHPTest_Unit.php';

class validacionArraysSimplesTest extends PHPTest_Unit {

	public function testArrayVacio() {
		$input = array();

		$output = array_keys_php($input);

		$this->assertEquals($input, $output);
	}

	public function testArrayNumeros() {
		$input = array(1, 2, 3);

		$output = array_keys_php($input);

		$this->assertEquals($input, $output);
	}

	public function testArrayCadenas() {
		$input = array('a', 'b', 'c');

		$output = array_keys_php($input);

		$this->assertEquals($input, $output);
	}

	public function testArrayMixed() {
		$input = array('a', 2, 'c');

		$output = array_keys_php($input);

		$this->assertEquals($input, $output);
	}
}