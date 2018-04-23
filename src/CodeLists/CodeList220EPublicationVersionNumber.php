<?php

namespace AragornYang\Onix\CodeLists;

class CodeList220EPublicationVersionNumber extends CodeList
{
    public const KEY = 'EPublicationVersionNumber';

    protected const MAPPING = [
        // Use only with <ProductFormDetail> codes E101 or E102
        "101A" => "EPUB 2.0.1",
        // Use only with <ProductFormDetail> code E101
        "101B" => "EPUB 3.0",
        // Use only with <ProductFormDetail> code E101
        "101C" => "EPUB 3.0.1",
        // Use only with <ProductFormDetail> code E101
        "101D" => "EPUB 3.1",
        // Use only with <ProductFormDetail> codes E116 or E127
        "116A" => "Kindle mobi 7",
        // Use only with <ProductFormDetail> code E116
        "116B" => "Kindle KF8",
    ];
}