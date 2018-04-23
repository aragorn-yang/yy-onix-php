<?php

namespace AragornYang\Onix\CodeLists;

class CodeList230PriceConstraintType extends CodeList
{
    public const KEY = 'PriceConstraintType';

    protected const MAPPING = [
        // Allows positive indication that there are no conditions (the default if <PriceConstraint> is omitted)
        "00" => "No constraints",
        /* Lendable by the purchaser to other device owner, account holder or patron, eg library lending (use where the library product
					is not identified with a separate <ProductIdentifier> from the consumer product). The ‘primary’ copy becomes unusable while
					the secondary copy is on loan, unless a number of concurrent borrowers is also specified */
        "06" => "Lend",
        /* E-publication license is time-limited. Use with code 02 from List 146 and a time period in days, weeks or months in <PriceConstraintLimit>.
					The purchased copy becomes unusable when the license expires */
        "07" => "Time-limited license",
        /* Maximum number of consecutive loans (eg from a library) to a single device owner, account holder or patron. Note that a limit
					of 1 indicates that a loan cannot be renewed */
        "08" => "Loan renewal",
    ];
}