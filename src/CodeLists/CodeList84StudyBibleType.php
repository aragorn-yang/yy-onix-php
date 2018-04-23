<?php

namespace AragornYang\Onix\CodeLists;

class CodeList84StudyBibleType extends CodeList
{
    public const KEY = 'StudyBibleType';

    protected const MAPPING = [
        /* Contains the work of Howard Clark Kee including a summary of the development of the canon, introductions to the books, notes
					and cross references. Originally published in 1993, NRSV */
        "CAM" => "Cambridge Annotated",
        /* A project of Tyndale House Publishers and Zondervan intended to help readers apply the Bible to daily living. Living Bible,
					King James, New International, NASB */
        "LIF" => "Life Application",
        // A King James version study Bible with notes by James Macarthur first published in 1997
        "MAC" => "Macarthur",
        // A study Bible originally published in the 1960s and based on the RSV / NRSV
        "OXF" => "Oxford Annotated",
        // Norwegian study Bible, New Testament
        "NNT" => "Studiebibel, Det Nye testamentet",
        // Published in 1991 and based on the New Revised Standard version
        "NOX" => "New Oxford Annotated",
        // Norwegian study Bible
        "NSB" => "Norsk studiebibel",
        // Based on the work of Charles C. Ryrie. King James, NI, NASB
        "RYR" => "Ryrie",
        // A study Bible based on the early 20th century work of C.I. Scofield. Based on the King James version
        "SCO" => "Scofield",
        // A transdenominational study Bible for persons from the Pentecostal/Charismatic traditions
        "SPR" => "Spirit Filled",
    ];
}