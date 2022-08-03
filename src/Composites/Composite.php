<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\Meta\ShortTagToRefName;
use AragornYang\Onix\Onix;
use SimpleXMLElement;

class Composite
{
    /** @var string */
    protected $compositeName = '';
    /** @var string */
    protected $compositePosition = '';
    /** @var Composite|null */
    protected $parent;

    public function __construct(Composite $parent = null)
    {
        $this->parent = $parent;
    }

    /**
     * @param  SimpleXMLElement  $xml
     * @param  Composite|null  $parent
     * @return static
     */
    public static function buildFromXml(SimpleXMLElement $xml, Composite $parent = null): Composite
    {
        $isTagEdition = false;
        $onix = Onix::getInstance();
        if ($onix->isTagEdition()) {
            $isTagEdition = true;
        }
        $composite = new static($parent);
        foreach ($xml as $key => $value) {
            $code = '';
            if ($isTagEdition) {
                $code = $key;
                $key = ShortTagToRefName::find($key);
            }
            $key = ucfirst($key);
            if ($key === 'BASICMainSubject') {
                $key = 'BISACMainSubject';
            } elseif ($key === 'BASICVersion') {
                $key = 'BISACVersion';
            }
            $method_name = "set{$key}";
            if (method_exists($composite, $method_name)) {
                $composite->{$method_name}($value);
                $composite->recordElementPosition($key);
                continue;
            }
            $composite->recordUnrecognisableElement($key, $code);
        }
        return $composite;
    }

    protected function recordUnrecognisableElement(string $key, string $code = ''): void
    {
        Onix::getInstance()->recordUnrecognisableElement($this->getCompositePosition() . '->' . $key, $code);
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
        $compositeName = $this->getCompositeName();
        if (!$this->parent) {
            $this->compositePosition = $compositeName;
            return;
        }

        $this->compositePosition = $this->parent->getCompositePosition() . '->' . $compositeName;
    }

    private function recordElementPosition(string $key): void
    {
        Onix::getInstance()->recordElementPosition($this->getCompositePosition() . '->' . $key);
    }

    public function getCompositeName(): string
    {
        if ($this->compositeName) {
            return $this->compositeName;
        }

        $array = explode("\\", static::class);
        return array_pop($array);
    }
}