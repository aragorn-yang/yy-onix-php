<?php

namespace AragornYang\Onix\CodeLists;

use AragornYang\Onix\Onix;

abstract class CodeList
{
    protected const MAPPING = [];
    public const KEY = '';

    public static function translate(string $value): string
    {
        if (!$value) {
            return '';
        }
        if (!static::validate($value)) {
            return '';
        }
        return static::MAPPING[$value] ?? '';
    }

    public static function validate(string $value): bool
    {
        return array_key_exists($value, static::MAPPING);
    }

    public static function addToUnrecognisable(string $value): void
    {
        Onix::getInstance()->addUnrecognisableCode(static::KEY, $value);
    }
}