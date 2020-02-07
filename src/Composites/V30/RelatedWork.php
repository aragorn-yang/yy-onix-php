<?php

namespace AragornYang\Onix\Composites\V30;

use AragornYang\Onix\CodeLists\CodeList161ResourceForm;
use AragornYang\Onix\Composites\Composite;
use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList164WorkRelation;

class RelatedWork extends Composite
{
    /** @var CodeInList */
    protected $workRelationCode;

    public function setWorkRelationCode(string $code): void
    {
        $this->workRelationCode = new CodeInList(CodeList164WorkRelation::class, $code);
    }

    public function getWorkRelationCode(): string
    {
        return $this->workRelationCode ? $this->workRelationCode->code() : '';
    }

    public function getWorkRelationCodeDesc(): string
    {
        return $this->workRelationCode ? $this->workRelationCode->desc() : '';
    }
}