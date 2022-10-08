<?php

namespace Deg540\PHPTestingBoilerplate;

class FizzBuzz
{
    const FIZZ_BUZZ = "FizzBuzz";
    const FIZZ = "Fizz";
    const BUZZ = "Buzz";

    public function calculate(string $number): string
    {
        if($number % 3 == 0 && $number % 5 == 0) {
            return self::FIZZ_BUZZ;
        }

        if($number % 3 == 0 || str_contains($number, "3")) {
            return self::FIZZ;
        }

        if($number % 5 == 0 || str_contains($number, "5")) {
            return self::BUZZ;
        }

        return $number;
    }
}