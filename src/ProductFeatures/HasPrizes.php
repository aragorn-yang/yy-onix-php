<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\Prize;
use SimpleXMLElement;

trait HasPrizes
{
    /** @var array|Prize[] */
    protected $prizes = [];

    public function getPrizeNames(): array
    {
        $names = [];
        foreach ($this->prizes as $prize) {
            $names[] = $prize->getPrizeName();
        }
        return $names;
    }

    /**
     * @return Prize[]
     */
    public function getPrizes(): array
    {
        return $this->prizes;
    }

    public function setPrize(SimpleXMLElement $xml): void
    {
        $this->prizes[] = Prize::buildFromXml($xml, $this);
    }
}