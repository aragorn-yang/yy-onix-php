<?php

namespace AragornYang\Onix\Tests;

use AragornYang\Onix\Composites\Product;
use AragornYang\Onix\SimpleBookParser;
use PHPUnit\Framework\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    public function getParsedProduct(string $productContent): Product
    {
        $parser = new SimpleBookParser;
        $parser->setProductHandler(function (Product $product) {
            $this->parsedProduct = $product;
        });
        $parser->parseString($this->stuffSingleProductContentIntoRefNameEditionV21($productContent));
        return $this->parsedProduct;
    }

    public function stuffSingleProductContentIntoRefNameEditionV21(string $productContent): string
    {
        return $this->stuffIntoRefNameEditionV21(<<<SINGLE
    <Product>
    {$productContent}
    </Product>
SINGLE
        );
    }

    public function stuffSingleProductContentIntoShortTagEditionV21(string $productContent): string
    {
        return $this->stuffIntoShortTagEditionV21(<<<SINGLE
    <product>
    {$productContent}
    </product>
SINGLE
        );
    }

    public function stuffSingleProductContentIntoRefNameEditionV30(string $productContent): string
    {
        return $this->stuffIntoRefNameEditionV30(<<<SINGLE
    <Product>
    {$productContent}
    </Product>
SINGLE
        );
    }

    public function stuffSingleProductContentIntoShortTagEditionV30(string $productContent): string
    {
        return $this->stuffIntoShortTagEditionV30(<<<SINGLE
    <product>
    {$productContent}
    </product>
SINGLE
        );
    }

    public function stuffIntoRefNameEditionV21(string $content): string
    {
        return <<<REF21
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE ONIXMessage SYSTEM "http://www.editeur.org/onix/2.1/reference/onix-international.dtd">
<ONIXMessage>
    {$content}
</ONIXMessage>
REF21;
    }

    public function stuffIntoShortTagEditionV21(string $content): string
    {
        return <<<TAG21
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE ONIXmessage SYSTEM "http://www.editeur.org/onix/2.1/short/onix-international.dtd">
<ONIXmessage>
    {$content}
</ONIXmessage>
TAG21;
    }

    public function stuffIntoRefNameEditionV30(string $content): string
    {
        return <<<REF30
<?xml version="1.0"?>	
<ONIXMessage release="3.0">
    {$content}
</ONIXMessage>
REF30;
    }

    public function stuffIntoShortTagEditionV30(string $content): string
    {
        return <<<TAG30
<?xml version="1.0"?>	
<ONIXmessage release="3.0">
    {$content}
</ONIXmessage>
TAG30;
    }
}