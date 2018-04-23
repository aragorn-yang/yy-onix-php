<?php

namespace AragornYang\Onix\CodeLists;

class CodeList51ProductRelation extends CodeList
{
    public const KEY = 'ProductRelation';

    protected const MAPPING = [
        // <Product> is related to <RelatedProduct> in a way that cannot be specified by another code value
        "00" => "Unspecified",
        // <Product> includes <RelatedProduct>
        "01" => "Includes",
        // <Product> is part of <RelatedProduct>: use for ‘also available as part of’
        "02" => "Is part of",
        // <Product> replaces, or is new edition of, <RelatedProduct>
        "03" => "Replaces",
        // <Product> is replaced by, or has new edition, <RelatedProduct> (reciprocal of code 03)
        "05" => "Replaced by",
        /* <Product> is available in an alternative format as <RelatedProduct> – indicates an alternative format of the same content
					which is or may be available */
        "06" => "Alternative format",
        // <Product> has an ancillary or supplementary product <RelatedProduct>
        "07" => "Has ancillary product",
        // <Product> is ancillary or supplementary to <RelatedProduct>
        "08" => "Is ancillary to",
        // <Product> is remaindered as <RelatedProduct>, when a remainder merchant assigns its own identifier to the product
        "09" => "Is remaindered as",
        /* <Product> was originally sold as <RelatedProduct>, indicating the publisher’s original identifier for a title which is offered
					as a remainder under a different identifier (reciprocal of code 09) */
        "10" => "Is remainder of",
        // <Product> is an other-language version of <RelatedProduct>
        "11" => "Is other-language version of",
        /* <Product> has a publisher’s suggested alternative <RelatedProduct>, which does not, however, carry the same content (cf 05
					and 06) */
        "12" => "Publisher’s suggested alternative",
        // <Product> is an epublication based on printed product <RelatedProduct>
        "13" => "Epublication based on (print product)",
        /* <Product> is an epublication ‘rendered’ as <RelatedProduct>: use in ONIX 2.1 only when the <Product> record describes a package
					of electronic content which is available in multiple ‘renderings’ (coded 000 in <EpubTypeCode>): NOT USED in ONIX 3.0 */
        "14" => "Epublication is distributed as",
        /* <Product> is a ‘rendering’ of an epublication <RelatedProduct>: use in ONIX 2.1 only when the <Product> record describes a
					specific rendering of an epublication content package, to identify the package: NOT USED in ONIX 3.0 */
        "15" => "Epublication is a rendering of",
        /* <Product> is a POD replacement for <RelatedProduct>. <RelatedProduct> is an out-of-print product replaced by a print-on-demand
					version under a new ISBN */
        "16" => "POD replacement for",
        /* <Product> is replaced by POD <RelatedProduct>. <RelatedProduct> is a print-on-demand replacement, under a new ISBN, for an
					out-of-print <Product> (reciprocal of code 16) */
        "17" => "Replaced by POD",
        /* <Product> is a special edition of <RelatedProduct>. Used for a special edition (German: Sonderausgabe) with different cover,
					binding, premium content etc – more than ‘alternative format’ – which may be available in limited quantity and for a limited
					time */
        "18" => "Is special edition of",
        // <Product> has a special edition <RelatedProduct> (reciprocal of code 18)
        "19" => "Has special edition",
        /* <Product> is a prebound edition of <RelatedProduct> (in the US, a prebound edition is ‘a book that was previously bound and
					has been rebound with a library quality hardcover binding. In almost all commercial cases, the book in question began as a
					paperback.’) */
        "20" => "Is prebound edition of",
        // <Product> is the regular edition of which <RelatedProduct> is a prebound edition
        "21" => "Is original of prebound edition",
        // <Product> and <RelatedProduct> have a common author
        "22" => "Product by same author",
        /* <RelatedProduct> is another product that is suggested as similar to <Product> (‘if you liked <Product>, you may also like
					<RelatedProduct>’, or vice versa) */
        "23" => "Similar product",
        // <Product> is a facsimile edition of <RelatedProduct>
        "24" => "Is facsimile of",
        // <Product> is the original edition from which a facsimile edition <RelatedProduct> is taken (reciprocal of code 25)
        "25" => "Is original of facsimile",
        // <Product> is a license for a digital <RelatedProduct>, traded or supplied separately
        "26" => "Is license for",
        // <RelatedProduct> is an electronic version of print <Product> (reciprocal of code 13)
        "27" => "Electronic version available as",
        /* <RelatedProduct> is an ‘enhanced’ version of <Product>, with additional content. Typically used to link an enhanced e-book
					to its original ‘unenhanced’ equivalent, but not specifically limited to linking e-books – for example, may be used to link
					illustrated and non-illustrated print books. <Product> and <RelatedProduct> should share the same <ProductForm> */
        "28" => "Enhanced version available as",
        /* <RelatedProduct> is a basic version of <Product> (reciprocal of code 28). <Product> and <RelatedProduct> should share the
					same <ProductForm> */
        "29" => "Basic version available as",
        // <RelatedProduct> and <Product> are part of the same collection (eg two products in same series or set)
        "30" => "Product in same collection",
        /* <RelatedProduct> is an alternative product in another sector (of the same geographical market). Indicates an alternative that
					carries the same content, but available to a different set of customers, as one or both products are retailer-, channel- or
					market sector-specific */
        "31" => "Has alternative in a different market sector",
        /* <RelatedProduct> is an equivalent product, often intended for another (geographical) market. Indicates an alternative that
					carries essentially the same content, though slightly adapted for local circumstances (as opposed to a translation – use code
					11) */
        "32" => "Has equivalent intended for a different market",
        /* <RelatedProduct> is an alternative product, often intended for another (geographical) market. Indicates the content of the
					alternative is identical in all respects */
        "33" => "Has alternative intended for different market",
        // <Product> cites <RelatedProduct>
        "34" => "Cites",
        // <Product> is the object of a citation in <RelatedProduct>
        "35" => "Is cited by",
        /* Use to give the ISBN of another book that had sales (both in terms of copy numbers and customer profile) comparable to that
					the publisher or distributor estimates for the product. Use in ONIX 2.1 ONLY */
        "36" => "Sales expectation",
        /* <Product> is a signed copy of <RelatedProduct>. Use where signed copies are given a distinct product identifier and can be
					ordered separately, but are otherwise identical */
        "37" => "Is signed version of",
        /* <Product> is an unsigned copy of <RelatedProduct>. Use where signed copies are given a distinct product identifier and can
					be ordered separately, but are otherwise identical */
        "38" => "Has signed version",
        // <Product> is intended for teacher use, and the related product is for student use
        "39" => "Has related student material",
        // <Product> is intended for student use, and the related product is for teacher use
        "40" => "Has related teacher material",
        /* <Product> includes some content shared with <RelatedProduct>. Note the shared content does not form the whole of either product.
					Compare with the includes / is part of relationship pair, where the shared content forms the whole of one of the products,
					and with the alternative format relationship, where the shared content forms the whole of both products */
        "41" => "Some content shared with",
    ];
}