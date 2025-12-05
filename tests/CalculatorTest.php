<?php
use PHPUnit\Framework\TestCase;
require __DIR__ . '/../src/Calculator.php';
class CalculatorTest extends TestCase {
    public function testAdd() {
        $calc = new Calculator();
        $this->assertEquals(8, $calc->add(5,3));
    }
}
