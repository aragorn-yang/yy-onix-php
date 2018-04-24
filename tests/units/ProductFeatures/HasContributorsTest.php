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

        $product = $this->getParsedProduct('<Contributor>
            <SequenceNumber>1</SequenceNumber>
            <ContributorRole>A01</ContributorRole>
            <NamesBeforeKey>Peter J.</NamesBeforeKey>
            <KeyNames>Diggle</KeyNames>
            <ProfessionalAffiliation>
                <ProfessionalPosition>Professor of Statistics, Department of Mathematics</ProfessionalPosition>
                <Affiliation>University of Lancaster</Affiliation>
            </ProfessionalAffiliation>
        </Contributor>');
        $this->assertSame('Peter J. Diggle', $product->getAuthor()->getPersonName());
        $this->assertSame('Diggle, Peter J.', $product->getAuthor()->getPersonNameInverted());
        $this->assertSame('University of Lancaster', $product->getAuthor()->getProfessionalAffiliations()[0]->getAffiliation());
        $this->assertSame('Professor of Statistics, Department of Mathematics', $product->getAuthor()->getProfessionalAffiliations()[0]->getProfessionalPosition());
    }
}