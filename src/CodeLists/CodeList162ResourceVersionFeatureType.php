<?php

namespace AragornYang\Onix\CodeLists;

class CodeList162ResourceVersionFeatureType extends CodeList
{
    public const KEY = 'ResourceVersionFeatureType';

    protected const MAPPING = [
        // Resource Version Feature Value carries a code from List 178
        "01" => "File format",
        // Resource Version Feature Value carries an integer
        "02" => "Image height in pixels",
        // Resource Version Feature Value carries an integer
        "03" => "Image width in pixels",
        // Resource Version Feature Value carries the filename of the supporting resource
        "04" => "Filename",
        // Resource Version Feature Value carries a decimal number only, suggested no more than 2 significant digits (eg 1.7, not 1.7462)
        "05" => "Approximate download file size in megabytes",
        /* MD5 hash value of the resource file. <ResourceVersionFeatureValue> should contain the 128-bit digest value (as 32 hexadecimal
					digits). Can be used as a cryptographic check on the integrity of a resource after it has been retrieved */
        "06" => "MD5 hash value",
        // Resource Version Feature Value carries a integer number only (eg 1831023)
        "07" => "Exact download file size in bytes",
        /* SHA-256 hash value of the resource file. <ResourceVersionFeatureValue> should contain the 256-bit digest value (as 64 hexadecimal
					digits). Can be used as a cryptographic check on the integrity of a resource after it has been retrieved */
        "08" => "SHA-256 hash value",
    ];
}