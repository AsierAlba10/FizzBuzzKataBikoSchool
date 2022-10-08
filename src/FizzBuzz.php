<?php

namespace Deg540\PHPTestingBoilerplate;

class FizzBuzz
{
    const FIZZ_BUZZ = "FizzBuzz";
    const FIZZ = "Fizz";
    const BUZZ = "Buzz";
    const FIZZ_NUMBER = "3";
    const BUZZ_NUMBER = "5";


    public function calculate(string $number): string
    {
        if($this->divisibleByTheFizzBuzzNumbers($number)) {
            return self::FIZZ_BUZZ;
        }

        if($this->isFizz($number)) {
            return self::FIZZ;
        }

        if($this->isBuzz($number)) {
            return self::BUZZ;
        }

        return $number;
    }

    public function divisibleByTheFizzBuzzNumbers(string $numberToAnalyze): bool
    {
        return $numberToAnalyze % self::FIZZ_NUMBER == 0 && $numberToAnalyze % self::BUZZ_NUMBER == 0;
    }

    public function isFizz(string $numberToAnalyze): bool
    {
        return $this->numberIsDivisibleByFizzNumber($numberToAnalyze) || $this->numberContainsTheFizzNumber($numberToAnalyze);
    }

    public function isBuzz(string $numberToAnalyze): bool
    {
        return $this->numberIsDivisibleByBuzzNumber($numberToAnalyze) || $this->numberContainsTheBuzzNumber($numberToAnalyze);
    }

    private function numberIsDivisibleByFizzNumber(string $numberToAnalyze): bool
    {
        return $numberToAnalyze % self::FIZZ_NUMBER == 0;
    }

    private function numberContainsTheFizzNumber(string $numberToAnalyze): bool
    {
        return str_contains($numberToAnalyze, self::FIZZ_NUMBER);
    }

    private function numberIsDivisibleByBuzzNumber(string $numberToAnalyze): bool
    {
        return $numberToAnalyze % self::BUZZ_NUMBER == 0;
    }

    private function numberContainsTheBuzzNumber(string $numberToAnalyze): bool
    {
        return str_contains($numberToAnalyze, self::BUZZ_NUMBER);
    }
}