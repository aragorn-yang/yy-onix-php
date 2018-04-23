<?php

namespace AragornYang\Onix\CodeLists;

class CodeList224StatusDetailTypeSeverity extends CodeList
{
    public const KEY = 'StatusDetailTypeSeverity';

    protected const MAPPING = [
        // Use ONLY if the message severity cannot be determined (eg with a legacy system unable to provide detailed error codes)
        "U" => "Unclassifiable",
        /* For information only, provided to encourage the ONIX data supplier to improve the quality of their data (eg provision of a
					non-mandatory data element that is currently missing, better conformity with best practice, etc) */
        "I" => "Info",
        // Request for clarification or further detail of the meaning of the data provided
        "Q" => "Query",
        // The ONIX data has been accepted as provided, but there may be issues in the way it is supplied
        "W" => "Warning",
        /* Some data in an ONIX data element or message structure caused an error due to not meeting the requirements of the standard.
					The data in question has been rejected, but processing of the remaining elements in the record (or the remain records in the
					message, if used within <MessageStatusDetail>) has continued */
        "E" => "Error",
        /* Some data in an ONIX data element or message structure caused an unrecoverable error due to not meeting the requirements of
					the standard. The entire ONIX record has been rejected (or the entire message, if used within <MessageStatusDetail>) */
        "F" => "Fatal error",
    ];
}