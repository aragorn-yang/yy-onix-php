<?php

namespace AragornYang\Onix\Composites\V30;

use AragornYang\Onix\Composites\Composite;
use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList148CollectionType;

class Collection extends Composite
{
    /** @var CodeInList */
    protected $collectionType;

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
}