<?php

namespace AragornYang\Onix\CodeLists;

class CodeList07ProductForm extends CodeList
{
    public const KEY = 'ProductForm';

    protected const MAPPING = [
        '00' => 'Undefined',
        'AA' => 'Audio',
        //Audio recording – detail unspecified
        'AB' => 'Audio cassette',
        //Audio cassette (analogue)
        'AC' => 'CD-Audio',
        //Audio compact disc, in any recording format: use for ‘red book’ (conventional audio CD) and SACD, and use coding in Product Form Detail to specify the format, if required
        'AD' => 'DAT',
        //Digital audio tape cassette
        'AE' => 'Audio disc',
        //Audio disc (excluding CD-Audio)
        'AF' => 'Audio tape',
        //Audio tape (analogue open reel tape)
        'AG' => 'MiniDisc',
        //Sony MiniDisc format
        'AH' => 'CD-Extra',
        //Audio compact disc with part CD-ROM content, also termed CD-Plus or Enhanced-CD: use for ‘blue book’ and ‘yellow/red book’ two-session discs
        'AI' => 'DVD Audio',
        'AJ' => 'Downloadable audio file',
        //Audio recording downloadable online
        'AK' => 'Pre-recorded digital audio player',
        //For example, Playaway audiobook and player: use coding in Product Form Detail to specify the recording format, if required
        'AL' => 'Pre-recorded SD card',
        //For example, Audiofy audiobook chip
        'AZ' => 'Other audio format',
        //Other audio format not specified by AB to AL
        'BA' => 'Book',
        //Book – detail unspecified
        'BB' => 'Hardback',
        //Hardback or cased book
        'BC' => 'Paperback / softback',
        //Paperback or other softback book
        'BD' => 'Loose-leaf',
        //Loose-leaf book
        'BE' => 'Spiral bound',
        //Spiral, comb or coil bound book
        'BF' => 'Pamphlet',
        //Pamphlet or brochure, stapled; German ‘geheftet’. Includes low-extent wire-stitched books bound without a distinct spine (eg many comic books)
        'BG' => 'Leather / fine binding',
        'BH' => 'Board book',
        //Child’s book with all pages printed on board
        'BI' => 'Rag book',
        //Child’s book with all pages printed on textile
        'BJ' => 'Bath book',
        //Child’s book printed on waterproof material
        'BK' => 'Novelty book',
        //A book whose novelty consists wholly or partly in a format which cannot be described by any other available code – a ‘conventional’ format code is always to be preferred; one or more Product Form Detail codes, eg from the B2nn group, should be used whenever possible to provide additional description
        'BL' => 'Slide bound',
        //Slide bound book
        'BM' => 'Big book',
        //Extra-large format for teaching etc; this format and terminology may be specifically UK; required as a top-level differentiator
        'BN' => 'Part-work (fascículo)',
        //A part-work issued with its own ISBN and intended to be collected and bound into a complete book
        'BO' => 'Fold-out book or chart',
        //Concertina-folded book or chart, designed to fold to pocket or regular page size: use for German ‘Leporello’
        'BP' => 'Foam book',
        //A children’s book whose cover and pages are made of foam
        'BZ' => 'Other book format',
        //Other book format or binding not specified by BB to BP
        'CA' => 'Sheet map',
        //Sheet map – detail unspecified
        'CB' => 'Sheet map, folded',
        'CC' => 'Sheet map, flat',
        'CD' => 'Sheet map, rolled',
        //See Code List 80 for ‘rolled in tube’
        'CE' => 'Globe',
        //Globe or planisphere
        'CZ' => 'Other cartographic',
        //Other cartographic format not specified by CB to CE
        'DA' => 'Digital',
        //Digital or multimedia (detail unspecified)
        'DB' => 'CD-ROM',
        'DC' => 'CD-I',
        //CD interactive, use for ‘green book’ discs
        'DD' => 'DVD',
        //DEPRECATED – use VI for DVD video, AI for DVD audio, DI for DVD-ROM
        'DE' => 'Game cartridge',
        'DF' => 'Diskette',
        //AKA ‘floppy disc’
        'DG' => 'Electronic book text',
        //Electronic book text in proprietary or open standard format
        'DH' => 'Online resource',
        //An electronic database or other resource or service accessible through online networks
        'DI' => 'DVD-ROM',
        'DJ' => 'Secure Digital (SD) Memory Card',
        'DK' => 'Compact Flash Memory Card',
        'DL' => 'Memory Stick Memory Card',
        'DM' => 'USB Flash Drive',
        'DN' => 'Double-sided CD/DVD',
        //Double-sided disc, one side CD-Audio/CD-ROM, other side DVD-Audio/DVD-Video/DVD-ROM (at least one side must be -ROM)
        'DO' => 'Digital product license key',
        //Digital product license delivered through the retail supply chain as a physical ‘key’, typically a card or booklet containing a code enabling the purchaser to download or activate the associated product
        'DZ' => 'Other digital',
        //Other digital or multimedia not specified by DB to DN
        'FA' => 'Film or transparency',
        //Film or transparency – detail unspecified
        'FB' => 'Film',
        //Continuous film or filmstrip: DEPRECATED – use FE or FF
        'FC' => 'Slides',
        //Photographic transparencies mounted for projection
        'FD' => 'OHP transparencies',
        //Transparencies for overhead projector
        'FE' => 'Filmstrip',
        'FF' => 'Film',
        //Continuous movie film as opposed to filmstrip
        'FZ' => 'Other film or transparency format',
        //Other film or transparency format not specified by FB to FF
        'MA' => 'Microform',
        //Microform – detail unspecified
        'MB' => 'Microfiche',
        'MC' => 'Microfilm',
        //Roll microfilm
        'MZ' => 'Other microform',
        //Other microform not specified by MB or MC
        'PA' => 'Miscellaneous print',
        //Miscellaneous printed material – detail unspecified
        'PB' => 'Address book',
        //May use product form detail codes P201 to P204 to specify binding
        'PC' => 'Calendar',
        'PD' => 'Cards',
        //Cards, flash cards (eg for teaching reading)
        'PE' => 'Copymasters',
        //Copymasters, photocopiable sheets
        'PF' => 'Diary',
        //May use product form detail codes P201 to P204 to specify binding
        'PG' => 'Frieze',
        //Narrow strip-shaped printed sheet used mostly for education or children’s products (eg depicting alphabet, number line, procession of illustrated characters etc). Usually intended for horizontal display
        'PH' => 'Kit',
        //Parts for post-purchase assembly
        'PI' => 'Sheet music',
        'PJ' => 'Postcard book or pack',
        'PK' => 'Poster',
        //Poster for retail sale – see also XF
        'PL' => 'Record book',
        //Record book (eg ‘birthday book’, ‘baby book’): may use product form detail codes P201 to P204 to specify binding
        'PM' => 'Wallet or folder',
        //Wallet or folder (containing loose sheets etc): it is preferable to code the contents and treat ‘wallet’ as packaging (List 80), but if this is not possible the product as a whole may be coded as a ‘wallet’
        'PN' => 'Pictures or photographs',
        'PO' => 'Wallchart',
        'PP' => 'Stickers',
        'PQ' => 'Plate (lámina)',
        //A book-sized (as opposed to poster-sized) sheet, usually in color or high quality print
        'PR' => 'Notebook / blank book',
        //A book with all pages blank for the buyer’s own use: may use product form detail codes P201 to P204 to specify binding
        'PS' => 'Organizer',
        //May use product form detail codes P201 to P204 to specify binding
        'PT' => 'Bookmark',
        'PZ' => 'Other printed item',
        //Other printed item not specified by PB to PT
        'VA' => 'Video',
        //Video – detail unspecified
        'VB' => 'Video, VHS, PAL',
        //DEPRECATED – use new VJ
        'VC' => 'Video, VHS, NTSC',
        //DEPRECATED – use new VJ
        'VD' => 'Video, Betamax, PAL',
        //DEPRECATED – use new VK
        'VE' => 'Video, Betamax, NTSC',
        //DEPRECATED – use new VK
        'VF' => 'Videodisc',
        //eg Laserdisc
        'VG' => 'Video, VHS, SECAM',
        //DEPRECATED – use new VJ
        'VH' => 'Video, Betamax, SECAM',
        //DEPRECATED – use new VK
        'VI' => 'DVD video',
        //DVD video: specify TV standard in List 78
        'VJ' => 'VHS video',
        //VHS videotape: specify TV standard in List 78
        'VK' => 'Betamax video',
        //Betamax videotape: specify TV standard in List 78
        'VL' => 'VCD',
        //VideoCD
        'VM' => 'SVCD',
        //Super VideoCD
        'VN' => 'HD DVD',
        //High definition DVD disc, Toshiba HD DVD format
        'VO' => 'Blu-ray',
        //High definition DVD disc, Sony Blu-ray format
        'VP' => 'UMD Video',
        //Sony Universal Media disc
        'VZ' => 'Other video format',
        //Other video format not specified by VB to VP
        'WW' => 'Mixed media product',
        //A product consisting of two or more items in different media or different product forms, eg book and CD-ROM, book and toy, hardback book and e-book, etc
        'WX' => 'Multiple copy pack',
        //A product containing multiple copies of one or more items packaged together for retail sale, consisting of either (a) several copies of a single item (eg 6 copies of a graded reader), or (b) several copies of each of several items (eg 3 copies each of 3 different graded readers), or (c) several copies of one or more single items plus a single copy of one or more related items (eg 30 copies of a pupil’s textbook plus 1 of teacher’s text). NOT TO BE CONFUSED WITH: multi-volume sets, or sets containing a single copy of a number of different items (boxed, slip-cased or otherwise); items with several components of different physical forms (see WW); or packs intended for trade distribution only, where the contents are retailed separately (see XC, XE, XL)
        'XA' => 'Trade-only material',
        //Trade-only material (unspecified)
        'XB' => 'Dumpbin – empty',
        'XC' => 'Dumpbin – filled',
        //Dumpbin with contents
        'XD' => 'Counterpack – empty',
        'XE' => 'Counterpack – filled',
        //Counterpack with contents
        'XF' => 'Poster, promotional',
        //Promotional poster for display, not for sale – see also PK
        'XG' => 'Shelf strip',
        'XH' => 'Window piece',
        //Promotional piece for shop window display
        'XI' => 'Streamer',
        'XJ' => 'Spinner',
        'XK' => 'Large book display',
        //Large scale facsimile of book for promotional display
        'XL' => 'Shrink-wrapped pack',
        //A quantity pack with its own product code, for trade supply only: the retail items it contains are intended for sale individually – see also WX. For products or product bundles supplied shrink-wrapped for retail sale, use the Product Form code of the contents plus code 21 from List 80
        'XM' => 'Boxed pack',
        //A quantity pack with its own product code, for trade supply only: the retail items it contains are intended for sale individually – see also WX. For products or product bundles supplied boxed for retail sale, use the Product Form code of the contents plus code 09 from List 80
        'XZ' => 'Other point of sale',
        //Other point of sale material not specified by XB to XL
        'ZA' => 'General merchandise',
        //General merchandise – unspecified
        'ZB' => 'Doll',
        'ZC' => 'Soft toy',
        //Soft or plush toy
        'ZD' => 'Toy',
        'ZE' => 'Game',
        //Board game, or other game (except computer game: see DE)
        'ZF' => 'T-shirt',
        'ZG' => 'E-book reader',
        //Dedicated e-book reading device, typically with mono screen
        'ZH' => 'Tablet computer',
        //General purpose tablet computer, typically with color screen
        'ZI' => 'Audiobook player',
        //Dedicated audiobook player device, typically including book-related features like bookmarking
        'ZJ' => 'Jigsaw',
        'ZY' => 'Other apparel',
        //Other apparel items not specified by ZB to ZJ, including promotional or branded scarves, caps, aprons etc
        'ZZ' => 'Other merchandise',
        //Other merchandise not specified by ZB to ZY
    ];
}