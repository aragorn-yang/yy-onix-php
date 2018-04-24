<?php

namespace AragornYang\Onix\CodeLists;

class CodeList21EditionTypeCode extends CodeList
{
    public const KEY = 'EditionTypeCode';

    protected const MAPPING = [
        // Content has been shortened: use for abridged, shortened, concise, condensed
        "ABR" => "Abridged edition",
        /* Version of a play or script intended for use of those directly involved in a production, usually including full stage directions
					in addition to the text of the script */
        "ACT" => "Acting edition",
        /* Content has been adapted to serve a different purpose or audience, or from one medium to another: use for dramatization, novelization
					etc. Use <EditionStatement> to describe the exact nature of the adaptation */
        "ADP" => "Adapted edition",
        // Do not use. This code is now DEPRECATED, but is retained in the list for reasons of backwards compatibility
        "ALT" => "Alternate",
        // Content is augmented by the addition of notes
        "ANN" => "Annotated edition",
        // Both languages should be specified in the <Language> group. Use MLL for an edition in more than two languages
        "BLL" => "Bilingual edition",
        /* Use only where the two languages are presented in parallel on facing pages, or in parallel columns of text on a single page
					(otherwise use BLL). Both languages should be specified in the <Language> group */
        "BLP" => "Bilingual ‘facing page’ edition",
        // Braille edition
        "BRL" => "Braille edition",
        // An edition in which two or more works also published separately are combined in a single volume; AKA ‘omnibus’ edition
        "CMB" => "Combined volume",
        // Content includes critical commentary on the text
        "CRI" => "Critical edition",
        // Content was compiled for a specified educational course
        "CSP" => "Coursepack",
        /* A digital product that, at the time of publication, has or had no print counterpart and that is or was not expected to have
					a print counterpart for a reasonable time (recommended at least 30 days following publication) */
        "DGO" => "Digital original",
        // Use for e-publications that have been enhanced with additional text, speech, other audio, video, interactive or other content
        "ENH" => "Enhanced edition",
        // Content has been enlarged or expanded from that of a previous edition
        "ENL" => "Enlarged edition",
        // ‘Offensive’ content has been removed
        "EXP" => "Expurgated edition",
        // Exact reproduction of the content and format of a previous edition
        "FAC" => "Facsimile edition",
        // A collection of writings published in honor of a person, an institution or a society
        "FST" => "Festschrift",
        // Content includes extensive illustrations which are not part of other editions
        "ILL" => "Illustrated edition",
        // Large print edition, print sizes 14 to 19pt – see also ULP
        "LTE" => "Large type / large print edition",
        // A printed edition in a type size too small to be read without a magnifying glass
        "MCP" => "Microprint edition",
        /* An edition published to coincide with the release of a film, TV program, or electronic game based on the same work. Use <EditionStatement>
					to describe the exact nature of the tie-in */
        "MDT" => "Media tie-in",
        // All languages should be specified in the ‘Language’ group. Use BLL for a bilingual edition
        "MLL" => "Multilingual edition",
        // Where no other information is given, or no other coded type is applicable
        "NED" => "New edition",
        /* A limited edition in which each copy is individually numbered. Use <EditionStatement> to give details of the number of copies
					printed */
        "NUM" => "Edition with numbered copies",
        /* In the US, a book that was previously bound, normally as a paperback, and has been rebound with a library-quality hardcover
					binding by a supplier other than the original publisher. See also the <Publisher> and <RelatedProduct> composites for other
					aspects of the treatment of prebound editions in ONIX */
        "PRB" => "Prebound edition",
        // Content has been revised from that of a previous edition
        "REV" => "Revised edition",
        // An edition intended specifically for use in schools
        "SCH" => "School edition",
        // Individually autographed by the author(s)
        "SIG" => "Signed edition",
        // An edition that uses simplified language (Finnish ‘Selkokirja’)
        "SMP" => "Simplified language edition",
        /* Use for anniversary, collectors’, de luxe, gift, limited (but prefer codes NUM or UNN as appropriate), autographed (but prefer
					code SIG as appropriate) edition. Use <EditionStatement> to describe the exact nature of the special edition */
        "SPE" => "Special edition",
        // Where a text is available in both student and teacher’s editions
        "STU" => "Student edition",
        /* Where a text is available in both student and teacher’s editions<span style="color: blue">; use also for instructor’s or leader’s editions, and for
					editions intended exclusively for educators where no specific student edition is available</span> */
        "TCH" => "Teacher’s edition",
        /* Where a title has also been published in an abridged edition; also for audiobooks, regardless of whether an abridged audio
					version also exists */
        "UBR" => "Unabridged edition",
        // For print sizes 20pt and above, and with typefaces designed for the visually impaired – see also LTE
        "ULP" => "Ultra large print edition",
        /* A limited edition in which each copy is not individually numbered – but where the actual number of copies is strictly limited.
					Use <EditionStatement> to give details of the number of copies printed */
        "UNN" => "Edition with unnumbered copies",
        // Content previously considered ‘offensive’ has been restored
        "UXP" => "Unexpurgated edition",
        // Content includes notes by various commentators, and/or includes and compares several variant texts of the same work
        "VAR" => "Variorum edition",
    ];
}