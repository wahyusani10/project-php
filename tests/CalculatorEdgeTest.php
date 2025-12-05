<?php
use PHPUnit\Framework\TestCase;
require __DIR__ . '/../src/Calculator.php';

class CalculatorEdgeTest extends TestCase
{
    public function testAddWithNegatives()
    {
        $c = new Calculator();
        $this->assertEquals(0, $c->add(2, -2));
    }
}
