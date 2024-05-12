<?php declare(strict_types=1);

namespace Kata;

class RomanNumerals
{
    public function convert(int $number): string
    {
        $conversion = '';

        for ($i = 0; $i < $number; $i++) {
            $conversion .= 'I';
        }

        return $conversion;

        /*if ($number === 3) {
            return 'III';
        }

        if ($number === 2) {
            return 'II';
        }

        return 'I';*/
    }
}
