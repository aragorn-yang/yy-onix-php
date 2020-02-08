<?php

namespace AragornYang\Onix\Composites\V30;

use AragornYang\Onix\Composites\Composite;
use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList13SeriesIdentifierType;

class CollectionIdentifier extends Composite
{
    /** @var CodeInList */
    protected $collectionIDType;

    /** @var string */
    protected $IDValue = '';

    public function getCollectionIDType(): string
    {
        return $this->collectionIDType ? $this->collectionIDType->code() : '';
    }

    public function getCollectionIDTypeDesc(): string
    {
        return $this->collectionIDType ? $this->collectionIDType->desc() : '';
    }

    public function setCollectionIDType(string $code): void
    {
        $this->collectionIDType = new CodeInList(CodeList13SeriesIdentifierType::class, $code);
    }

    public function setIDValue(string $value): void
    {
        $this->IDValue = $value;
    }

    public function getIDValue(): string
    {
        return $this->IDValue;
    }
}