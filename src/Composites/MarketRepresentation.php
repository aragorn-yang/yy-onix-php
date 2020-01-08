<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList69AgentRole;
use AragornYang\Onix\CodeLists\CodeList91CountryCodeISO31661;
use AragornYang\Onix\Composites\AgentIdentifier;
use AragornYang\Onix\Composites\MarketDate;

class MarketRepresentation extends Composite
{
    /** @var AgentIdentifier */
    protected $agentIdentifier;

    /** @var string */
    protected $agentName = '';

    /** @var CodeInList */
    protected $agentRole;

    /** @var CodeInList */
    protected $marketCountry;

    /** @var array|MarketDate */
    protected $marketDate = [];

    public function setAgentIdentifier(\SimpleXMLElement $xml): void
    {
        $this->agentIdentifier = AgentIdentifier::buildFromXml($xml, $this);
    }

    public function getAgentIdentifier(): ?AgentIdentifier
    {
        return $this->agentIdentifier;
    }

    public function setAgentName(string $value): void
    {
        $this->agentName = $value;
    }

    public function getAgentName(): string
    {
        return $this->agentName;
    }

    public function getAgentRole(): string
    {
        return $this->agentRole ? $this->agentRole->code() : '';
    }

    public function getAgentRoleDesc(): string
    {
        return $this->agentRole ? $this->agentRole->desc() : '';
    }

    public function setAgentRole(string $code): void
    {
        $this->agentRole = new CodeInList(CodeList69AgentRole::class, $code);
    }

    public function getMarketCountry(): string
    {
        return $this->marketCountry ? $this->marketCountry->code() : '';
    }

    public function getMarketCountryDesc(): string
    {
        return $this->marketCountry ? $this->marketCountry->desc() : '';
    }

    public function setMarketCountry(string $code): void
    {
        $this->marketCountry = new CodeInList(CodeList91CountryCodeISO31661::class, $code);
    }

    public function setMarketDate(\SimpleXMLElement $xml): void
    {
        $this->marketDate[] = MarketDate::buildFromXml($xml, $this);
    }

    public function getMarketDate(): array
    {
        return $this->marketDate;
    }
}