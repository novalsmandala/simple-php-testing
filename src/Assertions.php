<?php 

namespace Nourman\SimpleTest;

use Nourman\SimpleTest\Constraint\IsEquals;

class Assertions {

	public static function assertEquals(mixed $expected = 1, mixed $actual = 0, string $message = '') {
		$isEqual = new IsEquals($expected, $actual, debug_backtrace()[1]['function']);
		$isEqual->getResult();
	}
}

 ?>