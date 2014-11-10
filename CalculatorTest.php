<?php
	require_once('Calculator.php');
	class CalculatorTest extends PHPUnit_Framework_TestCase
{
	public function setUp(){}
	public function tearDown(){}
	public function testSumaCorrecta(){
		$calc = new Calculator();
		$this->assertEquals(4,$calc->suma(2,2));
	}
	public function testSumaIncorrecta(){
		$calc = new Calculator();
		$this->assertEquals(4,$calc->suma(2,1));
	}
	public function testRestaCorrecta(){
		$calc = new Calculator();
		$this->assertEquals(4,$calc->resta(8,4));
	}
	public function testRestaNegativos(){
		$calc = new Calculator();
		$this->assertEquals(0,$calc->resta(-2,-2));
	}
	public function testMultiplicacionCorrecta(){
		$calc = new Calculator();
		$this->assertEquals(8,$calc->multiplicar(4,2));
	}
	public function testMultipliacionNegativos(){
		$calc = new Calculator();
		$this->assertEquals(-16,$calc->multiplicar(8,-2));
	}
	public function testDivisionCorrecta(){
		$calc = new Calculator();
		$this->assertEquals(4,$calc->dividir(8,2));
	}
	public function testDivisionIncorrecta(){
		$calc = new Calculator();
		$this->assertEquals(5,$calc->dividir(20,10));
	}
}
?>
