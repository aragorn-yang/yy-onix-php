<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList17ContributorRole;

/**
 * @see PR.8 Authorship in Onix Spec 2.1
 * Class Contributor
 * @package AragornYang\Onix\Composites
 */
class Contributor extends Composite
{
    /** @var int */
    protected $sequenceNumber = 0;
    /** @var CodeInList */
    protected $contributorRole;
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

    protected const TYPE_OF_AUTHOR = 'A01';

    public function getSequenceNumber(): int
    {
        return $this->sequenceNumber;
    }

    public function setSequenceNumber(\SimpleXMLElement $sequenceNumber): void
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

    public function setProfessionalAffiliation(\SimpleXMLElement $xml): void
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
}