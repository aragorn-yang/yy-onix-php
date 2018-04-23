<?php

namespace AragornYang\Onix\CodeLists;

class CodeList172CurrencyZone extends CodeList
{
    public const KEY = 'CurrencyZone';

    protected const MAPPING = [
        // Countries that at the time being have the Euro as their national currency. Deprecated
        "EUR" => "Eurozone",
    ];
}