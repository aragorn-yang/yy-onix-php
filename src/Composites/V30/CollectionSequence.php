<?php

namespace AragornYang\Onix\Composites\V30;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList197CollectionSequenceType;
use AragornYang\Onix\Composites\Composite;

class CollectionSequence extends Composite
{
    /** @var CodeInList */
    protected $collectionSequenceType;

    /** @var int */
    protected $collectionSequenceNumber;

    public function setCollectionSequenceType(string $code): void
    {
        $this->collectionSequenceType = new CodeInList(CodeList197CollectionSequenceType::class, $code);
    }

    public function getCollectionSequenceType(): string
    {
        return $this->collectionSequenceType ? $this->collectionSequenceType->code() : '';
    }

    public function getCollectionSequenceTypeDesc(): string
    {
        return $this->collectionSequenceType ? $this->collectionSequenceType->desc() : '';
    }

    public function setCollectionSequenceNumber(string $value): void
    {
        $this->collectionSequenceNumber = (int)$value;
    }

    public function getCollectionSequenceNumber(): int
    {
        return $this->collectionSequenceNumber;
    }
}