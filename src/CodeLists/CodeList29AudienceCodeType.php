<?php

namespace AragornYang\Onix\CodeLists;

class CodeList29AudienceCodeType extends CodeList
{
    public const KEY = 'AudienceCodeType';

    protected const MAPPING = [
        // Using a code from List 28
        "01" => "ONIX audience codes",
        // As specified in <AudienceCodeTypeName>
        "02" => "Proprietary",
        // Motion Picture Association of America rating applied to movies
        "03" => "MPAA rating",
        // British Board of Film Classification rating applied to movies
        "04" => "BBFC rating",
        // German FSK (Freiwillige Selbstkontrolle der Filmwirtschaft) rating applied to movies
        "05" => "FSK rating",
        // French Canadian audience code list, used by BTLF for Memento
        "06" => "BTLF audience code",
        // Audience code used by Electre (France)
        "07" => "Electre audience code",
        // Spain: educational audience and material type code of the Asociación Nacional de Editores de Libros y Material de Enseñanza
        "08" => "ANELE Tipo",
        /* Code list used to specify reading levels for children’s books, used in Flanders, and formerly in the Netherlands – see also
					code 18 */
        "09" => "AVI",
        // German USK (Unterhaltungssoftware Selbstkontrolle) rating applied to video or computer games
        "10" => "USK rating",
        // Audience code used in Flanders
        "11" => "AWS",
        /* Type of school: codelist maintained by VdS Bildungsmedien eV, the German association of educational media publishers. See
					http://www.bildungsmedien.de/service/onixlisten/schulform_onix_codelist29_value12_0408.pdf */
        "12" => "Schulform",
        /* School region: codelist maintained by VdS Bildungsmedien eV, the German association of educational media publishers, indicating
					where products are licensed to be used in schools. See http://www.bildungsmedien.de/service/onixlisten/bundesland_onix_codelist29_value13_0408.pdf */
        "13" => "Bundesland",
        /* Occupation: codelist for vocational training materials, maintained by VdS Bildungsmedien eV, the German association of educational
					media publishers. See http://www.bildungsmedien.de/service/onixlisten/ausbildungsberufe_onix_codelist29_value14_0408.pdf */
        "14" => "Ausbildungsberuf",
        // Finnish school or college level
        "15" => "Suomalainen kouluasteluokitus",
        // UK Publishers Association, Children’s Book Group, coded indication of intended reader age, carried on book covers
        "16" => "CBG age guidance",
        // Audience code used in Nielsen Book Services
        "17" => "Nielsen Book audience code",
        // Code list used to specify reading levels for children’s books, used in the Netherlands – see also code 09
        "18" => "AVI (revised)",
        /* Lexile measure (the Lexile measure in <AudienceCodeValue> may optionally be prefixed by the Lexile code). Examples might be
					‘880L’, ‘AD0L’ or ‘HL600L’. Deprecated – use <Complexity> instead */
        "19" => "Lexile measure",
        /* Fry readability metric based on number of sentences and syllables per 100 words. Expressed as a number from 1 to 15 in <AudienceCodeValue>.
					Deprecated – use <Complexity> instead */
        "20" => "Fry Readability score",
        // Children’s audience code (対象読者), two-digit encoding of intended target readership from 0–2 years up to High School level
        "21" => "Japanese Children’s audience code",
        // Publisher’s rating indicating suitability for an particular adult audience, using a code from List 203
        "22" => "ONIX Adult audience rating",
        /* Codes A1 to C2 indicating standardised level of language learning or teaching material, from beginner to advanced, used in
					EU */
        "23" => "Common European Framework for Language Learning",
        /* Rating used in Korea to control selling of books and e-books to minors. Current values are 0 (suitable for all) and 19 (only
					for sale to ages 19+). See http://www.kpec.or.kr/english/ */
        "24" => "Korean Publication Ethics Commission rating",
        /* UK Institute of Education Book Bands for Guided Reading scheme (see http://www.ioe.ac.uk/research/4664.html). <AudienceCodeValue>
					is a color, eg ‘Pink A’ or ‘Copper’. Deprecated – use <Complexity> instead */
        "25" => "IoE Book Band",
        /* Used for German videos/DVDs with educational or informative content; value for <AudienceCodeValue> must be either ‘Infoprogramm
					gemäß § 14 JuSchG’ or ‘Lehrprogramm gemäß § 14 JuSchG’ */
        "26" => "FSK Lehr-/Infoprogramm",
        /* Where this is different from the language of the text of the book recorded in <Language>. <AudienceCodeValue> should be a
					value from List 74 */
        "27" => "Intended audience language",
        // Pan European Game Information rating used primarily for video games
        "28" => "PEGI rating",
        // Code indicating the intended curriculum (eg Naturvetenskapsprogrammet, Estetica programmet) in Swedish higher secondary education
        "29" => "Gymnasieprogram",
    ];
}