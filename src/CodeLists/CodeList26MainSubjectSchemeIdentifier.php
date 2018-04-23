<?php

namespace AragornYang\Onix\CodeLists;

class CodeList26MainSubjectSchemeIdentifier extends CodeList
{
    public const KEY = 'MainSubjectSchemeIdentifier';

    protected const MAPPING = [
        // Dewey Decimal Classification
        "01" => "Dewey",
        // 
        "02" => "Abridged Dewey",
        // US Library of Congress classification
        "03" => "LC classification",
        // US Library of Congress subject heading
        "04" => "LC subject heading",
        // US National Library of Medicine medical classification
        "05" => "NLM classification",
        // US National Library of Medicine Medical subject heading
        "06" => "MeSH heading",
        // US National Agricultural Library subject heading
        "07" => "NAL subject heading",
        // Getty Art and Architecture Thesaurus heading
        "08" => "AAT",
        // Universal Decimal Classification
        "09" => "UDC",
        /* BISAC Subject Headings are used in the North American market to categorize books based on topical content. They serve as a
					guideline for shelving books in physical stores and browsing books in online stores. See https://www.bisg.org/complete-bisac-subject-headings-2013-edition */
        "10" => "BISAC Subject Heading",
        // A geographical qualifier used with a BISAC subject category
        "11" => "BISAC region code",
        // For all BIC subject codes and qualifiers, see http://www.bic.org.uk/7/BIC-Standard-Subject-Categories/
        "12" => "BIC subject category",
        // 
        "13" => "BIC geographical qualifier",
        // 
        "14" => "BIC language qualifier (language as subject)",
        // 
        "15" => "BIC time period qualifier",
        // 
        "16" => "BIC educational purpose qualifier",
        // 
        "17" => "BIC reading level and special interest qualifier",
        /* Used for German National Bibliography since 2004 (100 subjects). Is different from value 30. See http://www.d-nb.de/service/pdf/ddc_wv_aktuell.pdf
					(in German) or http://www.d-nb.de/eng/service/pdf/ddc_wv_aktuell_eng.pdf (English) */
        "18" => "DDC-Sachgruppen der Deutschen Nationalbibliografie",
        // 
        "19" => "LC fiction genre heading",
        /* For indexing and search purposes, not normally intended for display. Where multiple keywords or keyword phrases are sent,
					this should be in a single instance of the <SubjectHeadingText> element, and it is recommended that they should be separated
					by semi-colons (this is consistent with Library of Congress preferred practice) */
        "20" => "Keywords",
        // See http://www.bic.org.uk/8/Children’s-Books-Marketing-Classifications/
        "21" => "BIC children’s book marketing category",
        /* BISAC Merchandising Themes are used in addition to BISAC Subject Headings to denote an audience to which a work may be of
					particular appeal, a time of year or event for which a work may be especially appropriate, or to further describe fictional
					works that have been subject-coded by genre */
        "22" => "BISAC Merchandising Theme",
        // 
        "23" => "Publisher’s own category code",
        // As specified in <SubjectSchemeName>
        "24" => "Proprietary subject scheme",
        // Latin America
        "25" => "Tabla de materias ISBN",
        // See http://info.vlb.de/files/wgsneuversion2_0.pdf (in German)
        "26" => "Warengruppen-Systematik des deutschen Buchhandels",
        /* Schlagwortnormdatei – Subject Headings Authority File in the German-speaking countries. See http://www.d-nb.de/standardisierung/normdateien/swd.htm
					(in German) and http://www.d-nb.de/eng/standardisierung/normdateien/swd.htm (English). DEPRECATED in favour of the GND */
        "27" => "SWD",
        // Subject classification used by Electre (France)
        "28" => "Thèmes Electre",
        /* France. A four-digit number, see http://www.clil.org/information/documentation.html (in French). The first digit identifies
					the version of the scheme */
        "29" => "CLIL",
        /* Deutsche Bibliothek subject groups. Used for German National Bibliography until 2003 (65 subjects). Is different from value
					18. See http://www.d-nb.de/service/pdf/ddc_wv_alt_neu.pdf */
        "30" => "DNB-Sachgruppen",
        // Nederlandse Uniforme Genre-Indeling (former Dutch book trade classification)
        "31" => "NUGI",
        // Nederlandstalige Uniforme Rubrieksindeling (Dutch book trade classification, from 2002),see http://www.boek.nl/nur (in Dutch)
        "32" => "NUR",
        /* ECPA Christian Product Category Book Codes, consisting of up to three x 3-letter blocks, for Super Category, Primary Category
					and Sub-Category. See http://www.ecpa.org/ECPA/cbacategories.xls */
        "33" => "ECPA Christian Book Category",
        // Schema Indeling Systematische Catalogus Openbare Bibliotheken (Dutch library classification)
        "34" => "SISO",
        // A modified Dewey Decimal Classification used in the Republic of Korea
        "35" => "Korean Decimal Classification (KDC)",
        // German Translation of Dewey Decimal Classification 22. Also known as DDC 22 ger. See http://www.ddc-deutsch.de/produkte/uebersichten/
        "36" => "DDC Deutsch 22",
        // Norwegian book trade product categories (Bokgrupper) administered by the Norwegian Publishers Association (http://www.forleggerforeningen.no/)
        "37" => "Bokgrupper",
        /* Norwegian bookselling subject categories (Bokhandelens varegrupper) administered by the Norwegian Booksellers Association
					(http://bokhandlerforeningen.no/) */
        "38" => "Varegrupper",
        // Norwegian school curriculum version. Deprecated
        "39" => "Læreplaner",
        // Japanese subject classification scheme
        "40" => "Nippon Decimal Classification",
        // BookSelling Qualifier: Russian book trade classification
        "41" => "BSQ",
        // Spain: subject coding scheme of the Asociación Nacional de Editores de Libros y Material de Enseñanza
        "42" => "ANELE Materias",
        // Codes for Norwegian ‘utdanningsprogram’ used in secondary education. See: http://www.udir.no/. (Formerly labelled ‘Skolefag’)
        "43" => "Utdanningsprogram",
        /* Codes for Norwegian ‘programområde’ used in secondary education. See http://www.udir.no/. (Formerly labelled ‘Videregående’
					or ‘Programfag’) */
        "44" => "Programområde",
        // Norwegian list of categories for books and other material used in education
        "45" => "Undervisningsmateriell",
        // Norwegian version of Dewey Decimal Classification
        "46" => "Norsk DDK",
        // Swedish bookselling subject categories
        "47" => "Varugrupper",
        // Swedish classification scheme
        "48" => "SAB",
        // Swedish bookselling educational subject type
        "49" => "Läromedelstyp",
        // Swedish publishers preliminary subject classification
        "50" => "Förhandsbeskrivning",
        // Controlled subset of UDC codes used by the Spanish ISBN Agency
        "51" => "Spanish ISBN UDC subset",
        // Subject categories defined by El Corte Inglés and used widely in the Spanish book trade
        "52" => "ECI subject categories",
        /* Classificazione commerciale editoriale (Italian book trade subject category based on BIC). CCE documentation available at
					http://www.ie-online.it/CCE2_2.0.pdf */
        "53" => "Soggetto CCE",
        // 
        "54" => "Qualificatore geografico CCE",
        // 
        "55" => "Qualificatore di lingua CCE",
        // 
        "56" => "Qualificatore di periodo storico CCE",
        // 
        "57" => "Qualificatore di livello scolastico CCE",
        // 
        "58" => "Qualificatore di età di lettura CCE",
        // Subject code list of the German association of educational media publishers
        "59" => "VdS Bildungsmedien Fächer",
        // Norwegian primary and secondary school subject categories (fagkoder), see http://www.udir.no/
        "60" => "Fagkoder",
        // Journal of Economic Literature classification scheme
        "61" => "JEL classification",
        // National Library of Canada subject heading (English)
        "62" => "CSH",
        // Répertoire de vedettes-matière (Bibliothèque de l’Université Laval) (French)
        "63" => "RVM",
        // Yleinen suomalainen asiasanasto: Finnish General Thesaurus. See http://onki.fi/fi/browser/ (in Finnish)
        "64" => "YSA",
        // Allmän tesaurus på svenska: Swedish translation of the Finnish General Thesaurus. See http://onki.fi/fi/browser/ (in Finnish)
        "65" => "Allärs",
        /* Yleisten kirjastojen luokitusjärjestelmä: Finnish Public Libraries Classification System. See http://ykl.kirjastot.fi/ (in
					Finnish) */
        "66" => "YKL",
        // Musiikin asiasanasto: Finnish Music Thesaurus. See http://onki.fi/fi/browser/ (in Finnish)
        "67" => "MUSA",
        // Specialtesaurus för musik: Swedish translation of the Finnish Music Thesaurus. See http://onki.fi/fi/browser/ (in Finnish)
        "68" => "CILLA",
        // Fiktiivisen aineiston asiasanasto: Finnish thesaurus for fiction. See http://kaunokki.kirjastot.fi/ (in Finnish)
        "69" => "Kaunokki",
        /* Specialtesaurus för fiktivt material: Swedish translation of the Finnish thesaurus for fiction. See http://kaunokki.kirjastot.fi/sv-FI/
					(in Finnish) */
        "70" => "Bella",
        // Yleinen suomalainen ontologia: Finnish General Upper Ontology. See http://onki.fi/fi/browser/ (In Finnish)
        "71" => "YSO",
        // Finnish Place Ontology. See http://onki.fi/fi/browser/ (in Finnish)
        "72" => "Paikkatieto ontologia",
        // Finnish book trade categorisation
        "73" => "Suomalainen kirja-alan luokitus",
        // Sears List of Subject Headings
        "74" => "Sears",
        // BIC E4Libraries Category Headings, see http://www.bic.org.uk/51/E4libraries-Subject-Category-Headings/
        "75" => "BIC E4L",
        // Code Sujet Rayon: subject categories used by bookstores in France
        "76" => "CSR",
        // Finnish school subject categories
        "77" => "Suomalainen oppiaineluokitus",
        // See http://www.asahi-net.or.jp/~ax2s-kmtn/ref/ccode.html (in Japanese)
        "78" => "Japanese book trade C-Code",
        // 
        "79" => "Japanese book trade Genre Code",
        // Finnish fiction genre classification. See http://ykl.kirjastot.fi/fi-FI/lisaluokat/ (in Finnish)
        "80" => "Fiktiivisen aineiston lisäluokitus",
        /* Location defined by postal code. Format is two-letter country code (from List 91), space, postal code. Note some postal codes
					themselves contain spaces, eg ‘GB N7 9DP’ or ‘US 10125’ */
        "85" => "Postal code",
        // ID number for geographical place, as defined at http://www.geonames.org (eg 2825297 is Stuttgart, Germany, see http://www.geonames.org/2825297)
        "86" => "GeoNames ID",
        /* Used for classification of academic and specialist publication in German-speaking countries. See http://www.newbooks-services.com/de/top/unternehmensportrait/klassifikation-und-mapping.html
					(German) and http://www.newbooks-services.com/en/top/about-newbooks/classification-mapping.html (English) */
        "87" => "NewBooks Subject Classification",
        /* Gemeinsame Normdatei – Joint Authority File in the German-speaking countries. See http://www.dnb.de/EN/gnd (English). Combines
					the PND, SWD and GKD into a single authority file, and should be used in preference to the older codes */
        "91" => "GND",
        // UK Standard Library Categories, the successor to BIC’s E4L classification scheme
        "92" => "BIC UKSLC",
        // 
        "93" => "Thema subject category",
        // 
        "94" => "Thema geographical qualifier",
        // 
        "95" => "Thema language qualifier",
        // 
        "96" => "Thema time period qualifier",
        // 
        "97" => "Thema educational purpose qualifier",
        // 
        "98" => "Thema interest age / special interest qualifier",
        // 
        "99" => "Thema style qualifier",
        // Swedish subject categories maintained by Bokrondellen
        "A2" => "Ämnesord",
        // Polish Statistical Book and E-book Classification
        "A3" => "Statystyka Książek Papierowych, Mówionych I Elektronicznych",
        /* Common Core State Standards curriculum alignment, for links to US educational standards. <SubjectCode> uses the full dot notation.
					See http://www.corestandards.org/developers-and-publishers */
        "A4" => "CCSS",
        // French library subject headings
        "A5" => "Rameau",
        // French educational subject classification scolomfr-voc-015, used for example on WizWiz.fr. See http://www.lom-fr.fr/scolomfr/vocabulaires/consultation-des-vocabulaires.html
        "A6" => "Nomenclature discipline scolaire",
        /* International Standard Industry Classification, a classification of economic activities. Use for books that are about a particular
					industry or economic activity. <SubjectCode> should be a single letter denoting an ISIC section OR a 2-, 3- or 4-digit number
					denoting an ISIC division, group or class. See http://unstats.un.org/unsd/cr/registry/isic-4.asp */
        "A7" => "ISIC",
        // Library of Congress Children’s Subject Headings: LCSHAC supplementary headings for Children’s books
        "A8" => "LC Children’s Subject Headings",
        // Swedish bookselling educational subject
        "A9" => "Ny Läromedel",
        /* EuroVoc multilingual thesaurus. <SubjectCode> should be a EuroVoc concept dc:identifier (for example, 2777, ‘Refrigerated
					products’). See http://eurovoc.europa.eu */
        "B0" => "EuroVoc",
        // Controlled vocabulary for educational objectives. See https://www.bisg.org/educational-taxonomy
        "B1" => "BISG Educational Taxonomy",
    ];
}