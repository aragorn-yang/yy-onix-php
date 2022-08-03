<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList30AudienceRangeQualifier;
use AragornYang\Onix\CodeLists\CodeList31AudienceRangePrecision;
use AragornYang\Onix\CodeLists\CodeList77USAndCanadaExcludingQubecSchoolOrCollegeGrade;

class AudienceRange extends Composite
{
    /** @var CodeInList */
    protected $audienceRangeQualifier;

    /** @var array|CodeInList */
    protected $audienceRangePrecision = [];

    /** @var array|CodeInList */
    protected $audienceRangeValue = [];

    public function setAudienceRangeQualifier(string $code): void
    {
        $this->audienceRangeQualifier = new CodeInList(CodeList30AudienceRangeQualifier::class, $code);
    }

    public function getAudienceRangeQualifierDesc(): string
    {
        return $this->audienceRangeQualifier->desc();
    }

    public function getAudienceRangeQualifier(): string
    {
        return $this->audienceRangeQualifier->code();
    }

    public function setAudienceRangePrecision(string $code): void
    {
        $this->audienceRangePrecision[] = new CodeInList(CodeList31AudienceRangePrecision::class, $code);
    }

    public function getAudienceRangePrecision(): array
    {
        return $this->audienceRangePrecision;
    }

    public function setAudienceRangeValue(string $code): void
    {
        $this->audienceRangeValue[] = new CodeInList(CodeList77USAndCanadaExcludingQubecSchoolOrCollegeGrade::class,
            $code);
    }

    public function getAudienceRangeValue(): array
    {
        return $this->audienceRangeValue;
    }
}