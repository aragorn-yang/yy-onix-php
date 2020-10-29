<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasSubjectsTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<Subject>
            <SubjectSchemeIdentifier>12</SubjectSchemeIdentifier>
            <SubjectSchemeVersion>2.0</SubjectSchemeVersion>
            <SubjectCode>PS</SubjectCode>
            <SubjectHeadingText>Biology, life sciences</SubjectHeadingText>
        </Subject>
        <Subject>
            <SubjectSchemeIdentifier>12</SubjectSchemeIdentifier>
            <SubjectSchemeVersion>2.0</SubjectSchemeVersion>
            <SubjectCode>PBT</SubjectCode>
            <SubjectHeadingText>Probability &amp; statistics</SubjectHeadingText>
        </Subject>');
        $this->assertSame(['Biology, life sciences', 'Probability & statistics'], $product->getSubjectTexts());
    }
}