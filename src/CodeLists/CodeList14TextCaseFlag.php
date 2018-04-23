<?php

namespace AragornYang\Onix\CodeLists;

class CodeList14TextCaseFlag extends CodeList
{
    public const KEY = 'TextCaseFlag';

    protected const MAPPING = [
        // Default
        "00" => "Undefined",
        // Initial capitals on first word and subsequently on proper names only, eg ‘The conquest of Mexico’
        "01" => "Sentence case",
        /* Initial capitals on first word and subsequently on all significant words (nouns, pronouns, adjectives, verbs, adverbs, subordinate
					conjunctions) thereafter. Unless they appear as the first word, articles, prepositions and coordinating conjunctions remain
					lower case, eg ‘The Conquest of Mexico’ */
        "02" => "Title case",
        // For example, ‘THE CONQUEST OF MEXICO’
        "03" => "All capitals",
    ];
}