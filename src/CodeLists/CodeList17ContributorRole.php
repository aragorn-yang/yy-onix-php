<?php

namespace AragornYang\Onix\CodeLists;

class CodeList17ContributorRole extends CodeList
{
    public const KEY = 'ContributorRole';

    protected const MAPPING = [
        // Author of a textual work
        "A01" => "By (author)",
        // With or as told to: ‘ghost’ author of a literary work
        "A02" => "With",
        // Writer of screenplay or script (film or video)
        "A03" => "Screenplay by",
        // Writer of libretto (opera): see also A31
        "A04" => "Libretto by",
        // Author of lyrics (song): see also A31
        "A05" => "Lyrics by",
        // Composer of music
        "A06" => "By (composer)",
        // Visual artist when named as the primary creator of, eg, a book of reproductions of artworks
        "A07" => "By (artist)",
        // Photographer when named as the primary creator of, eg, a book of photographs
        "A08" => "By (photographer)",
        // 
        "A09" => "Created by",
        // 
        "A10" => "From an idea by",
        // 
        "A11" => "Designed by",
        /* Artist when named as the creator of artwork which illustrates a text, or the originator (sometimes ‘penciller’ for collaborative
					art) of the artwork of a graphic novel or comic book */
        "A12" => "Illustrated by",
        // Photographer when named as the creator of photographs which illustrate a text
        "A13" => "Photographs by",
        // Author of text which accompanies art reproductions or photographs, or which is part of a graphic novel or comic book
        "A14" => "Text by",
        // Author of preface
        "A15" => "Preface by",
        // Author of prologue
        "A16" => "Prologue by",
        // Author of summary
        "A17" => "Summary by",
        // Author of supplement
        "A18" => "Supplement by",
        // Author of afterword
        "A19" => "Afterword by",
        // Author of notes or annotations: see also A29
        "A20" => "Notes by",
        // Author of commentaries on the main text
        "A21" => "Commentaries by",
        // Author of epilogue
        "A22" => "Epilogue by",
        // Author of foreword
        "A23" => "Foreword by",
        // Author of introduction: see also A29
        "A24" => "Introduction by",
        // Author/compiler of footnotes
        "A25" => "Footnotes by",
        // Author of memoir accompanying main text
        "A26" => "Memoir by",
        // Person who carried out experiments reported in the text
        "A27" => "Experiments by",
        // Author of introduction and notes: see also A20 and A24
        "A29" => "Introduction and notes by",
        // Writer of computer programs ancillary to the text
        "A30" => "Software written by",
        // Author of the textual content of a musical drama: see also A04 and A05
        "A31" => "Book and lyrics by",
        // Author of additional contributions to the text
        "A32" => "Contributions by",
        // Author of appendix
        "A33" => "Appendix by",
        // Compiler of index
        "A34" => "Index by",
        // 
        "A35" => "Drawings by",
        // Use also for the cover artist of a graphic novel or comic book if named separately
        "A36" => "Cover design or artwork by",
        // Responsible for preliminary work on which the work is based
        "A37" => "Preliminary work by",
        // Author of the first edition (usually of a standard work) who is not an author of the current edition
        "A38" => "Original author",
        // Maps drawn or otherwise contributed by
        "A39" => "Maps by",
        /* Use for secondary creators when separate persons are named as having respectively drawn and inked/colored/finished artwork,
					eg for a graphic novel or comic book. Use with A12 for ‘drawn by’. Use A40 for 'finished by', but prefer more specific codes
					A46 to A48 instead of A40 unless the more specific secondary roles are inappropriate, unclear or unavailable */
        "A40" => "Inked or colored by",
        // Designer of pop-ups in a pop-up book, who may be different from the illustrator
        "A41" => "Pop-ups by",
        // Use where a standard work is being continued by somebody other than the original author
        "A42" => "Continued by",
        // 
        "A43" => "Interviewer",
        // 
        "A44" => "Interviewee",
        // Writer of dialogue, captions in a comic book (following an outline by the primary writer)
        "A45" => "Comic script by",
        // Renders final comic book line art based on work of the illustrator or penciller. Preferred to code A40
        "A46" => "Inker",
        // Provides comic book color art and effects. Preferred to code A40
        "A47" => "Colorist",
        // Creates comic book text balloons and other text elements (where this is a distinct role from script writer and/or illustrator)
        "A48" => "Letterer",
        // Other type of primary creator not specified above
        "A99" => "Other primary creator",
        // 
        "B01" => "Edited by",
        // 
        "B02" => "Revised by",
        // 
        "B03" => "Retold by",
        // 
        "B04" => "Abridged by",
        // 
        "B05" => "Adapted by",
        // 
        "B06" => "Translated by",
        // 
        "B07" => "As told by",
        /* This code applies where a translator has provided a commentary on issues relating to the translation. If the translator has
					also provided a commentary on the work itself, codes B06 and A21 should be used */
        "B08" => "Translated with commentary by",
        // Name of a series editor when the product belongs to a series
        "B09" => "Series edited by",
        // 
        "B10" => "Edited and translated by",
        // 
        "B11" => "Editor-in-chief",
        // 
        "B12" => "Guest editor",
        // 
        "B13" => "Volume editor",
        // 
        "B14" => "Editorial board member",
        // 
        "B15" => "Editorial coordination by",
        // 
        "B16" => "Managing editor",
        // Usually the founder editor of a serial publication: Begruendet von
        "B17" => "Founded by",
        // 
        "B18" => "Prepared for publication by",
        // 
        "B19" => "Associate editor",
        // Use also for ‘advisory editor’, ‘series advisor’, ‘editorial consultant’ etc
        "B20" => "Consultant editor",
        // 
        "B21" => "General editor",
        // 
        "B22" => "Dramatized by",
        // In Europe, an expert editor who takes responsibility for the legal content of a collaborative law volume
        "B23" => "General rapporteur",
        /* An editor who is responsible for establishing the text used in an edition of a literary work, where this is recognised as
					a distinctive role (in Spain, ‘editor literario’) */
        "B24" => "Literary editor",
        // 
        "B25" => "Arranged by (music)",
        /* Responsible for the technical accuracy and language, may also be involved in coordinating and preparing technical material
					for publication */
        "B26" => "Technical editor",
        // 
        "B27" => "Thesis advisor or supervisor",
        // 
        "B28" => "Thesis examiner",
        // Responsible overall for the scientific content of the publication
        "B29" => "Scientific editor",
        // Other type of adaptation or editing not specified above
        "B99" => "Other adaptation by",
        // For puzzles, directories, statistics, etc
        "C01" => "Compiled by",
        // For textual material (eg for an anthology)
        "C02" => "Selected by",
        // Eg for a collection of photographs etc
        "C03" => "Non-text material selected by",
        // Eg for an exhibition
        "C04" => "Curated by",
        // Other type of compilation not specified above
        "C99" => "Other compilation by",
        // 
        "D01" => "Producer",
        // 
        "D02" => "Director",
        // Conductor of a musical performance
        "D03" => "Conductor",
        // Other type of direction not specified above
        "D99" => "Other direction by",
        // 
        "E01" => "Actor",
        // 
        "E02" => "Dancer",
        // 
        "E03" => "Narrator",
        // 
        "E04" => "Commentator",
        // Singer etc
        "E05" => "Vocal soloist",
        // 
        "E06" => "Instrumental soloist",
        // Reader of recorded text, as in an audiobook
        "E07" => "Read by",
        // Name of a musical group in a performing role
        "E08" => "Performed by (orchestra, band, ensemble)",
        // Of a speech, lecture etc
        "E09" => "Speaker",
        // Introduces and links other contributors and material, eg within a documentary
        "E10" => "Presenter",
        /* Other type of performer not specified above: use for a recorded performance which does not fit a category above, eg a performance
					by a stand-up comedian */
        "E99" => "Performed by",
        // Cinematographer, etc
        "F01" => "Filmed/photographed by",
        // 
        "F02" => "Editor (film or video)",
        // Other type of recording not specified above
        "F99" => "Other recording by",
        // May be associated with any contributor role, and placement should therefore be controlled by contributor sequence numbering
        "Z01" => "Assisted by",
        // 
        "Z02" => "Honored/dedicated to",
        // For use ONLY with ‘et al’ or ‘Various’ within <UnnamedPersons>, where the roles of the multiple contributors vary
        "Z98" => "(Various roles)",
        // Other creative responsibility not falling within A to F above
        "Z99" => "Other",
    ];
}