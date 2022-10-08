<?php

namespace Deg540\PHPTestingBoilerplate;

class FizzBuzz
{
    const FIZZ_BUZZ = "FizzBuzz";
    const FIZZ = "Fizz";
    const BUZZ = "Buzz";


    public function calculate(string $number): string
    {
        if($this->divisibleByThreeAndByFive($number)) {
            return self::FIZZ_BUZZ;
        }

        if($this->divisibleByThreeOrContainsAThree($number)) {
            return self::FIZZ;
        }

        if($this->divisibleByFiveOrContainsAFive($number)) {
            return self::BUZZ;
        }

        return $number;
    }

    private function divisibleByThreeAndByFive(string $numberToAnalyze): bool
    {
        return $numberToAnalyze % 3 == 0 && $numberToAnalyze % 5 == 0;
    }

    private function divisibleByThreeOrContainsAThree(string $numberToAnalyze): bool
    {
        return $numberToAnalyze % 3 == 0 || str_contains($numberToAnalyze, "3");
    }

    private function divisibleByFiveOrContainsAFive(string $numberToAnalyze): bool
    {
        return $numberToAnalyze % 5 == 0 || str_contains($numberToAnalyze, "5");
    }
}