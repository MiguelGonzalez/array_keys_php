<?php 

require_once dirname(__FILE__) . '/../PHPTest_Unit.php';

class existeFuncionTest extends PHPTest_Unit {

	public function testExisteFuncion() {
		$this->assertEquals(true, function_exists("array_keys_php"));
	}
}