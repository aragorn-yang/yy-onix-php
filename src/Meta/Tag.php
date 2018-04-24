<?php

namespace AragornYang\Onix\Meta;

class Tag
{
    public static function isValid(string $name): bool
    {
        return array_key_exists($name, RefNameToShortTag::COLLECTION);
    }
}