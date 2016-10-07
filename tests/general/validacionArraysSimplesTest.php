<?php 

require_once dirname(__FILE__) . '/../PHPTest_Unit.php';

class validacionArraysSimplesTest extends PHPTest_Unit {

	public function testArrayVacio() {
		$input = array();

		$output = array_keys_php($input);

		$this->assertEquals($input, $output);
	}

}