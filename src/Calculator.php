<?php

declare(strict_types=1);

namespace Relay;

final class Calculator
{
    public static function add(int $left, int $right): int
    {
        return $left + $right;
    }

    public static function factorial(int $n): int
    {
        if ($n < 0) {
            throw new \InvalidArgumentException('Factorial is undefined for negative numbers.');
        }

        $result = 1;
        for ($i = 2; $i <= $n; $i++) {
            $result *= $i;
        }

        return $result;
    }
}
