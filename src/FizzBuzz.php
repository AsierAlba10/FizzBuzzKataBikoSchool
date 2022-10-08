<?php

namespace Deg540\PHPTestingBoilerplate;

class FizzBuzz
{
    public function calculate(string $number): string
    {
        if($number % 3 == 0 && $number % 5 == 0) {
            return "FizzBuzz";
        }

        if($number % 3 == 0 || str_contains($number, "3")) {
            return "Fizz";
        }

        if($number % 5 == 0) {
            return "Buzz";
        }

        return $number;
    }
}