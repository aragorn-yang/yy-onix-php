<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\Meta\ShortTagToRefName;
use AragornYang\Onix\Onix;

class Composite
{
    /**
     * @param $xml
     * @return static
     */
    public static function buildFromXml($xml)
    {
        $isTagEdition = false;
        $onix = Onix::getInstance();
        if ($onix->isTagEdition()) {
            $isTagEdition = true;
        }
        $composite = new static;
        foreach ($xml as $key => $value) {
            if ($isTagEdition) {
                $key = ShortTagToRefName::find($key);
            }
            $method_name = 'set' . ucfirst($key);
            if (method_exists($composite, $method_name)) {
                $composite->{$method_name}($value);
                continue;
            }
            $array = explode("\\", static::class);
            $onix->addUnrecognisableElement(array_pop($array) . '->' . $key);
        }
        return $composite;
    }
}