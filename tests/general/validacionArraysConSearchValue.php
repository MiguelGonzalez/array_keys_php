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

	public function testSearchStringNoStrict() {
		$input = array(1=>1, 2=>2, array());

		$output = array_keys_php($input, 'a', false);
		$expected = array();

		$this->assertEquals($expected, $output);
	}

	public function testSearchStringStrict() {
		$input = array(1=>1, 2=>2, array(), 'a');

		$output = array_keys_php($input, 'a', true);
		$expected = array(4);

		$this->assertEquals($expected, $output);
	}

	public function testSearchArrayNoStrict() {
		$input = array(1=>1, 2=>2, array(), 'a');

		$output = array_keys_php($input, array(), false);
		$expected = array(3);

		$this->assertEquals($expected, $output);
	}

	public function testSearchArrayConValorNoStrict() {
		$input = array(1=>1, 2=>2, array(), 'a');

		$output = array_keys_php($input, array(1), false);
		$expected = array();

		$this->assertEquals($expected, $output);
	}

	public function testSearchArrayConValorNoStrictDos() {
		$input = array(1=>1, 2=>2, array(1), 'a');

		$output = array_keys_php($input, array(1), false);
		$expected = array(3);

		$this->assertEquals($expected, $output);
	}
}