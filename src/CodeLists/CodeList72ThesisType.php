<?php

namespace AragornYang\Onix\CodeLists;

class CodeList72ThesisType extends CodeList
{
    public const KEY = 'ThesisType';

    protected const MAPPING = [
        // Professorial dissertation (thesis for postdoctoral lecturing qualification)
        "01" => "Habilitationsschrift",
        // Doctoral thesis
        "02" => "Dissertationsschrift",
        // State examination thesis
        "03" => "Staatsexamensarbeit",
        // Magisters degree thesis
        "04" => "Magisterarbeit",
        // Diploma degree thesis
        "05" => "Diplomarbeit",
        // Bachelors degree thesis
        "06" => "Bachelorarbeit",
        // Masters degree thesis
        "07" => "Masterarbeit",
    ];
}