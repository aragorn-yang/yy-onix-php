<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList64PublishingStatus;

trait HasPublishingStatus
{
    /** @var CodeInList */
    protected $publishingStatus;

    public function getPublishingStatus(): string
    {
        return $this->publishingStatus ? $this->publishingStatus->code() : '';
    }

    public function getPublishingStatusDesc(): string
    {
        return $this->publishingStatus ? $this->publishingStatus->desc() : '';
    }

    public function setPublishingStatus(string $code): void
    {
        $this->publishingStatus = new CodeInList(CodeList64PublishingStatus::class, $code);
    }
}