<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasContributorsTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<Contributor>
            <SequenceNumber>1</SequenceNumber>
            <ContributorRole>A01</ContributorRole>
            <PersonNameInverted>Schur, Norman W</PersonNameInverted>
            <BiographicalNote>A Harvard graduate in Latin and Italian literature, Norman Schur attended the University
                of
                Rome and the Sorbonne before returning to the United States to study law at Harvard and Columbia Law
                Schools. Now retired from legal practise, Mr Schur is a fluent speaker and writer of both British and
                American English.
            </BiographicalNote>
        </Contributor>');
        $this->assertSame('Schur, Norman W', $product->getAuthor()->getPersonNameInverted());
    }
}