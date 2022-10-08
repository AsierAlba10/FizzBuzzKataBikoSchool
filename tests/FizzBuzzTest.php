<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * @test
     **/
    public function given1Returns1()
    {
        $fizzBuzz = new FizzBuzz();

        $response = $fizzBuzz->calculate("1");

        $this->assertEquals("1", $response);
    }

    /**
     * @test
     **/
    public function given2Returns2()
    {
        $fizzBuzz = new FizzBuzz();

        $response = $fizzBuzz->calculate("2");

        $this->assertEquals("2", $response);
    }

    /**
     * @test
     **/
    public function given3ReturnsFizz()
    {
        $fizzBuzz = new FizzBuzz();

        $response = $fizzBuzz->calculate("3");

        $this->assertEquals("Fizz", $response);
    }



}