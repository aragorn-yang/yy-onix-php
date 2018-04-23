<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList17ContributorRole;

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
    protected $prefixToKey = '';
    /** @var string */
    protected $keyNames = '';
    /** @var string */
    protected $biographicalNote = '';
    /** @var ProfessionalAffiliation[] */
    protected $professionalAffiliation = [];

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
        return $this->contributorRole ? $this->contributorRole->getCode() : '';
    }

    public function getContributorRoleDesc(): string
    {
        return $this->contributorRole ? $this->contributorRole->getDesc() : '';
    }

    public function setContributorRole(string $code): void
    {
        $this->contributorRole = new CodeInList(CodeList17ContributorRole::class, $code);
    }

    public function getPersonName(): string
    {
        return $this->personName;
    }

    public function setPersonName(string $personName): void
    {
        $this->personName = $personName;
    }

    public function getPersonNameInverted(): string
    {
        return $this->personNameInverted;
    }

    public function setPersonNameInverted(string $personNameInverted): void
    {
        $this->personNameInverted = $personNameInverted;
    }

    public function getTitlesBeforeNames(): string
    {
        return $this->titlesBeforeNames;
    }

    public function setTitlesBeforeNames(string $titlesBeforeNames): void
    {
        $this->titlesBeforeNames = $titlesBeforeNames;
    }

    public function getNamesBeforeKey(): string
    {
        return $this->namesBeforeKey;
    }

    public function setNamesBeforeKey(string $namesBeforeKey): void
    {
        $this->namesBeforeKey = $namesBeforeKey;
    }

    public function getPrefixToKey(): string
    {
        return $this->prefixToKey;
    }

    public function setPrefixToKey(string $prefixToKey): void
    {
        $this->prefixToKey = $prefixToKey;
    }

    public function getKeyNames(): string
    {
        return $this->keyNames;
    }

    public function setKeyNames(string $keyNames): void
    {
        $this->keyNames = $keyNames;
    }

    public function getProfessionalAffiliation(): array
    {
        return $this->professionalAffiliation;
    }

    public function setProfessionalAffiliation(\SimpleXMLElement $professionalAffiliation): void
    {
        $this->professionalAffiliation[] = ProfessionalAffiliation::buildFromXml($professionalAffiliation);
    }

    public function getBiographicalNote(): string
    {
        return $this->biographicalNote;
    }

    public function setBiographicalNote(string $biographicalNote): void
    {
        $this->biographicalNote = $biographicalNote;
    }
}