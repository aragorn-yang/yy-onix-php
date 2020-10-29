<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasContentItemsTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<ContentItem>
            <TextItem>
                <TextItemType>03</TextItemType>
            </TextItem>
            <DistinctiveTitle>Introduction
            </DistinctiveTitle>
        </ContentItem>
        <ContentItem>
            <TextItem>
                <TextItemType>03</TextItemType>
            </TextItem>
            <ComponentNumber>1</ComponentNumber>
            <DistinctiveTitle>Simple descriptive methods of analysis
            </DistinctiveTitle>
        </ContentItem>
        <ContentItem>
            <TextItem>
                <TextItemType>03</TextItemType>
            </TextItem>
            <ComponentNumber>2</ComponentNumber>
            <DistinctiveTitle>Theory of stationery processes
            </DistinctiveTitle>
        </ContentItem>
        <ContentItem>
            <TextItem>
                <TextItemType>03</TextItemType>
            </TextItem>
            <DistinctiveTitle>References
            </DistinctiveTitle>
        </ContentItem>
        <ContentItem>
            <TextItem>
                <TextItemType>03</TextItemType>
            </TextItem>
            <DistinctiveTitle>Appendix A, B &amp; C
            </DistinctiveTitle>
        </ContentItem>');
        $this->assertCount(5, $product->getContentItems());
        $this->assertSame([
            'Introduction',
            'Simple descriptive methods of analysis',
            'Theory of stationery processes',
            'References',
            'Appendix A, B & C',
        ], $product->getContentItemTexts());


        $product = $this->getParsedProduct('<ContentItem>
<TextItem>
<TextItemType>03</TextItemType>
</TextItem>
<ComponentTypeName>Heading</ComponentTypeName>
<DistinctiveTitle>Part I. Introduction
</DistinctiveTitle>
</ContentItem>
<ContentItem>
<TextItem>
<TextItemType>03</TextItemType>
</TextItem>
<ComponentNumber>1.</ComponentNumber>
<DistinctiveTitle>Overview of tort law
</DistinctiveTitle>
</ContentItem>
<ContentItem>
<TextItem>
<TextItemType>03</TextItemType>
</TextItem>
<ComponentTypeName>Heading</ComponentTypeName>
<DistinctiveTitle>Part II. Negligent invasions of personal, property, and financial interests
</DistinctiveTitle>
</ContentItem>
<ContentItem>
<TextItem>
<TextItemType>03</TextItemType>
</TextItem>
<ComponentNumber>2.</ComponentNumber>
<DistinctiveTitle>Duty of care I: foundational principles
</DistinctiveTitle>
</ContentItem>');
        $this->assertCount(4, $product->getContentItems());
        $this->assertSame([
            'Part I. Introduction',
            'Overview of tort law',
            'Part II. Negligent invasions of personal, property, and financial interests',
            'Duty of care I: foundational principles',
        ], $product->getContentItemTexts());
    }
}