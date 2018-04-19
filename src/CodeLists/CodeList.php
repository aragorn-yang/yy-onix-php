<?php

namespace AragornYang\Onix\CodeLists;

abstract class CodeList
{
    protected const MAPPING = [];

    public static function translate(string $value): ?string
    {
        return static::MAPPING[$value] ?? null;
    }
}