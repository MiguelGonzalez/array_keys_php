<?php 

require_once dirname(__FILE__) . '/../PHPTest_Unit.php';

class validacionParametrosEntradaTest extends PHPTest_Unit {

	/**
	 * @expectedException PHPUnit_Framework_Error_Warning
	*/
	public function testLanzarErrorSiNoHayParametros() {
		array_keys_php();
	}

	/**
	 * @expectedException PHPUnit_Framework_Error_Warning
	*/
	public function testLanzarErrorSiPrimerParametroNoEsArray() {
		array_keys_php(null);
		array_keys_php("");
	}

	/**
	 * @expectedException PHPUnit_Framework_Error_Warning
	*/
	public function testLanzarErrorSiTercerParametroNoEsArray() {
		array_keys_php(array(), null, array());
	}
}