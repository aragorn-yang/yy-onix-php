<?php

namespace AragornYang\Onix\Composites\V30;

use AragornYang\Onix\Composites\Composite;
use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList163PublishingDateRole;

class PublishingDate extends Composite
{
    /** @var CodeInList */
    protected $publishingDateRole;

    /** @var string */
    protected $date = '';

    public function setPublishingDateRole(string $code): void
    {
        $this->publishingDateRole = new CodeInList(CodeList163PublishingDateRole::class, $code);
    }

    public function getPublishingDateRole(): string
    {
        return $this->publishingDateRole ? $this->publishingDateRole->code() : '';
    }

    public function getPublishingDateRoleDesc(): string
    {
        return $this->publishingDateRole ? $this->publishingDateRole->desc() : '';
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function setDate(string $value): void
    {
        $this->date = $value;
    }
}