<?php
	require_once('app/Calculator.php');
	class CalculatorTest extends PHPUnit_Framework_TestCase
{
	private $calc=null;

	public function setUp(){
		$this->calc = new Calculator();
	}
	public function tearDown(){}
	public function testSumaCorrecta(){
		$this->assertEquals(4,$this->calc->suma(2,2));
	}
	public function testSumaIncorrecta(){
		$this->assertEquals(4,$this->calc->suma(3,1));
	}
	public function testRestaCorrecta(){
		$this->assertEquals(4,$this->calc->resta(8,4));
	}
	public function testRestaNegativos(){
		$this->assertEquals(0,$this->calc->resta(-2,-2));
	}
	public function testMultiplicacionCorrecta(){
		$this->assertEquals(8,$this->calc->multiplicar(4,2));
	}
	public function testMultipliacionNegativos(){
		$this->assertEquals(-16,$this->calc->multiplicar(8,-2));
	}
	public function testDivisionCorrecta(){
		$this->assertEquals(4,$this->calc->dividir(8,2));
	}
	public function testDivisionIncorrecta(){
		$this->assertEquals(2,$this->calc->dividir(20,10));
	}
}
?>
