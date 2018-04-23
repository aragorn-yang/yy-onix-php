<?php

namespace AragornYang\Onix\CodeLists;

class CodeList45PublishingRole extends CodeList
{
    public const KEY = 'PublishingRole';

    protected const MAPPING = [
        // 
        "01" => "Publisher",
        /* Use where two or more publishers co-publish the exact same product, either under a single ISBN (in which case both publishers
					are co-publishers), or under different ISBNs (in which case the publisher of THIS ISBN is the publisher and the publishers
					of OTHER ISBNs are co-publishers. Note this is different from publication of ‘co-editions’ */
        "02" => "Co-publisher",
        // 
        "03" => "Sponsor",
        // Of a translated work
        "04" => "Publisher of original-language version",
        // 
        "05" => "Host/distributor of electronic content",
        // 
        "06" => "Published for/on behalf of",
        // Use also for ‘Published in cooperation with’
        "07" => "Published in association with",
        // DEPRECATED: use code 06
        "08" => "Published on behalf of",
        // When ownership of a product or title is transferred from one publisher to another
        "09" => "New or acquiring publisher",
        // The group to which a publisher (publishing role 01) belongs: use only if a publisher has been identified with role code 01
        "10" => "Publishing group",
        // The publisher of the edition of which a product is a facsimile
        "11" => "Publisher of facsimile original",
        /* The repackager of a prebound edition that has been assigned its own identifier. (In the US, a ‘prebound edition’ is a book
					that was previously bound, normally as a paperback, and has been rebound with a library-quality hardcover binding by a supplier
					other than the original publisher.) Required when the <EditionType> is coded PRB. The original publisher should be named as
					the ‘publisher’ */
        "12" => "Repackager of prebound edition",
        // When ownership of a product or title is transferred from one publisher to another (complement of code 09)
        "13" => "Former publisher",
        // Body funding publication fees, if different from the body funding the underlying research. For use with open access publications
        "14" => "Publication funder",
        /* Body funding the research on which publication is based, if different from the body funding the publication. For use with
					open access publications */
        "15" => "Research funder",
        // Body funding research and publication. For use with open access publications
        "16" => "Funding body",
        /* Organisation responsible for printing a printed product. Supplied primarily to meet legal deposit requirements, and may apply
					only to the first impression. The organisation may also be responsible for binding, when a separate binder is not specified */
        "17" => "Printer",
        /* Organisation responsible for binding a printed product (where distinct from the printer). Supplied primarily to meet legal
					deposit requirements, and may apply only to the first impression */
        "18" => "Binder",
        /* Organisation primarily responsible for physical manufacture of a product, when neither Printer nor Binder is directly appropriate
					(for example, with disc or tape products, or digital products on a physical carrier) */
        "19" => "Manufacturer",
    ];
}