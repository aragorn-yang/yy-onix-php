<?php

namespace AragornYang\Onix;

use AragornYang\Onix\CodeLists\CodeList;

class CodeInList
{
    /** @var string|CodeList */
    private $class;
    /** @var string */
    private $code;

    public function __construct(string $class, string $code)
    {
        $this->class = $class;
        $this->code = $code;
        if (!$this->class::validate($code)) {
            $this->class::addToUnrecognisable($code);
            return;
        }
    }

    public function __toString(): string
    {
        return $this->getCode();
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function getDesc(): string
    {
        return $this->class::translate($this->code);
    }
}