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

    // En teoría tocaría el 4. Pero, como es una excepción, ya que en vez de
    // añadir caracteres al final, los tenemos que añadir al principio.
    // Por lo que no creo que mi algoritmo sea lo suficientemente maduro
    // para trabajar con excepciones, no tengro un patrón todavía, necesito más información

    /** @test */
    public function given_5_then_return_V(): void
    {
        $xxx = new RomanNumerals();

        $result = $xxx->convert(5);

        self::assertEquals('V', $result);
    }

    /** @test */
    public function given_6_then_return_VI(): void
    {
        $xxx = new RomanNumerals();

        $result = $xxx->convert(6);

        self::assertEquals('VI', $result);
    }

    /** @test */
    public function given_7_then_return_VII(): void
    {
        $xxx = new RomanNumerals();

        $result = $xxx->convert(7);

        self::assertEquals('VII', $result);
    }

    /** @test */
    public function given_10_then_return_X(): void
    {
        $xxx = new RomanNumerals();

        $result = $xxx->convert(10);

        self::assertEquals('X', $result);
    }

    /** @test */
    public function given_12_then_return_XII(): void
    {
        $xxx = new RomanNumerals();

        $result = $xxx->convert(12);

        self::assertEquals('XII', $result);
    }

    /** @test */
    public function given_15_then_return_XV(): void
    {
        $xxx = new RomanNumerals();

        $result = $xxx->convert(15);

        self::assertEquals('XV', $result);
    }

    /** @test */
    public function given_18_then_return_XVIII(): void
    {
        $xxx = new RomanNumerals();

        $result = $xxx->convert(18);

        self::assertEquals('XVIII', $result);
    }

    /** @test */
    public function given_20_then_return_XX(): void
    {
        $xxx = new RomanNumerals();

        $result = $xxx->convert(20);

        self::assertEquals('XX', $result);
    }

    /** @test */
    public function given_23_then_return_XXIII(): void
    {
        $xxx = new RomanNumerals();

        $result = $xxx->convert(23);

        self::assertEquals('XXIII', $result);
    }

    /** @test */
    public function given_28_then_return_XXVIII(): void
    {
        $xxx = new RomanNumerals();

        $result = $xxx->convert(28);

        self::assertEquals('XXVIII', $result);
    }

    /** @test */
    public function given_30_then_return_XXX(): void
    {
        $xxx = new RomanNumerals();

        $result = $xxx->convert(30);

        self::assertEquals('XXX', $result);
    }

    /** @test */
    public function given_35_then_return_XXXV(): void
    {
        $xxx = new RomanNumerals();

        $result = $xxx->convert(35);

        self::assertEquals('XXXV', $result);
    }

    /** @test */
    public function given_38_then_return_XXXVIII(): void
    {
        $xxx = new RomanNumerals();

        $result = $xxx->convert(38);

        self::assertEquals('XXXVIII', $result);
    }

    /** @test */
    public function given_50_then_return_L(): void
    {
        $xxx = new RomanNumerals();

        $result = $xxx->convert(50);

        self::assertEquals('L', $result);
    }

    /** @test */
    public function given_58_then_return_LVIII(): void
    {
        $xxx = new RomanNumerals();

        $result = $xxx->convert(58);

        self::assertEquals('LVIII', $result);
    }

    /** @test */
    public function given_4_then_return_IV(): void
    {
        $xxx = new RomanNumerals();

        $result = $xxx->convert(4);

        self::assertEquals('IV', $result);
    }

    /** @test */
    public function given_9_then_return_IX(): void
    {
        $xxx = new RomanNumerals();

        $result = $xxx->convert(9);

        self::assertEquals('IX', $result);
    }

    /** @test */
    public function given_29_then_return_XXIX(): void
    {
        $xxx = new RomanNumerals();

        $result = $xxx->convert(29);

        self::assertEquals('XXIX', $result);
    }

    /** @test */
    public function given_80_then_return_LXXX(): void
    {
        $xxx = new RomanNumerals();

        $result = $xxx->convert(80);

        self::assertEquals('LXXX', $result);
    }

    /** @test */
    public function given_294_then_return_CCXCIV(): void
    {
        $xxx = new RomanNumerals();

        $result = $xxx->convert(294);

        self::assertEquals('CCXCIV', $result);
    }

    /** @test */
    public function given_2024_then_return_MMXXIV(): void
    {
        $xxx = new RomanNumerals();

        $result = $xxx->convert(2024);

        self::assertEquals('MMXXIV', $result);
    }
}
