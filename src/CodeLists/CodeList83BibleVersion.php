<?php

namespace AragornYang\Onix\CodeLists;

class CodeList83BibleVersion extends CodeList
{
    public const KEY = 'BibleVersion';

    protected const MAPPING = [
        // Alberto Vaccari – Pontificio Istituto Biblico
        "ALV" => "Alberto Vaccari",
        /* A translation based on the American Standard Version and showing multiple options for the translation of ancient text. Published
					in full in 1965. Sponsored by the Lockman Foundation */
        "AMP" => "Amplified",
        // Most popular Catholic Bible translation in Italian prior to the CEI translation in 1971
        "ANM" => "Antonio Martini",
        // A 1901 translation using verbal equivalence techniques with the purpose of Americanizing the REV
        "ASV" => "American Standard",
        /* 2011 contemporary English translation of the Bible sponsored by the US-based Christian Resources Development Corporation.
					The translation includes Old Testament, Apocrypha and New Testament, and is aimed to be accessible to most English readers
					(minimum 7th grade reading age) */
        "CEB" => "Common English Bible",
        // Italian Episcopal Conference 1971 translation suitable for Italian Catholic liturgy. (Includes minor 1974 revision)
        "CEI" => "Conferenza Episcopale Italiana",
        // New translation of the C.E.I. first published in 2008 – the version most widely used by the Italian Catholic Church
        "CEN" => "Conferenza Episcopale Italiana 2008",
        // A translation completed in 1995 and sponsored by the American Bible Society under the leadership of Barclay Newman
        "CEV" => "Contemporary English",
        /* 1968 Interfaith version promoted by the Italian Bible Society. Has a Catholic ‘imprimateur’, but its ecumenical approach has
					Jewish, Protestant and Christian Orthodox approval */
        "CNC" => "Concordata",
        /* Version based on original documents, edited by Giovanni Diodati in 1607, revised by Diodati in 1641 and again in 1894. It
					is the reference version for many Italian Protestants */
        "DDI" => "Diodati",
        /* Revision of the Diodati Bible dating to the 1990s, aiming at highest fidelity to original ancient Greek (New Testament) and
					Hebrew (Old Testament) texts */
        "DDN" => "Nuova Diodati",
        // An early (1580-1609) English translation from the Latin Vulgate designed for Catholics and performed by George Martin
        "DOU" => "Douay-Rheims",
        // A German translation of the Bible for use in Roman Catholic churches
        "EIN" => "Einheitsübersetzung",
        // An update of the Revised Standard Version that makes ‘modest’ use of gender-free terminology
        "ESV" => "English Standard",
        // Finnish Bible translation
        "FBB" => "Biblia (1776)",
        // Finnish Bible translation
        "FRA" => "Raamattu (1933/1938)",
        // Finnish Bible translation
        "FRK" => "Raamattu kansalle",
        // Finnish Bible translation
        "FRM" => "Raamattu (1992)",
        /* A 1995 translation by the World Bible Publishing Company using the English language in a manner to communicate to the late
					20th century American */
        "GDW" => "God’s Word",
        // An early (1560) English version of the Bible translated by William Whittingham with strong Protestant leanings
        "GEN" => "Geneva",
        /* A translation sponsored by the American Bible Society. The New Testament was first published (as ‘Today’s English Version’
					TEV) in 1966. The Old Testament was completed in 1976, and the whole was published as the ‘Good News Bible’ */
        "GNB" => "Good News",
        /* Version edited by E. Galbiati, A. Penna and P. Rossano, and published by UTET. This version, based on original texts, is rich
					in notes and has been used as the basis for CEI translation */
        "GPR" => "Galbiati, Penna, Rossano – UTET",
        // New Testament text in an original Greek version
        "GRK" => "Original Greek",
        // Richly annotated 1963 Version edited by S. Garofano and S. Rinaldi, and published by Marietti
        "GRM" => "Garofano, Rinaldi – Marietti",
        // Old Testament text in an original Hebrew version
        "HBR" => "Original Hebrew",
        /* Published by Broadman and Holman this translation rejects all forms of gender-neutral wording and is written with strong influences
					from the Southern Baptist perspective of biblical scholarship */
        "HCS" => "Holman Christian Standard",
        // A translation completed in 1986 targeting readability at the US third grade level
        "ICB" => "International Children’s",
        /* Interconfessional translation resulting from 1985 effort by Catholic and Protestant scholars, aimed at delivering an easy-to-understand
					message */
        "ILC" => "Traduzione Interconfessionale in Lingua Corrente",
        /* A translation designed for English speaking Catholics based on the original languages. It is based on French as well as ancient
					texts and was first published in 1966 */
        "JER" => "Jerusalem",
        // A translation commissioned by King James I of England and first published in 1611
        "KJV" => "King James",
        /* A verbal translation led by William Prindele. Published in 1994, it was designed to modernize the language of the King James
					Version based on Webster’s New International Dictionary, 2nd edition, unabridged */
        "KJT" => "21st Century King James",
        // A paraphrase translation led by Kenneth N Taylor and first published in 1972
        "LVB" => "Living Bible",
        /* 1924 translation by Giovanni Luzzi, Professor at the Waldensian Faculty of Theology in Rome, who revised the 17th Century
					Diodati version */
        "LZZ" => "Luzzi",
        // A paraphrase translation of the New Testament by Eugene Peterson first published in 1993
        "MSG" => "Message Bible",
        /* A translation aimed at Catholic readers first published in its entirety in 1970. A revised New Testament was issued in 1986
					as the 2nd Edition. The 3rd Edtion was published in 1991 with a revision to Psalms. The 4th Edition (also known as the New
					American Bible Revised Edition) was published in 2011, incorporating revisions to the Old Testament */
        "NAB" => "New American",
        /* A translation commissioned by the Lockman Foundation. The New Testament was published in 1960 followed by the entire Bible
					in 1971 */
        "NAS" => "New American Standard",
        // A 1995 translation using more modern language than the NASB
        "NAU" => "New American Standard, Updated",
        // Norwegian Bible translation
        "NBA" => "Bibelen 1895",
        // Norwegian Bible translation
        "NBB" => "Bibelen 1930",
        // Norwegian Bible translation
        "NBC" => "Bibelen 1938",
        // Norwegian Bible translation
        "NBD" => "Bibelen 1978-85",
        // Norwegian Bible translation
        "NBE" => "Bibelen 1978",
        // Norwegian Bible translation
        "NBF" => "Bibelen 1985",
        // Norwegian Bible translation
        "NBG" => "Bibelen 1988",
        // Norwegian Bible translation
        "NBH" => "Bibelen 1978-85/rev. 2005",
        // Norwegian Bible translation
        "NBI" => "Bibelen 2011",
        // A translation inspired by the International Children’s version. First published by World Publishing in 1991
        "NCV" => "New Century",
        /* A translation first issued in 1961 (New Testament) and 1970 (complete Bible) as a result of a proposal at the 1946 General
					Assembly of the Church of Scotland */
        "NEB" => "New English",
        // Norwegian Bible translation
        "NGO" => "Bibelen Guds ord",
        /* A translation underwritten by Biblica (formerly the International Bible Society, and previously the New York Bible Society).
					The New Testament was published in 1973 followed by the entire Bible in 1978. The NIV text was revised in 1984 and again in
					2011 */
        "NIV" => "New International",
        // A 1996 translation designed for people with limited literacy in English and based on the NIV
        "NIR" => "New International Reader’s",
        // A revision of the Jerusalem Bible. First published in 1986
        "NJB" => "New Jerusalem",
        /* A version issued by Thomas Nelson Publishers in 1982-83 designed to update the language of the King James Version while maintaining
					the phrasing and rhythm and using the same sources as its predecessor */
        "NKJ" => "New King James",
        // Norwegian ‘nynorsk’ Bible translation
        "NNK" => "Bibelen, nynorsk",
        /* A translation sponsored by Tyndale House and first released in 1996. It is considered a revision and updating of the Living
					Bible */
        "NLV" => "New Living",
        // A revision of the Revised Standard based on ancient texts but updating language to American usage of the 1980s
        "NRS" => "New Revised Standard",
        // A Spanish translation from the original Greek and Hebrew, sponsored by Tyndale House
        "NTV" => "Nueva Traduccion Vivienta",
        /* Nuovissima version – a Catholic-oriented translation in modern Italian, edited by a group including Carlo Martini, Gianfranco
					Ravasi and Ugo Vanni and first published (in 48 volumes, 1967-1980) by Edizioni San Paolo */
        "NVB" => "Novissima Versione della Bibbia",
        // A Spanish translation from the original Greek and Hebrew, sponsored by the International Bible Society/Sociedad Bíblica Internacional
        "NVD" => "Nueva Biblia al Dia",
        // A Spanish translation underwritten by the International Bible Society
        "NVI" => "Nueva Version Internacional",
        // An idiomatic translation by J B Phillips, first completed in 1966
        "PHP" => "New Testament in Modern English (Phillips)",
        // A 1989 revision of the NEB. A significant effort was made to reduce the British flavor present in the NEB
        "REB" => "Revised English",
        /* The first major revision of the King James Version, the Revised Version incorporates insights from early manuscripts discovered
					between 1611 and 1870, and corrects readings in the KJV which nineteenth-century scholarship deemed mistaken. The New Testament
					was published in 1881, the Old Testament in 1885, and the Apocrypha in 1895 */
        "REV" => "Revised Version",
        /* A translation authorized by the National Council of Churches of Christ in the USA. The New Testament was published in 1946
					followed by a complete Protestant canon in 1951 */
        "RSV" => "Revised Standard",
        // A Spanish translation based on the original texts
        "RVL" => "Reina Valera",
        // Swedish Bible translation
        "SBB" => "Bibel 2000",
        // Norwegian ‘samisk’ Bible translation
        "SMK" => "Bibelen, samisk",
        /* A translation of the New Testament sponsored by the American Bible Society and first published in 1966. It was incorporated
					into the ‘Good News Bible’ (GNB) in 1976 */
        "TEV" => "Today’s English",
        /* An updating of the New International Version. The New Testament was published in 2002, and the entire Bible in 2005. Superseded
					by the 2011 NIV update */
        "TNI" => "Today’s New International",
        // Other translations not otherwise noted
        "ZZZ" => "Other",
    ];
}