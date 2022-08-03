<?php

namespace AragornYang\Onix\Composites\V30;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList93SupplierRole;
use AragornYang\Onix\Composites\Composite;

class Supplier extends Composite
{
    /** @var CodeInList */
    protected $supplierRole;

    /** @var array */
    protected $supplierName;

    public function setSupplierRole(string $code): void
    {
        $this->supplierRole = new CodeInList(CodeList93SupplierRole::class, $code);
    }

    public function getSupplierRole(): string
    {
        return $this->supplierRole ? $this->supplierRole->code() : '';
    }

    public function getSupplierRoleDesc(): string
    {
        return $this->supplierRole ? $this->supplierRole->desc() : '';
    }

    public function setSupplierName(string $value): void
    {
        $this->supplierName[] = $value;
    }

    public function getSupplierName(): array
    {
        return $this->supplierName;
    }
}