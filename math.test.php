<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once 'math.php';

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function testDivisorValue1()
    {
        $testArray = array(1,2,17,34);
        $this->assertArraySimilar($testArray, getDivisors(34));
    }

    public function testDivisorValue2()
    {
        $testArray = array(1,5);
        $this->assertArraySimilar($testArray, getDivisors(5));
    }

    public function testGcdValue1()
    {
        $this->assertEquals(2, getGcd(4, 6, 8, 10));
    }

    public function testGcdValue2()
    {
        $this->assertEquals(5, getGcd(10, 15, 20, 50));
    }

    protected function assertArraySimilar(array $expected, array $array)
    {
        $this->assertTrue(count(array_diff_key($array, $expected)) === 0);

        foreach ($expected as $key => $value) {
            if (is_array($value)) {
                $this->assertArraySimilar($value, $array[$key]);
            } else {
                $this->assertContains($value, $array);
            }
        }
    }
}