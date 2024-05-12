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
}
