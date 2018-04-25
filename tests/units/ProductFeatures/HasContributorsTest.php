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

        //This one has LettersAfterNames, and put full ProfessionalAffiliation text in Affiliation
        $product = $this->getParsedProduct('<Contributor>
<SequenceNumber>1</SequenceNumber>
<ContributorRole>A01</ContributorRole>
<PersonNameInverted>Legge, Dominic</PersonNameInverted>
<NamesBeforeKey>Dominic</NamesBeforeKey>
<KeyNames>Legge</KeyNames>
<LettersAfterNames>O.P.</LettersAfterNames>
<ProfessionalAffiliation>
<Affiliation>Assistant Professor, Pontifical Faculty of the Immaculate Conception, Dominican House of Studies; Assistant Director, Thomistic Institute</Affiliation>
</ProfessionalAffiliation>
</Contributor>');
        $this->assertSame('Dominic Legge', $product->getAuthor()->getPersonName());
        $this->assertSame('Legge, Dominic', $product->getAuthor()->getPersonNameInverted());
        $this->assertSame('Assistant Professor, Pontifical Faculty of the Immaculate Conception, Dominican House of Studies; Assistant Director, Thomistic Institute', $product->getAuthor()->getProfessionalAffiliations()[0]->getAffiliation());

        //This one has TitlesBeforeNames, and put full ProfessionalAffiliation text in ProfessionalPosition
        $product = $this->getParsedProduct('<Contributor>
<SequenceNumber>1</SequenceNumber>
<ContributorRole>A01</ContributorRole>
<PersonNameInverted>Galynker, Igor</PersonNameInverted>
<TitlesBeforeNames>Dr</TitlesBeforeNames>
<NamesBeforeKey>Igor</NamesBeforeKey>
<KeyNames>Galynker</KeyNames>
<ProfessionalAffiliation>
<ProfessionalPosition>Associate Chairman for Research, Department of Psychiatry, Mount Sinai Beth Israel, Director, The Family Center for Bipolar Disorder, Mount Sinai Beth Israel</ProfessionalPosition>
 </ProfessionalAffiliation>
</Contributor>');
        $this->assertSame('Igor Galynker', $product->getAuthor()->getPersonName());
        $this->assertSame('Galynker, Igor', $product->getAuthor()->getPersonNameInverted());
        $this->assertSame('Associate Chairman for Research, Department of Psychiatry, Mount Sinai Beth Israel, Director, The Family Center for Bipolar Disorder, Mount Sinai Beth Israel', $product->getAuthor()->getProfessionalAffiliations()[0]->getProfessionalPosition());
    }
}