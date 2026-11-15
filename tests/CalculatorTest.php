<?php

declare(strict_types=1);

namespace Relay\Tests;

use PHPUnit\Framework\TestCase;
use Relay\Calculator;

final class CalculatorTest extends TestCase
{
    public function testAddsTwoNumbers(): void
    {
        self::assertSame(5, Calculator::add(2, 3));
    }

    public function testFactorialOfZeroIsOne(): void
    {
        self::assertSame(1, Calculator::factorial(0));
    }

    public function testFactorialOfOneIsOne(): void
    {
        self::assertSame(1, Calculator::factorial(1));
    }

    public function testFactorialOfFiveIs120(): void
    {
        self::assertSame(120, Calculator::factorial(5));
    }

    public function testFactorialThrowsForNegativeInput(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        Calculator::factorial(-1);
    }
}
