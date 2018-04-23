<?php

namespace AragornYang\Onix\CodeLists;

class CodeList11EpublicationFormat extends CodeList
{
    public const KEY = 'EpublicationFormat';

    protected const MAPPING = [
        // 
        "01" => "HTML",
        // 
        "02" => "PDF",
        // ‘.LIT’ file format used by Microsoft Reader software
        "03" => "Microsoft Reader",
        // 
        "04" => "RocketBook",
        // 
        "05" => "Rich text format (RTF)",
        // 
        "06" => "Open Ebook Publication Structure (OEBPS) format standard",
        // 
        "07" => "XML",
        // 
        "08" => "SGML",
        // ‘.EXE’ file format used when an epublication is delivered as a self-executing package of software and content
        "09" => "EXE",
        // ‘.TXT’ file format
        "10" => "ASCII",
        // Proprietary file format used for the MobiPocket reader software
        "11" => "MobiPocket format",
    ];
}