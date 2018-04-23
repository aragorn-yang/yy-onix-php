<?php

namespace AragornYang\Onix\CodeLists;

class CodeList226RecordStatus extends CodeList
{
    public const KEY = 'RecordStatus';

    protected const MAPPING = [
        /* Entire record parsed and ingested without errors, record may have a Product record in the Acknowledgement which itself may
					have a <RecordStatusNote> or <RecordStatusDetail> to convey information, editorial queries or warnings */
        "00" => "No record errors",
        /* Entire record parsed and ingested without errors, record MUST have a Product record in the Acknowledgement with a <RecordStatusNote>
					or at least one <RecordStatusDetail> to convey errors in associated media files (and possibly supplementary editorial queries) */
        "01" => "No record errors – errors in collateral",
        /* Record parsed and ingested with errors, record MUST have a Product record in the Acknowledgement with a <RecordStatusNote>
					or at least one <RecordStatusDetail> to convey errors (and possibly supplementary information, editorial queries or warnings).
					At least SOME of the data in the original Product record has been ingested. There may also be errors in associated media files */
        "02" => "Record with errors",
        /* Entire record rejected, record MUST have a Product record in the Acknowedgemet, with a <RecordStatusNote> or at least one
					<RecordStatusDetail> to convey errors (and possibly supplementary information, editorial queries or warnings). NONE of the
					data in the original Product record has been ingested */
        "03" => "Record rejected",
        /* Record status reported in an earlier Acknowledgement message, based on partial processing of ONIX message. The record MUST
					NOT have a Product record in this Acknowledgement. Code not valid in <RecordStatusDetail> */
        "09" => "Reported previously",
    ];
}