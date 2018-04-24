<?php

namespace AragornYang\Onix\Tests\Units\ProductFeatures;

use AragornYang\Onix\Tests\TestCase;

class HasOtherTextsTest extends TestCase
{
    /** @test */
    public function product_has_this_feature(): void
    {
        $product = $this->getParsedProduct('<OtherText>
            <TextTypeCode>01</TextTypeCode>
            <Text>BRITISH ENGLISH, A TO ZED is the thoroughly updated, revised, and expanded third edition of Norman
                Schur\'s
                highly acclaimed transatlantic dictionary for English speakers. First published as BRITISH SELF-TAUGHT
                and
                then as ENGLISH ENGLISH, this collection of Briticisms for Americans, and Americanisms for the British,
                is a
                scholarly yet witty lexicon, combining definitions with commentary on the most frequently used and some
                lesser known words and phrases. Highly readable, it\'s a snip of a book, and one that sorts
                out through comments in American  the "Queen\'s English"
                confounding as it may seem.
            </Text>
        </OtherText>
        <OtherText>
            <TextTypeCode>08</TextTypeCode>
            <Text>Norman Schur is without doubt the outstanding authority on the similarities and differences between
                British and American English. BRITISH ENGLISH, A TO ZED attests not only to his expertise, but also to
                his
                undiminished powers to inform, amuse and entertain. Laurence Urdang, Editor, VERBATIM, The
                Language
                Quarterly, Spring 1988
            </Text>
        </OtherText>');
        $this->assertSame(0, stripos($product->getMainDescription(),
            'BRITISH ENGLISH, A TO ZED is the thoroughly updated, revised, and expanded third edition of Norman'));
        $this->assertSame(0, stripos($product->getReviewQuote(),
            'Norman Schur is without doubt the outstanding authority on the similarities and differences between'));
    }
}