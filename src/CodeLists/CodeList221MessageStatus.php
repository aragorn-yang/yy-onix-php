<?php

namespace AragornYang\Onix\CodeLists;

class CodeList221MessageStatus extends CodeList
{
    public const KEY = 'MessageStatus';

    protected const MAPPING = [
        /* Message received but not yet parsed (Acknowledgement must contain neither <MessageStatusDetail> nor <RecordStatusSummary>,
					and should include <NoProduct/>). There is no particular implication that the acknowledgement message is valid – the status
					is based solely on receipt of a file and minimal parsing of the original ONIX message header to ascertain <MessageNumber>
					etc.. The Acknowledgement message MAY give a date when parsing is planned */
        "00" => "Message received",
        /* Entire original ONIX message rejected (ie NONE of the data records have been ingested). The status of any recognisable records
					MAY be summarised in the remainder of the Acknowledgement Message */
        "01" => "Message rejected",
        /* Original ONIX message partially parsed (ie at least SOME of the data records have been ingested, in whole or in part). Records
					processed to date MUST be summarised in the remainder of the Acknowledgement Message */
        "02" => "Message part-processed",
        /* Original ONIX message parsed and processed in full, and at least SOME of the data records have been ingested, in whole or
					in part), Results MUST be summarised in the remainder of the Acknowledgement Message */
        "03" => "Message processed",
    ];
}