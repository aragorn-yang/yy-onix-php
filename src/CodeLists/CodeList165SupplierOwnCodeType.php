<?php

namespace AragornYang\Onix\CodeLists;

class CodeList165SupplierOwnCodeType extends CodeList
{
    public const KEY = 'SupplierOwnCodeType';

    protected const MAPPING = [
        /* A rating applied by a supplier (typically a wholesaler) to indicate its assessment of the expected or actual sales performance
					of a product */
        "01" => "Supplier’s sales classification",
        // A supplier’s coding of the eligibility of a product for a bonus scheme on overall sales
        "02" => "Supplier’s bonus eligibility",
        /* A rating applied by the publisher to indicate a sales category (eg backlist/frontlist, core stock etc). Use only when the
					publisher is not the ‘supplier’ */
        "03" => "Publisher’s sales classification",
        // A classification applied by a supplier to a product sold on Agency terms, to indicate that retail price restrictions are applicable
        "04" => "Supplier’s pricing restriction classification",
        /* Code is the ISBN of another book that had sales (both in terms of copy numbers and customer profile) comparable to that the
					distributor or supplier estimates for the product. <SupplierCodeValue> must be an ISBN-13 or GTIN-13 */
        "05" => "Supplier’s sales expectation",
        /* Code is the ISBN of another book that had sales (both in terms of copy numbers and customer profile) comparable to that the
					publisher estimates for the product. <SupplierCodeValue> must be an ISBN-13 or GTIN-13 */
        "06" => "Publisher’s sales expectation",
    ];
}