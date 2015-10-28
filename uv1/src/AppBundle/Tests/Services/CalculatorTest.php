<?php

namespace AppBundle\Tests\Controller;

use AppBundle\Services\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function testCalculator()
    {
        $a = new Calculator();
        $var1=1;
        $var2=2;

        // Act
        $b = $a->makeSum($var1,$var2);

        // Asserting error
        $this->assertEquals(3,$b);
        $this->assertNotEquals(5,$b);
    }
}