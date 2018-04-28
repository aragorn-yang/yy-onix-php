<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\Subject;

trait HasSubjects
{
    /** @var array|Subject[] */
    protected $subjects = [];

    public function getSubjectTexts(): array
    {
        $texts = [];
        foreach ($this->subjects as $subject) {
            $texts[] = $subject->getSubjectHeadingText();
        }
        return $texts;
    }


    /**
     * @return Subject[]
     */
    public function getSubjects(): array
    {
        return $this->subjects;
    }

    public function setSubject(\SimpleXMLElement $xml): void
    {
        $this->subjects[] = Subject::buildFromXml($xml, $this);
    }
}