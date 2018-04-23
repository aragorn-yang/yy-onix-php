<?php

namespace AragornYang\Onix\CodeLists;

class CodeList12TradeCategory extends CodeList
{
    public const KEY = 'TradeCategory';

    protected const MAPPING = [
        /* An edition from a UK publisher sold only in territories where exclusive rights are not held. Rights details should be carried
					in PR.21 (ONIX 2.1) OR P.21 (ONIX 3.0) as usual */
        "01" => "UK open market edition",
        /* In UK, an edition intended primarily for airside sales in UK airports, though it may be available for sale in other territories
					where exclusive rights are not held. Rights details should be carried in PR.21 (ONIX 2.1) OR P.21 (ONIX 3.0) as usual */
        "02" => "Airport edition",
        // In Germany, a special printing sold at a lower price than the regular hardback
        "03" => "Sonderausgabe",
        /* In countries where recognised as a distinct trade category, eg France ‘livre de poche’, Germany ‘Taschenbuch’, Italy ‘tascabile’,
					Spain ‘libro de bolsillo’ */
        "04" => "Pocket paperback",
        // Edition produced solely for sale in designated export markets
        "05" => "International edition (US)",
        /* Audio product sold in special durable packaging and with a replacement guarantee for the contained cassettes or CDs for a
					specified shelf-life */
        "06" => "Library audio edition",
        /* An edition from a US publisher sold only in territories where exclusive rights are not held. Rights details should be carried
					in PR.21 (ONIX 2.1) OR P.21 (ONIX 3.0) as usual */
        "07" => "US open market edition",
        // In France, a category of book that has a particular legal status, claimed by the publisher
        "08" => "Livre scolaire, déclaré par l’éditeur",
        // In France, a category of book that has a particular legal status, designated independently of the publisher
        "09" => "Livre scolaire (non spécifié)",
        // Edition published for sale only with a newspaper or periodical
        "10" => "Supplement to newspaper",
        /* In Spain, a school textbook for which there is no fixed or suggested retail price and which is supplied by the publisher on
					terms individually agreed with the bookseller */
        "11" => "Precio libre textbook",
        // For editions sold only through newsstands/newsagents
        "12" => "News outlet edition",
        /* In the US and Canada, a book that is published primarily for use by students in school or college education as a basis for
					study. Textbooks published for the elementary and secondary school markets are generally purchased by school districts for
					the use of students. Textbooks published for the higher education market are generally adopted for use in particular classes
					by the instructors of those classes. Textbooks are usually not marketed to the general public, which distinguishes them from
					trade books. Note that trade books adopted for course use are not considered to be textbooks (though a specific education
					edition of a trade title may be) */
        "13" => "US textbook",
        /* ‘Short’ e-book (sometimes also called a ‘single’), typically containing a single short story, an essay or piece of long-form
					journalism */
        "14" => "E-book short",
    ];
}