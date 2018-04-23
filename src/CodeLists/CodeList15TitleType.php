<?php

namespace AragornYang\Onix\CodeLists;

class CodeList15TitleType extends CodeList
{
    public const KEY = 'TitleType';

    protected const MAPPING = [
        // 
        "00" => "Undefined",
        /* The full text of the distinctive title of the item, without abbreviation or abridgement. For books, where the title alone
					is not distinctive, elements may be taken from a set or series title and part number etc to create a distinctive title. Where
					the item is an omnibus edition containing two or more works by the same author, and there is no separate combined title, a
					distinctive title may be constructed by concatenating the individual titles, with suitable punctuation, as in ‘Pride and prejudice
					/ Sense and sensibility / Northanger Abbey’ */
        "01" => "Distinctive title (book); Cover title (serial); Title on item (serial content item or reviewed resource)",
        // Serials only
        "02" => "ISSN key title of serial",
        // Where the subject of the ONIX record is a translated item
        "03" => "Title in original language",
        // For serials: an acronym or initialism of Title Type 01, eg ‘JAMA’, ‘JACM’
        "04" => "Title acronym or initialism",
        // An abbreviated form of Title Type 01
        "05" => "Abbreviated title",
        // A translation of Title Type 01 into another language
        "06" => "Title in other language",
        // Serials only: when a journal issue is explicitly devoted to a specified topic
        "07" => "Thematic title of journal issue",
        // Books or serials: when an item was previously published under another title
        "08" => "Former title",
        /* For books: the title carried in a book distributor’s title file: frequently incomplete, and may include elements not properly
					part of the title */
        "10" => "Distributor’s title",
        // An alternative title that appears on the cover of a book
        "11" => "Alternative title on cover",
        // An alternative title that appears on the back of a book
        "12" => "Alternative title on back",
        /* An expanded form of the title, eg the title of a school text book with grade and type and other details added to make the
					title meaningful, where otherwise it would comprise only the curriculum subject. This title type is required for submissions
					to the Spanish ISBN Agency */
        "13" => "Expanded title",
        // An alternative title that the book is widely known by, whether it appears on the book or not
        "14" => "Alternative title",
    ];
}