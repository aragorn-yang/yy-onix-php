<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList1NotificationOrUpdateType;

trait HasNotificationType
{
    /** @var CodeInList */
    protected $notificationType;

    public function getNotificationType(): string
    {
        return $this->notificationType ? $this->notificationType->code() : '';
    }

    public function getNotificationTypeDesc(): string
    {
        return $this->notificationType ? $this->notificationType->desc() : '';
    }

    public function setNotificationType(string $code): void
    {
        $this->notificationType = new CodeInList(CodeList1NotificationOrUpdateType::class, $code);
    }
}