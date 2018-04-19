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

    private function __construct()
    {
    }

    private function __clone()
    {

    }

    public function __wakeup()
    {
        throw new \RuntimeException('Try to unserialize a singleton instance');
    }

    public static function getInstance(): Onix
    {
        if (self::$instance) {
            return self::$instance;
        }
        return self::$instance = new self;
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
        return (new ProductBuilder($xml))->build();
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