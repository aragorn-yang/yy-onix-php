<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\Meta\ShortTagToRefName;
use AragornYang\Onix\Onix;

class Composite
{
    /** @var string */
    protected $compositePosition = '';
    /** @var Composite|null */
    protected $parent;

    public function __construct(Composite $parent = null)
    {
        $this->parent = $parent;
    }

    /**
     * @param \SimpleXMLElement $xml
     * @param Composite|null $parent
     * @return static
     */
    public static function buildFromXml(\SimpleXMLElement $xml, Composite $parent = null)
    {
        $isTagEdition = false;
        $onix = Onix::getInstance();
        if ($onix->isTagEdition()) {
            $isTagEdition = true;
        }
        $composite = new static($parent);
        foreach ($xml as $key => $value) {
            if ($isTagEdition) {
                $key = ShortTagToRefName::find($key);
            }
            $key = ucfirst($key);
            $method_name = "set{$key}";
            if (method_exists($composite, $method_name)) {
                $composite->{$method_name}($value);
                $composite->recordElementPosition($key);
                continue;
            }
            $composite->recordUnrecognisableElement($key);
        }
        return $composite;
    }

    protected function recordUnrecognisableElement(string $key): void
    {
        Onix::getInstance()->recordUnrecognisableElement($this->getCompositePosition() . '->' . $key);
    }

    public function getCompositePosition(): string
    {
        if (!$this->compositePosition) {
            $this->setCompositePosition();
        }
        return $this->compositePosition;
    }

    protected function setCompositePosition(): void
    {
        $array = explode("\\", static::class);
        if (!$this->parent) {
            $this->compositePosition = array_pop($array);
            return;
        }

        $this->compositePosition = $this->parent->getCompositePosition() . '->' . array_pop($array);
    }

    private function recordElementPosition(string $key): void
    {
        Onix::getInstance()->recordElementPosition($this->getCompositePosition() . '->' . $key);
    }
}