<?php

namespace AragornYang\Onix\CodeLists;

class CodeList145UsageType extends CodeList
{
    public const KEY = 'UsageType';

    protected const MAPPING = [
        /* Preview before purchase. Allows a retail customer, account holder or patron to view a proportion of the book before purchase.
					Also applies to borrowers making use of ‘acquisition on demand’ models in libraries, and to ‘subscription’ models where the
					purchase is made on behalf of the reader */
        "01" => "Preview",
        // Print paper copy of extract
        "02" => "Print",
        // Make digital copy of extract
        "03" => "Copy / paste",
        /* Share product across multiple concurrent devices. Allows a retail customer, account holder or patron to read the book across
					multiple devices linked to the same account. Also applies to readers in library borrowing and ‘subscription’ models */
        "04" => "Share",
        // ‘Read aloud’ with text to speech functionality
        "05" => "Text to speech",
        /* Lendable by the purchaser to other device owner or account holder or patron, eg ‘Lend-to-a-friend’, library lending (where
					the library product has a separate <ProductIdentifier> from the consumer product). The ‘primary’ copy becomes unusable while
					the secondary copy is ‘on loan’ unless a number of concurrent borrowers is also specified */
        "06" => "Lend",
        /* E-publication license is time limited. Use with 02 from List 146 and a time period in days, weeks or months in <EpubUsageLimit>.
					The purchased copy becomes unusable when the license expires */
        "07" => "Time-limited license",
        /* Maximum number of consecutive loans (eg from a library) to a single device owner or account holder. Note that a limit of 1
					indicates that a loan cannot be renewed */
        "08" => "Loan renewal",
    ];
}