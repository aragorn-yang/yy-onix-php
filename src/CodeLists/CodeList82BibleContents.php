<?php

namespace AragornYang\Onix\CodeLists;

class CodeList82BibleContents extends CodeList
{
    public const KEY = 'BibleContents';

    protected const MAPPING = [
        /* The seven portions of the Apocrypha added to the Catholic canon at the Council of Trent in 1546: Tobit; Judith; Wisdom of
					Solomon; Sirach (Ecclesiasticus); Baruch, including the Letter of Jeremiah; I and II Maccabees; Extra portions of Esther and
					Daniel (Additions to Esther; the Prayer of Azariah; Song of the Three Jews; Susannah; Bel and the Dragon). These are not generally
					included in the Protestant canon */
        "AP" => "Apocrypha (Catholic canon)",
        // A collection of Apocryphal texts, canon not specified
        "AQ" => "Apocrypha (canon unspecified)",
        // I Esdras; Prayer of Manasseh; Psalm 151; III Maccabees
        "AX" => "Additional Apocryphal texts: Greek Orthodox canon",
        // I and II Esdras; Prayer of Manasseh; Psalm 151; III and IV Maccabees
        "AY" => "Additional Apocryphal texts: Slavonic Orthodox canon",
        // Additional Apocryphal texts included in some Bible versions: I and II Esdras; Prayer of Manasseh
        "AZ" => "Additional Apocryphal texts",
        /* The 66 books included in the Protestant, Catholic and Orthodox canons, together with the seven portions of the Apocrypha included
					in the Catholic canon. (Equivalent to OT plus NT plus AP) */
        "GA" => "General canon with Apocrypha (Catholic canon)",
        /* The 66 books included in the Protestant, Catholic and Orthodox canons, together with Apocryphal texts, canon not specified.
					(Equivalent to OT plus NT plus AQ) */
        "GC" => "General canon with Apocryphal texts (canon unspecified)",
        /* The 66 books included in the Protestant, Catholic and Orthodox canons, 39 from the Old Testament and 27 from the New Testament.
					The sequence of books may differ in different canons. (Equivalent to OT plus NT) */
        "GE" => "General canon",
        // The books of Matthew, Mark, Luke and John
        "GS" => "Gospels",
        /* Those 39 books which were included in the Jewish canon by the rabbinical academy established at Jamma in 90 CE. Also known
					as the Jewish or Hebrew scriptures */
        "OT" => "Old Testament",
        /* The 27 books included in the Christian canon through the Easter Letter of Athanasius, Bishop of Alexandria and also by a general
					council of the Christian church held near the end of the 4th century CE */
        "NT" => "New Testament",
        // Includes the 27 books of the New Testament plus Psalms and Proverbs from the Old Testament. Equivalent to NT plus PP)
        "NP" => "New Testament with Psalms and Proverbs",
        // The books containing the letters of Paul to the various early Christian churches
        "PE" => "Paul’s Epistles",
        // The book of Psalms and the book of Proverbs combined
        "PP" => "Psalms and Proverbs",
        // The book of Psalms
        "PS" => "Psalms",
        // The first five books of the Bible: Genesis, Exodus, Numbers, Leviticus, Deuteronomy. Also applied to the Torah
        "PT" => "Pentateuch",
        // Selected books of either the OT or NT not otherwise noted
        "ZZ" => "Other portions",
    ];
}