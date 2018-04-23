<?php

namespace AragornYang\Onix\CodeLists;

class CodeList7ProductForm extends CodeList
{
    public const KEY = 'ProductForm';

    protected const MAPPING = [
        // 
        "00" => "Undefined",
        // Audio recording – detail unspecified
        "AA" => "Audio",
        // Audio cassette (analogue)
        "AB" => "Audio cassette",
        /* Audio compact disc, in any recording format: use for ‘red book’ (conventional audio CD) and SACD, and use coding in Product
					Form Detail to specify the format, if required */
        "AC" => "CD-Audio",
        // Digital audio tape cassette
        "AD" => "DAT",
        // Audio disc (excluding CD-Audio)
        "AE" => "Audio disc",
        // Audio tape (analogue open reel tape)
        "AF" => "Audio tape",
        // Sony MiniDisc format
        "AG" => "MiniDisc",
        /* Audio compact disc with part CD-ROM content, also termed CD-Plus or Enhanced-CD: use for ‘blue book’ and ‘yellow/red book’
					two-session discs */
        "AH" => "CD-Extra",
        // 
        "AI" => "DVD Audio",
        // Audio recording downloadable online
        "AJ" => "Downloadable audio file",
        // For example, Playaway audiobook and player: use coding in Product Form Detail to specify the recording format, if required
        "AK" => "Pre-recorded digital audio player",
        // For example, Audiofy audiobook chip
        "AL" => "Pre-recorded SD card",
        // Other audio format not specified by AB to AL
        "AZ" => "Other audio format",
        // Book – detail unspecified
        "BA" => "Book",
        // Hardback or cased book
        "BB" => "Hardback",
        // Paperback or other softback book
        "BC" => "Paperback / softback",
        // Loose-leaf book
        "BD" => "Loose-leaf",
        // Spiral, comb or coil bound book
        "BE" => "Spiral bound",
        /* Pamphlet or brochure, stapled; German ‘geheftet’. Includes low-extent wire-stitched books bound without a distinct spine (eg
					many comic books) */
        "BF" => "Pamphlet",
        // 
        "BG" => "Leather / fine binding",
        // Child’s book with all pages printed on board
        "BH" => "Board book",
        // Child’s book with all pages printed on textile
        "BI" => "Rag book",
        // Child’s book printed on waterproof material
        "BJ" => "Bath book",
        /* A book whose novelty consists wholly or partly in a format which cannot be described by any other available code – a ‘conventional’
					format code is always to be preferred; one or more Product Form Detail codes, eg from the B2nn group, should be used whenever
					possible to provide additional description */
        "BK" => "Novelty book",
        // Slide bound book
        "BL" => "Slide bound",
        // Extra-large format for teaching etc; this format and terminology may be specifically UK; required as a top-level differentiator
        "BM" => "Big book",
        // A part-work issued with its own ISBN and intended to be collected and bound into a complete book
        "BN" => "Part-work (fascículo)",
        // Concertina-folded book or chart, designed to fold to pocket or regular page size: use for German ‘Leporello’
        "BO" => "Fold-out book or chart",
        // A children’s book whose cover and pages are made of foam
        "BP" => "Foam book",
        // Other book format or binding not specified by BB to BP
        "BZ" => "Other book format",
        // Sheet map – detail unspecified
        "CA" => "Sheet map",
        // 
        "CB" => "Sheet map, folded",
        // 
        "CC" => "Sheet map, flat",
        // See Code List 80 for ‘rolled in tube’
        "CD" => "Sheet map, rolled",
        // Globe or planisphere
        "CE" => "Globe",
        // Other cartographic format not specified by CB to CE
        "CZ" => "Other cartographic",
        // Digital or multimedia (detail unspecified)
        "DA" => "Digital",
        // 
        "DB" => "CD-ROM",
        // CD interactive, use for ‘green book’ discs
        "DC" => "CD-I",
        // DEPRECATED – use VI for DVD video, AI for DVD audio, DI for DVD-ROM
        "DD" => "DVD",
        // 
        "DE" => "Game cartridge",
        // AKA ‘floppy disc’
        "DF" => "Diskette",
        // Electronic book text in proprietary or open standard format
        "DG" => "Electronic book text",
        // An electronic database or other resource or service accessible through online networks
        "DH" => "Online resource",
        // 
        "DI" => "DVD-ROM",
        // 
        "DJ" => "Secure Digital (SD) Memory Card",
        // 
        "DK" => "Compact Flash Memory Card",
        // 
        "DL" => "Memory Stick Memory Card",
        // 
        "DM" => "USB Flash Drive",
        // Double-sided disc, one side CD-Audio/CD-ROM, other side DVD-Audio/DVD-Video/DVD-ROM (at least one side must be -ROM)
        "DN" => "Double-sided CD/DVD",
        /* Digital product license delivered through the retail supply chain as a physical ‘key’, typically a card or booklet containing
					a code enabling the purchaser to download or activate the associated product */
        "DO" => "Digital product license key",
        // Other digital or multimedia not specified by DB to DN
        "DZ" => "Other digital",
        // Film or transparency – detail unspecified
        "FA" => "Film or transparency",
        // Continuous film or filmstrip: DEPRECATED – use FE or FF
        "FB" => "Film",
        // Photographic transparencies mounted for projection
        "FC" => "Slides",
        // Transparencies for overhead projector
        "FD" => "OHP transparencies",
        // 
        "FE" => "Filmstrip",
        // Continuous movie film as opposed to filmstrip
        "FF" => "Film",
        // Other film or transparency format not specified by FB to FF
        "FZ" => "Other film or transparency format",
        // Microform – detail unspecified
        "MA" => "Microform",
        // 
        "MB" => "Microfiche",
        // Roll microfilm
        "MC" => "Microfilm",
        // Other microform not specified by MB or MC
        "MZ" => "Other microform",
        // Miscellaneous printed material – detail unspecified
        "PA" => "Miscellaneous print",
        // May use product form detail codes P201 to P204 to specify binding
        "PB" => "Address book",
        // 
        "PC" => "Calendar",
        // Cards, flash cards (eg for teaching reading)
        "PD" => "Cards",
        // Copymasters, photocopiable sheets
        "PE" => "Copymasters",
        // May use product form detail codes P201 to P204 to specify binding
        "PF" => "Diary",
        /* Narrow strip-shaped printed sheet used mostly for education or children’s products (eg depicting alphabet, number line, procession
					of illustrated characters etc). Usually intended for horizontal display */
        "PG" => "Frieze",
        // Parts for post-purchase assembly
        "PH" => "Kit",
        // 
        "PI" => "Sheet music",
        // 
        "PJ" => "Postcard book or pack",
        // Poster for retail sale – see also XF
        "PK" => "Poster",
        // Record book (eg ‘birthday book’, ‘baby book’): may use product form detail codes P201 to P204 to specify binding
        "PL" => "Record book",
        /* Wallet or folder (containing loose sheets etc): it is preferable to code the contents and treat ‘wallet’ as packaging (List
					80), but if this is not possible the product as a whole may be coded as a ‘wallet’ */
        "PM" => "Wallet or folder",
        // 
        "PN" => "Pictures or photographs",
        // 
        "PO" => "Wallchart",
        // 
        "PP" => "Stickers",
        // A book-sized (as opposed to poster-sized) sheet, usually in color or high quality print
        "PQ" => "Plate (lámina)",
        // A book with all pages blank for the buyer’s own use: may use product form detail codes P201 to P204 to specify binding
        "PR" => "Notebook / blank book",
        // May use product form detail codes P201 to P204 to specify binding
        "PS" => "Organizer",
        // 
        "PT" => "Bookmark",
        // Other printed item not specified by PB to PT
        "PZ" => "Other printed item",
        // Video – detail unspecified
        "VA" => "Video",
        // DEPRECATED – use new VJ
        "VB" => "Video, VHS, PAL",
        // DEPRECATED – use new VJ
        "VC" => "Video, VHS, NTSC",
        // DEPRECATED – use new VK
        "VD" => "Video, Betamax, PAL",
        // DEPRECATED – use new VK
        "VE" => "Video, Betamax, NTSC",
        // eg Laserdisc
        "VF" => "Videodisc",
        // DEPRECATED – use new VJ
        "VG" => "Video, VHS, SECAM",
        // DEPRECATED – use new VK
        "VH" => "Video, Betamax, SECAM",
        // DVD video: specify TV standard in List 78
        "VI" => "DVD video",
        // VHS videotape: specify TV standard in List 78
        "VJ" => "VHS video",
        // Betamax videotape: specify TV standard in List 78
        "VK" => "Betamax video",
        // VideoCD
        "VL" => "VCD",
        // Super VideoCD
        "VM" => "SVCD",
        // High definition DVD disc, Toshiba HD DVD format
        "VN" => "HD DVD",
        // High definition DVD disc, Sony Blu-ray format
        "VO" => "Blu-ray",
        // Sony Universal Media disc
        "VP" => "UMD Video",
        // Other video format not specified by VB to VP
        "VZ" => "Other video format",
        /* A product consisting of two or more items in different media or different product forms, eg book and CD-ROM, book and toy,
					hardback book and e-book, etc */
        "WW" => "Mixed media product",
        /* A product containing multiple copies of one or more items packaged together for retail sale, consisting of either (a) several
					copies of a single item (eg 6 copies of a graded reader), or (b) several copies of each of several items (eg 3 copies each
					of 3 different graded readers), or (c) several copies of one or more single items plus a single copy of one or more related
					items (eg 30 copies of a pupil’s textbook plus 1 of teacher’s text). NOT TO BE CONFUSED WITH: multi-volume sets, or sets containing
					a single copy of a number of different items (boxed, slip-cased or otherwise); items with several components of different
					physical forms (see WW); or packs intended for trade distribution only, where the contents are retailed separately (see XC,
					XE, XL) */
        "WX" => "Multiple copy pack",
        // Trade-only material (unspecified)
        "XA" => "Trade-only material",
        // 
        "XB" => "Dumpbin – empty",
        // Dumpbin with contents
        "XC" => "Dumpbin – filled",
        // 
        "XD" => "Counterpack – empty",
        // Counterpack with contents
        "XE" => "Counterpack – filled",
        // Promotional poster for display, not for sale – see also PK
        "XF" => "Poster, promotional",
        // 
        "XG" => "Shelf strip",
        // Promotional piece for shop window display
        "XH" => "Window piece",
        // 
        "XI" => "Streamer",
        // 
        "XJ" => "Spinner",
        // Large scale facsimile of book for promotional display
        "XK" => "Large book display",
        /* A quantity pack with its own product code, for trade supply only: the retail items it contains are intended for sale individually
					– see also WX. For products or product bundles supplied shrink-wrapped for retail sale, use the Product Form code of the contents
					plus code 21 from List 80 */
        "XL" => "Shrink-wrapped pack",
        /* A quantity pack with its own product code, for trade supply only: the retail items it contains are intended for sale individually
					– see also WX. For products or product bundles supplied boxed for retail sale, use the Product Form code of the contents plus
					code 09 from List 80 */
        "XM" => "Boxed pack",
        // Other point of sale material not specified by XB to XL
        "XZ" => "Other point of sale",
        // General merchandise – unspecified
        "ZA" => "General merchandise",
        // 
        "ZB" => "Doll",
        // Soft or plush toy
        "ZC" => "Soft toy",
        // 
        "ZD" => "Toy",
        // Board game, or other game (except computer game: see DE)
        "ZE" => "Game",
        // 
        "ZF" => "T-shirt",
        // Dedicated e-book reading device, typically with mono screen
        "ZG" => "E-book reader",
        // General purpose tablet computer, typically with color screen
        "ZH" => "Tablet computer",
        // Dedicated audiobook player device, typically including book-related features like bookmarking
        "ZI" => "Audiobook player",
        // 
        "ZJ" => "Jigsaw",
        // Other apparel items not specified by ZB to ZJ, including promotional or branded scarves, caps, aprons etc
        "ZY" => "Other apparel",
        // Other merchandise not specified by ZB to ZY
        "ZZ" => "Other merchandise",
    ];
}