<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList17ContributorRole;
use AragornYang\Onix\CodeLists\CodeList49RegionCode;
use AragornYang\Onix\CodeLists\CodeList91CountryCodeISO31661;
use AragornYang\Onix\ProductFeatures\HasLanguageCode;
use AragornYang\Onix\ProductFeatures\HasWebsite;
use SimpleXMLElement;

/**
 * @see PR.8 Authorship in Onix Spec 2.1
 * Class Contributor
 * @package AragornYang\Onix\Composites
 */
class Contributor extends Composite
{
    use HasWebsite, HasLanguageCode;

    /** @var int */
    protected $sequenceNumber = 0;
    /** @var CodeInList */
    protected $contributorRole = '';
    /** @var string */
    protected $personName = '';
    /** @var string */
    protected $personNameInverted = '';

    /** @var string */
    protected $titlesBeforeNames = '';
    /** @var string */
    protected $namesBeforeKey = '';
    /** @var string */
    //protected $prefixToKey = '';
    /** @var string */
    protected $keyNames = '';
    /** @var string */
    //protected $namesAfterKey = '';
    /** @var string */
    //protected $suffixToKey = '';
    /** @var string */
    protected $lettersAfterNames = '';
    /** @var string */
    //protected $titlesAfterNames = '';

    /** @var string */
    protected $biographicalNote = '';
    /** @var ProfessionalAffiliation[] */
    protected $professionalAffiliations = [];

    /** @var CodeInList */
    protected $countryCode;

    /** @var CodeInList */
    protected $regionCode;

    /** @var string */
    protected $suffixToKey = '';

    /** @var string */
    protected $corporateName = '';

    /** @var int */
    protected $sequenceNumberWithinRole = 0;

    /** @var string */
    protected $titlesAfterNames = '';

    /** @var string */
    protected $prefixToKey = '';

    protected const TYPE_OF_AUTHOR = 'A01';

    public function getSequenceNumber(): int
    {
        return $this->sequenceNumber;
    }

    public function setSequenceNumber(SimpleXMLElement $sequenceNumber): void
    {
        $this->sequenceNumber = (int)$sequenceNumber;
    }

    public function getContributorRole(): string
    {
        return $this->contributorRole ? $this->contributorRole->code() : '';
    }

    public function getContributorRoleDesc(): string
    {
        return $this->contributorRole ? $this->contributorRole->desc() : '';
    }

    public function setContributorRole(string $code): void
    {
        $this->contributorRole = new CodeInList(CodeList17ContributorRole::class, $code);
    }

    public function getPersonName(): string
    {
        return $this->personName ?: "{$this->namesBeforeKey} {$this->keyNames}";
    }

    public function setPersonName(string $personName): void
    {
        $this->personName = $personName;
    }

    public function getPersonNameInverted(): string
    {
        return $this->personNameInverted ?: "{$this->keyNames}, {$this->namesBeforeKey}";
    }

    public function setPersonNameInverted(string $personNameInverted): void
    {
        $this->personNameInverted = $personNameInverted;
    }

    public function getNamesBeforeKey(): string
    {
        return $this->namesBeforeKey;
    }

    public function setNamesBeforeKey(string $namesBeforeKey): void
    {
        $this->namesBeforeKey = $namesBeforeKey;
    }

    public function getKeyNames(): string
    {
        return $this->keyNames;
    }

    public function setKeyNames(string $keyNames): void
    {
        $this->keyNames = $keyNames;
    }

    /**
     * @return ProfessionalAffiliation[]
     */
    public function getProfessionalAffiliations(): array
    {
        return $this->professionalAffiliations;
    }

    public function setProfessionalAffiliation(SimpleXMLElement $xml): void
    {
        $this->professionalAffiliations[] = ProfessionalAffiliation::buildFromXml($xml, $this);
    }

    public function getBiographicalNote(): string
    {
        return $this->biographicalNote;
    }

    public function setBiographicalNote(string $biographicalNote): void
    {
        $this->biographicalNote = $biographicalNote;
    }

    public function isAuthor(): bool
    {
        return $this->getContributorRole() === self::TYPE_OF_AUTHOR;
    }

    public function getLettersAfterNames(): string
    {
        return $this->lettersAfterNames;
    }

    public function setLettersAfterNames(string $lettersAfterNames): void
    {
        $this->lettersAfterNames = $lettersAfterNames;
    }

    public function getTitlesBeforeNames(): string
    {
        return $this->titlesBeforeNames;
    }

    public function setTitlesBeforeNames(string $titlesBeforeNames): void
    {
        $this->titlesBeforeNames = $titlesBeforeNames;
    }

    public function setCountryCode(string $code): void
    {
        $this->countryCode = new CodeInList(CodeList91CountryCodeISO31661::class, $code);
    }

    public function getCountryCode(): string
    {
        return $this->countryCode ? $this->countryCode->code() : '';
    }

    public function getCountryCodeDesc(): string
    {
        return $this->countryCode ? $this->countryCode->desc() : '';
    }

    public function setRegionCode(string $code): void
    {
        $this->regionCode = new CodeInList(CodeList49RegionCode::class, $code);
    }

    public function getRegionCode(): string
    {
        return $this->regionCode ? $this->regionCode->code() : '';
    }

    public function getRegionCodeDesc(): string
    {
        return $this->regionCode ? $this->regionCode->desc() : '';
    }

    public function setSuffixToKey(string $suffixToKey): void
    {
        $this->suffixToKey = $suffixToKey;
    }

    public function getSuffixToKey(): string
    {
        return $this->suffixToKey;
    }

    public function setCorporateName(string $corporateName): void
    {
        $this->corporateName = $corporateName;
    }

    public function getCorporateName(): string
    {
        return $this->corporateName;
    }

    public function setSequenceNumberWithinRole($value): void
    {
        $this->sequenceNumberWithinRole = (int)$value;
    }

    public function getSequenceNumberWithinRole(): int
    {
        return $this->sequenceNumberWithinRole;
    }

    public function setTitlesAfterNames(string $value): void
    {
        $this->titlesAfterNames = $value;
    }

    public function getTitlesAfterNames(): string
    {
        return $this->titlesAfterNames;
    }

    public function setPrefixToKey(string $value): void
    {
        $this->prefixToKey = $value;
    }

    public function getPrefixToKey(): string
    {
        return $this->prefixToKey;
    }
}