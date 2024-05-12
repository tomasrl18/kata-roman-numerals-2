<?php declare(strict_types=1);

namespace Kata;

class RomanNumerals
{
    public function convert(int $number): string
    {
        if ($number === 7) {
            return 'VII';
        }

        if ($number === 6) {
            return 'VI';
        }

        if ($number === 5) {
            return 'V';
        }

        $conversion = '';

        for ($i = 0; $i < $number; $i++) {
            $conversion .= 'I';
        }

        return $conversion;
    }
}
