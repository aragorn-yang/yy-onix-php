<?php

namespace AragornYang\Onix\CodeLists;

class CodeList160ResourceFeatureType extends CodeList
{
    public const KEY = 'ResourceFeatureType';

    protected const MAPPING = [
        /* Credit that must be displayed when a resource is used (eg ‘Photo Jerry Bauer’ or ‘© Magnum Photo’). Credit text should be
					carried in <FeatureNote> */
        "01" => "Required credit",
        /* Explanatory caption that may accompany a resource (eg use to identify an author in a photograph). Caption text should be carried
					in <FeatureNote> */
        "02" => "Caption",
        /* Copyright holder of resource (indicative only, as the resource can be used without consultation). Copyright text should be
					carried in <FeatureNote> */
        "03" => "Copyright holder",
        /* Approximate length in minutes of an audio or video resource. <FeatureValue> should contain the length of time as an integer
					number of minutes */
        "04" => "Length in minutes",
        /* Use to link resource to a contributor unambiguously, for example with Resource Content types 04, 11–14 from List 158, particularly
					where the product has more than a single contributor. <FeatureValue> contains the 16-digit ISNI */
        "05" => "ISNI of resource contributor",
        /* Use to link resource to a contributor unambiguously, for example with Resource Content types 04, 11–14 from List 158, particularly
					where the product has more than a single contributor. <FeatureValue> contains the proprietary ID, which must match a proprietary
					ID given in an instance of <Contributor> */
        "06" => "Proprietary ID of resource contributor",
    ];
}