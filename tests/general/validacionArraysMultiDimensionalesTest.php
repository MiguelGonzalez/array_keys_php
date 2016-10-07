<?php 

require_once dirname(__FILE__) . '/../PHPTest_Unit.php';

class validacionArraysMultiDimensionalesTest extends PHPTest_Unit {

	public function testArrayMultidimensional() {
		$input = array(1=>1, "a"=>"b", "c"=> array(1, 2, 3), "d" => array("a" => "b"));

		$output = array_keys_php($input);
		$expected = array(1, "a", "c", "d");

		$this->assertEquals($expected, $output);
	}
}