<?php

require_once __DIR__.'/../src/Roman.php';

class RomanTest extends PHPUnit_Framework_TestCase {
	public function setUp()
	{
		$this->roman = new Roman();
	}
	public function test1()
	{
		$result = $this->roman->getResult(1);
		$this->assertEquals('I', $result);
	}
	public function test2()
	{
		$result = $this->roman->getResult(2);
		$this->assertEquals('II', $result);
	}
	public function test3()
	{
		$result = $this->roman->getResult(3);
		$this->assertEquals('III', $result);
	}
	public function test4()
	{
		$result = $this->roman->getResult(4);
		$this->assertEquals('IV', $result);
	}
	public function test5()
	{
		$result = $this->roman->getResult(5);
		$this->assertEquals('V', $result);
	}
	public function test6()
	{
		$result = $this->roman->getResult(6);
		$this->assertEquals('VI', $result);
	}
	public function test9()
	{
		$result = $this->roman->getResult(9);
		$this->assertEquals('IX', $result);
	}
	public function test15()
	{
		$result = $this->roman->getResult(15);
		$this->assertEquals('XV', $result);
	}
	public function test30()
	{
		$result = $this->roman->getResult(30);
		$this->assertEquals('XXX', $result);
	}
	public function test37()
	{
		$result = $this->roman->getResult(37);
		$this->assertEquals('XXXVII', $result);
	}

}