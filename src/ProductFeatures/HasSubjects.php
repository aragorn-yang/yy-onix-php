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

    /**
     * @return Subject[]
     */
    public function getBISACSubject(): ?Subject
    {
        foreach ($this->subjects as $subject) {
            if ('10' !== $subject->getSubjectSchemeIdentifier()) {
                continue;
            }

            return $subject;
        }

        return null;
    }

    /**
     * @return Subject[]
     */
    public function getBICSubject(): ?Subject
    {
        foreach ($this->subjects as $subject) {
            if ('12' !== $subject->getSubjectSchemeIdentifier()) {
                continue;
            }

            return $subject;
        }

        return null;
    }

    public function setSubject(\SimpleXMLElement $xml): void
    {
        $this->subjects[] = Subject::buildFromXml($xml, $this);
    }
}
