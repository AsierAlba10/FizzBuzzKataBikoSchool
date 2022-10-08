<?php

namespace Deg540\PHPTestingBoilerplate;

class FizzBuzz
{
    public function calculate(string $number): string
    {
        if($number % 3 == 0){
            return "Fizz";
        }

        return $number;
    }
}