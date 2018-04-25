<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasContainedItemsTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<ContainedItem>
<ProductForm>BC</ProductForm>
<ItemQuantity>1</ItemQuantity>
</ContainedItem>
<ContainedItem>
<ProductForm>DD</ProductForm>
<ItemQuantity>1</ItemQuantity>
</ContainedItem>');
        $containedItems = $product->getContainedItems();
        $this->assertCount(2, $containedItems);

        $this->assertSame('BC', $containedItems[0]->getProductForm());
        $this->assertSame('Paperback / softback', $containedItems[0]->getProductFormDesc());
        $this->assertSame(1, $containedItems[0]->getItemQuantity());

        $this->assertSame('DD', $containedItems[1]->getProductForm());
        $this->assertSame('DVD', $containedItems[1]->getProductFormDesc());
        $this->assertSame(1, $containedItems[1]->getItemQuantity());
    }

    /** @test */
    public function product_has_this_feature2(): void
    {
        $product = $this->getParsedProduct('<ContainedItem>
<ProductIdentifier><ProductIDType>03</ProductIDType>
<IDValue>9780199116546</IDValue>
</ProductIdentifier>
<ProductFormDescription>This is a pack of 10 toys</ProductFormDescription>

<ItemQuantity>10</ItemQuantity>
</ContainedItem>');
        $containedItems = $product->getContainedItems();
        $this->assertCount(1, $containedItems);

        $this->assertSame('9780199116546', $containedItems[0]->getIsbn13());
        $this->assertSame('This is a pack of 10 toys', $containedItems[0]->getProductFormDescription());
        $this->assertSame(10, $containedItems[0]->getItemQuantity());
    }
}