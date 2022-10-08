<?php

namespace Deg540\PHPTestingBoilerplate;

class FizzBuzz
{
    public function calculate(string $number): string
    {
        if($number == "1") {
            return "1";
        }

        if($number == "2") {
            return "2";
        }

        return "Fizz";
    }
}