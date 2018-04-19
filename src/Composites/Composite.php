<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\Onix;
use AragornYang\Onix\ShortTagToRefName;

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
            throw new \RuntimeException("Failed to handle reference name $key, $method_name");
        }
        return $composite;
    }
}