<?php

namespace AragornYang\Onix\CodeLists;

class CodeList216Velocity extends CodeList
{
    public const KEY = 'Velocity';

    protected const MAPPING = [
        // Typically measured over most recent 1 month period
        "01" => "Mean daily sale",
        // Typically measured over most recent 1 month period
        "02" => "Maximum daily sale",
        // Typically measured over most recent 1 month period
        "03" => "Minimum daily sale",
        // Typically measured over most recent rolling 12 week period
        "04" => "Mean weekly sale",
        // Typically measured over most recent rolling 12 week period
        "05" => "Maximum weekly sale",
        // Typically measured over most recent rolling 12 week period
        "06" => "Minimum weekly sale",
        // Typically measured over most recent rolling 6 month period
        "07" => "Mean monthly sale",
        // Typically measured over the most recent rolling 6 month period
        "08" => "Maximum monthly sale",
        // Typically measured over the most recent rolling 6 month period
        "09" => "Minimum monthly sale",
    ];
}