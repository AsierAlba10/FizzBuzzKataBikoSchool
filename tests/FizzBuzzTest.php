<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    private FizzBuzz $fizzBuzz;
    /**
     * @setUp
     **/
    protected function setUp(): void
    {
        parent::setUp();

        $this->fizzBuzz = new FizzBuzz();
    }

    /**
     * @test
     **/
    public function givenOneNumberThatNoIsDivisibleByThreeAndByFiveReturnsTheSameNumber()
    {
        $response = $this->fizzBuzz->calculate("1");

        $this->assertEquals("1", $response);
    }

    /**
     * @test
     **/
    public function givenOneNumberDivisibleByThreeReturnsFizz()
    {
        $response = $this->fizzBuzz->calculate("3");

        $this->assertEquals("Fizz", $response);
    }

    /**
     * @test
     **/
    public function givenOneNumberDivisibleByFiveReturnsBuzz()
    {
        $response = $this->fizzBuzz->calculate("5");

        $this->assertEquals("Buzz", $response);
    }

    /**
     * @test
     **/
    public function givenOneNumberDivisibleByThreeAndByFiveReturnsFizzBuzz()
    {
        $response = $this->fizzBuzz->calculate("15");

        $this->assertEquals("FizzBuzz", $response);
    }

    /**
     * @test
     **/
    public function givenOneNumberOnHisNameHaveAThreeNumberReturnsFizz()
    {
        $response = $this->fizzBuzz->calculate("33");

        $this->assertEquals("Fizz", $response);
    }

    /**
     * @test
     **/
    public function givenOneNumberOnHisNameHaveAFiveNumberReturnsBuzz()
    {
        $response = $this->fizzBuzz->calculate("52");

        $this->assertEquals("Buzz", $response);
    }
}