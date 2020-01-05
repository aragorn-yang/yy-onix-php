<?php

namespace AragornYang\Onix;

use AragornYang\Onix\Composites\Product;
use SimpleXMLElement;

/**
 * Singleton
 */
final class Onix
{
    /** @var Onix */
    private static $instance;
    private const EDITION_TAG = 'Tag';
    private const EDITION_REF = 'Ref';

    /** @var string */
    private $version = '';
    /** @var string */
    private $edition = '';
    /** @var array */
    private $elementPositions = [];
    /** @var array */
    private $unrecognisableElements = [];
    /** @var array */
    private $unrecognisableCodes = [];

    private function __construct()
    {
    }

    public static function getInstance(): Onix
    {
        if (self::$instance) {
            return self::$instance;
        }
        return self::getNewInstance();
    }

    public static function getNewInstance(): Onix
    {
        return self::$instance = new self;
    }

    public function getUnrecognisableElements(): array
    {
        return $this->unrecognisableElements;
    }

    public function recordUnrecognisableElement(string $key, string $code = ''): void
    {
        $_key = $code ? "{$key}_{$code}" : $key;
        $this->unrecognisableElements[$_key] = ($this->unrecognisableElements[$_key] ?? 0) + 1;
    }

    public function getElementPositions(): array
    {
        return $this->elementPositions;
    }

    public function recordElementPosition(string $key): void
    {
        $this->elementPositions[$key] = ($this->elementPositions[$key] ?? 0) + 1;
    }

    public function getUnrecognisableCodes(): array
    {
        return $this->unrecognisableCodes;
    }

    public function recordUnrecognisableCode(string $key, string $value): void
    {
        $keyValuePair = trim($key) . ':' . trim($value);
        $this->unrecognisableCodes[$keyValuePair] = ($this->unrecognisableCodes[$keyValuePair] ?? 0) + 1;
    }

    private function __clone()
    {

    }

    public function __wakeup()
    {
        throw new \RuntimeException('Try to unserialize a singleton instance');
    }

    public function version(): string
    {
        return $this->version;
    }

    public function setVersion(string $version): void
    {
        $this->version = $version;
    }

    public function buildProduct(SimpleXMLElement $xml): Product
    {
        return (new ProductBuilder($this->version))->build($xml);
    }

    public function setAsRefEdition(): void
    {
        $this->edition = static::EDITION_REF;
    }

    public function setAsTagEdition(): void
    {
        $this->edition = static::EDITION_TAG;
    }

    public function isRefEdition(): bool
    {
        return $this->edition === static::EDITION_REF;
    }

    public function isTagEdition(): bool
    {
        return $this->edition === static::EDITION_TAG;
    }

    public function getProductKey(): string
    {
        if ($this->isTagEdition()) {
            return 'product';
        }
        return 'Product';
    }
}