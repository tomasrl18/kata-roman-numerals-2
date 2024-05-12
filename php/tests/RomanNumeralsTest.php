<?php declare(strict_types=1);

namespace KataTests;

use Kata\RomanNumerals;
use PHPUnit\Framework\TestCase;

class RomanNumeralsTest extends TestCase
{
    /** @test */
    public function given_1_then_return_I(): void
    {
        $xxx = new RomanNumerals();

        $result = $xxx->convert(1);

        self::assertEquals('I', $result);
    }

    /** @test */
    public function given_2_then_return_II(): void
    {
        $xxx = new RomanNumerals();

        $result = $xxx->convert(2);

        self::assertEquals('II', $result);
    }

    /** @test */
    public function given_3_then_return_III(): void
    {
        $xxx = new RomanNumerals();

        $result = $xxx->convert(3);

        self::assertEquals('III', $result);
    }
}
