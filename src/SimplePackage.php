<?php

namespace Anosovm\SimplePackage;

class SimplePackage
{

    public static function flipString(string $string): string
    {
        return strrev($string);
    }

    public static function stringLength(string $string, bool $withoutSpaces = false): int
    {
        if ($withoutSpaces) {
            $string = preg_replace('/\s+/', '', $string);
        }

        return mb_strlen($string);
    }

}
