<?php declare(strict_types=1);

namespace Kata;

class RomanNumerals
{
    public function convert(int $number): string
    {
        $conversion = '';

        if ($number === 10) {
            return 'X';
        }

        if ($number >= 5) {
            $conversion .= 'V';
            $number -= 5;
        }

        for ($i = 0; $i < $number; $i++) {
            $conversion .= 'I';
        }

        return $conversion;
    }
}
