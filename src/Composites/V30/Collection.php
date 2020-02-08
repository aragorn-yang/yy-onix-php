<?php

namespace AragornYang\Onix\Composites\V30;

use AragornYang\Onix\Composites\Composite;
use AragornYang\Onix\ProductFeatures\V30\HasTitleDetails;
use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList148CollectionType;
use AragornYang\Onix\Composites\V30\CollectionSequence;

class Collection extends Composite
{
    use HasTitleDetails;

    /** @var CodeInList */
    protected $collectionType;

    /** @var CollectionSequence[] */
    protected $collectionSequences;

    public function setCollectionType(string $code): void
    {
        $this->collectionType = new CodeInList(CodeList148CollectionType::class, $code);
    }

    public function getCollectionType(): string
    {
        return $this->collectionType ? $this->collectionType->code() : '';
    }

    public function getCollectionTypeDesc(): string
    {
        return $this->collectionType ? $this->collectionType->desc() : '';
    }

    public function setCollectionSequence(\SimpleXMLElement $xml): void
    {
        $this->collectionSequences[] = CollectionSequence::buildFromXml($xml, $this);
    }

    public function getCollectionSequences(): array
    {
        return $this->collectionSequences;
    }
}