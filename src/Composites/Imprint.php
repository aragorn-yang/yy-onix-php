<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList44NameCodeType;
use AragornYang\Onix\Composites\V30\ImprintIdentifier;
use SimpleXMLElement;

class Imprint extends Composite
{
    /** @var CodeInList */
    protected $nameCodeType;
    /** @var string */
    protected $nameCodeTypeName = '';
    /** @var string */
    protected $nameCodeValue = '';
    /** @var string */
    protected $imprintName = '';

    /** @var ImprintIdentifier[] */
    protected $imprintIdentifier;

    public function getImprintName(): string
    {
        return $this->imprintName;
    }

    public function setImprintName(string $imprintName): void
    {
        $this->imprintName = $imprintName;
    }

    public function getNameCodeType(): string
    {
        return $this->nameCodeType ? $this->nameCodeType->code() : '';
    }

    public function getNameCodeTypeDesc(): string
    {
        return $this->nameCodeType ? $this->nameCodeType->desc() : '';
    }

    public function setNameCodeType(string $code): void
    {
        $this->nameCodeType = new CodeInList(CodeList44NameCodeType::class, $code);
    }

    public function getNameCodeTypeName(): string
    {
        return $this->nameCodeTypeName;
    }

    public function setNameCodeTypeName(string $nameCodeTypeName): void
    {
        $this->nameCodeTypeName = $nameCodeTypeName;
    }

    public function getNameCodeValue(): string
    {
        return $this->nameCodeValue;
    }

    public function setNameCodeValue(string $nameCodeValue): void
    {
        $this->nameCodeValue = $nameCodeValue;
    }

    public function setImprintIdentifier(SimpleXMLElement $xml): void
    {
        $this->imprintIdentifier[] = ImprintIdentifier::buildFromXml($xml, $this);
    }

    public function getImprintIdentifier(): array
    {
        return $this->imprintIdentifier;
    }
}