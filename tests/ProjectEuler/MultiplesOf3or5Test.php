<?php

namespace CodeKata\Tests\ProjectEuler;

use PHPUnit\Framework\TestCase;
use CodeKata\ProjectEuler\MultiplesOf3or5;

/**
 * https://projecteuler.net/problem=1
 * 
 * If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.
 * 
 * Find the sum of all the multiples of 3 or 5 below 1000.
 */
class MultiplesOf3or5Test extends TestCase
{
    /**
     * @dataProvider finalValue10
     */
    public function test_FinalValueShouldBe10(MultiplesOf3or5 $obj){
        self::assertEquals(10, $obj->getFinalValue());
    }

    /**
     * @dataProvider finalValue10
     */
    public function test_GetAllMultiplesBelow10(MultiplesOf3or5 $obj){
        self::assertCount(4, $obj->getAllMultiples());
        self::assertEquals(3, $obj->getAllMultiples()[0]);
        self::assertEquals(5, $obj->getAllMultiples()[1]);
        self::assertEquals(6, $obj->getAllMultiples()[2]);
        self::assertEquals(9, $obj->getAllMultiples()[3]);
    }

    /**
     * @dataProvider finalValue10
     */
    public function test_SumOfMultiplesBelow10(MultiplesOf3or5 $obj){
        self::assertEquals(23, $obj->getSumOfMultiples());
    }

    public function test_SumOfMultiplesBelow1000(){
        $obj = new MultiplesOf3or5(1000);
        self::assertEquals(233168, $obj->getSumOfMultiples());
    }

    public function finalValue10()
    {
        $obj = new MultiplesOf3or5(10);
        return [
            'final-value-10' => [$obj]
        ];
    }
}