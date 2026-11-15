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
}
