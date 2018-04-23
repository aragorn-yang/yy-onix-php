<?php

namespace AragornYang\Onix\CodeLists;

class CodeList79ProductFormFeatureType extends CodeList
{
    public const KEY = 'ProductFormFeatureType';

    protected const MAPPING = [
        // For Product Form Feature values see code list 98
        "01" => "Color of cover",
        // For Product Form Feature values see code list 98
        "02" => "Color of page edge",
        /* The principal font used for body text, when this is a significant aspect of product description, eg for some Bibles, and for
					large print product. The accompanying Product Form Feature Description is text specifying font size and, if desired, typeface */
        "03" => "Text font",
        // For Product Form Feature values see code list 99
        "04" => "Special cover material",
        // For Product Form Feature values see code list 76
        "05" => "DVD region",
        /* A computer or handheld device operating system required to use a digital product, with version detail if applicable. The accompanying
					Product Form Feature Value is a code from List 176. Version detail, when applicable, is carried in Product Form Feature Description */
        "06" => "Operating system requirements",
        // Other system requirements for a digital product, described by free text in Product Form Feature Description
        "07" => "Other system requirements",
        /* Indicates compatibility with proprietary ‘point and listen’ devices such as Ting Pen (http://www.ting.eu) or the iSmart Touch
					and Read Pen. These devices scan invisible codes specially printed on the page to identify the book and position of the word,
					and the word is then read aloud by the device. The name of the compatible device (or range of devices) should be given in
					<ProductFormFeatureDescription> */
        "08" => "‘Point and listen’ device compatibility",
        // For <ProductFormFeatureValue> codes, see Codelist 196
        "09" => "E-publication accessibility detail",
        /* For versioned e-book file formats (or in some cases, devices). <ProductFormFeatureValue> should contain the version number
					as a period-separated list of numbers (eg ‘7’, ‘1.5’ or ‘3.10.7’). Use only with ONIX 3.0 – in ONIX 2.1, use <EpubTypeVersion>
					instead. For the most common file formats, code 15 and List 220 is strongly preferred */
        "10" => "E-publication format version",
        // DEPRECATED – use code 12 and List 143
        "11" => "CPSIA choking hazard warning",
        /* Choking hazard warning required by US Consumer Product Safety Improvement Act (CPSIA) of 2008. Required, when applicable,
					for products sold in the US. The Product Form Feature Value is a code from List 143. Further explanation may be given in Product
					Form Feature Description */
        "12" => "CPSIA choking hazard warning",
        /* Product carries hazard warning required by EU Toy Safety Directive. The Product Form Feature Value is a code from List 184,
					and (for some codes) the exact wording of the warning may be given in Product Form Feature Description */
        "13" => "EU Toy Safety Hazard warning",
        // Product Form Feature Description must give further details of the warning
        "14" => "IATA Dangerous Goods warning",
        /* For common versioned e-book formats (or in some cases, devices) – for example EPUB 2.0.1 or EPUB 3.0. <ProductFormFeatureValue>
					is a code from list 220. Use in ONIX 3.0 only */
        "15" => "E-publication format version code",
        /* For common versioned e-book formats, the name and version of the validator used to check conformance. <ProductFormFeatureDescription>
					is the common name of the validator used (eg EpubCheck, Flightdeck), and <ProductFormFeatureValue> is the version number of
					the validator (eg 4.0.0a). Use with code 15 (or possibly code 10), or with <EpubTypeVersion>, to specify the version the e-publication
					conforms with */
        "16" => "E-publication format validator version",
        /* Product does not carry FSC or PEFC logo. The Product Form Feature Value and Description elements are not used. The product
					may, however, still carry a claimed Pre- and Post-Consumer Waste (PCW) content (type code 37) in a separate repeat of the
					Product Form Feature composite */
        "30" => "Not FSC or PEFC certified",
        /* Product carries FSC logo (Pure, 100%). <ProductFormFeatureValue> is the Certification number (ie either a Chain Of Custody
					(COC) number or a Trademark License number) printed on the book. Format: Chain of Custody number is two to five letters-COC-six
					digits (the digits should include leading zeros if necessary), eg ‘AB-COC-001234’ or ‘ABCDE-COC-123456’; Trademark License
					number is C followed by six digits, eg ‘C005678’ (this would normally be prefixed by ‘FSC®’ when displayed). By definition,
					a product certified Pure does not contain Pre- or Post-Consumer-Waste (PCW), so type code 31 can only occur on its own. Certification
					numbers may be checked at http://info.fsc.org/ */
        "31" => "FSC certified – pure",
        /* Product carries FSC logo (Mixed sources, Mix). <ProductFormFeatureValue> is the Certification number (ie either a Chain Of
					Custody (COC) number or a Trademark License number) printed on the book. Format: Chain of Custody number is two to five letters-COC-six
					digits (the digits should include leading zeros if necessary), eg ‘AB-COC-001234’ or ‘ABCDE-COC-123456’; Trademark License
					number is C followed by six digits, eg ‘C005678’ (this would normally be prefixed by ‘FSC®’ when displayed). May be accompanied
					by a Pre- and Post-Consumer-Waste (PCW) percentage value, to be reported in another instance of <ProductFormFeature> with
					type code 36. Certification numbers may be checked at http://info.fsc.org/ */
        "32" => "FSC certified – mixed sources",
        /* Product carries FSC logo (Recycled). <ProductFormFeatureValue> is the Certification number (ie either a Chain Of Custody (COC)
					number or a Trademark License number) printed on the book. Format: Chain of Custody number is two to five letters-COC-six
					digits (the digits should include leading zeroes if necessary), eg ‘AB-COC-001234’ or ‘ABCDE-COC-123456’; Trademark License
					number is C followed by six digits, eg ‘C005678’ (this would normally be prefixed by ‘FSC®’ when displayed). Should be accompanied
					by a Pre- and Post-Consumer-Waste (PCW) percentage value, to be reported in another instance of <ProductFormFeature> with
					type code 36. Certification numbers may be checked at http://info.fsc.org/ */
        "33" => "FSC certified – recycled",
        /* Product carries PEFC logo (certified). <ProductFormFeatureValue> is the Chain Of Custody (COC) number printed on the book.
					May be accompanied by a Post-Consumer Waste (PCW) percentage value, to be reported in another instance of <ProductFormFeature>
					with type code 36 */
        "34" => "PEFC certified",
        /* Product carries PEFC logo (recycled). <ProductFormFeatureValue> is the Chain Of Custody (COC) number printed on the book.
					Should be accompanied by a Post-Consumer-Waste (PCW) percentage value, to be reported in another instance of <ProductFormFeature>
					with type code 36 */
        "35" => "PEFC recycled",
        /* The percentage of recycled Pre- and Post-Consumer-Waste (PCW) used in a product where the composition is certified by FSC
					or PEFC. <ProductFormFeatureValue> is an integer. May occur together with type code 32, 33, 34 or 35 */
        "36" => "FSC or PEFC certified Pre- and Post-Consumer Waste (PCW) percentage",
        /* The percentage of recycled Pre- and Post-Consumer Waste (PCW) claimed to be used in a product where the composition is not
					certified by FSC or PEFC. <Product FormFeatureValue> is an integer. <ProductFormFeatureDescription> may carry free text supporting
					the claim. Must be accompanied by type code 30 */
        "37" => "Claimed Pre- and Post-Consumer Waste (PCW) percentage",
        /* Product made from paper produced using environmentally-conscious technology. <ProductFormFeatureDescription> may carry free
					text with a more detailed statement */
        "40" => "Paper produced by ‘green’ technology",
    ];
}