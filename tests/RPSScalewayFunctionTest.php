<?php
namespace rpsimao\RPSScaleway\Test;

require_once __DIR__.'/TestCase.php';

use Scaleway;


class RPSScalewayFunctionTest extends TestCase
{
	/**
	 * Check that the multiply method returns correct result
	 * @return void
	 */
	public function testMultiplyReturnsCorrectValue()
	{
		$this->assertSame(Scaleway::getServers(), new \stdClass());

	}
}