<?php 

require_once dirname(__FILE__) . '/../PHPTest_Unit.php';

class validacionArraysConSearchValue extends PHPTest_Unit {

	public function testSearchValueNull() {
		$input = array(1=>1, 2=>2, array());

		$output = array_keys_php($input, null);
		$expected = array(3);

		$this->assertEquals($expected, $output);
	}

	public function testSearchValueNullStrict() {
		$input = array(1=>1, 2=>2, array());

		$output = array_keys_php($input, null, true);
		$expected = array();

		$this->assertEquals($expected, $output);
	}
}