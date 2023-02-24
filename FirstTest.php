<?php 

namespace Nourman\SimpleTest;

require_once __DIR__ . '/vendor/autoload.php';

use Nourman\SimpleTest\Constraint;

class FirstTest extends Test {

  public function test()
  {
    Assertions::assertEquals(5, 5, '');
  }

  public function testMustFail()
  {
    Assertions::assertEquals(4, 5, '');
  }

  public function testThird()
  {
    Assertions::assertEquals(1, 5, '');
  }
}

new FirstTest();
 ?>
