<?php

namespace Deg540\PHPTestingBoilerplate;

class FizzBuzz
{
    const FIZZ_BUZZ = "FizzBuzz";
    const FIZZ = "Fizz";
    const BUZZ = "Buzz";

    public function calculate(string $number): string
    {
        if($this->divisibleByTwoNumbers($number)) {
            return self::FIZZ_BUZZ;
        }

        if($this->divisibleByThree($number) || str_contains($number, "3")) {
            return self::FIZZ;
        }

        if($this->divisibleByFive($number) || str_contains($number, "5")) {
            return self::BUZZ;
        }

        return $number;
    }

    private function divisibleByTwoNumbers(string $numberToAnalyze): bool
    {
        return $numberToAnalyze % 3 == 0 && $numberToAnalyze % 5 == 0;
    }

    private function divisibleByThree(string $numberToAnalyze): bool
    {
        return $numberToAnalyze % 3 == 0;
    }

    private function divisibleByFive(string $numberToAnalyze): bool
    {
        return $numberToAnalyze % 5 == 0;
    }
}