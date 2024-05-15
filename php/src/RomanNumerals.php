<?php declare(strict_types=1);

namespace Kata;

class RomanNumerals
{
    public function convert(int $number): string
    {
        $conversion = '';

        $romanNumerals = [
            1000 => 'M',
            900  => 'CM',
            500  => 'D',
            400  => 'CD',
            100  => 'C',
            90   => 'XC',
            50   => 'L',
            40   => 'XL',
            10   => 'X',
            9    => 'IX',
            5    => 'V',
            4    => 'IV',
            1    => 'I'
        ];

        foreach ($romanNumerals as $value => $roman) {
            while ($number >= $value) {
                $conversion .= $roman;
                $number -= $value;
            }
        }

        return $conversion;
    }
}


