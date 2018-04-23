<?php

namespace AragornYang\Onix\CodeLists;

class CodeList32ComplexitySchemeIdentifier extends CodeList
{
    public const KEY = 'ComplexitySchemeIdentifier';

    protected const MAPPING = [
        // For example AD or HL. DEPRECATED in ONIX 3 – use code 06 instead
        "01" => "Lexile code",
        // For example 880L. DEPRECATED in ONIX 3 – use code 06 instead
        "02" => "Lexile number",
        // Fry readability metric based on number of sentences and syllables per 100 words. Expressed as a number from 1 to 15 in <ComplexityCode>
        "03" => "Fry Readability score",
        /* UK Institute of Education Book Bands for Guided Reading scheme (see http://www.ioe.ac.uk/research/4664.html). <ComplexityCode>
					is a color, eg ‘Pink A’ or ‘Copper’ */
        "04" => "IoE Book Band",
        // <ComplexityCode> is a code from ‘A’ to Z+’. See http://www.fountasandpinnellleveledbooks.com/aboutLeveledTexts.aspx
        "05" => "Fountas & Pinnell Text Level Gradient",
        /* The Lexile measure in <ComplexityCode> combines the Lexile number (for example 620L or 880L) and optionally the Lexile code
					(for example AD or HL). Examples might be ‘880L’, ‘AD0L’ or ‘HL600L’. See https://lexile.com/about-lexile/lexile-overview/ */
        "06" => "Lexile measure",
        /* Advantage-TASA Open Standard book readability score, used for example within the Renaissance Learning Accelerated Reader scheme.
					<ComplexityCode> is a real number between 0 and 17. See http://www.renaissance.com/products/accelerated-reader/atos-analyzer */
        "07" => "ATOS for Books",
        /* Flesch-Kincaid Grade Level Formula, a standard readability measure based on the weighted number of syllables per word and
					words per sentence. <ComplexityCode> is a real number between about -1 and 20 */
        "08" => "Flesch-Kincaid Grade Level",
        // Use this code for books levelled by the publisher or a third party using the Fountas and Pinnell Guided Reading methodology
        "09" => "Guided Reading Level",
        // Used for books aimed at K-2 literacy intervention. <ComplexityCode> is an integer between 1 and 20
        "10" => "Reading Recovery Level",
    ];
}