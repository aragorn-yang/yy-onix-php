<?php

namespace AragornYang\Onix\Composites;

use AragornYang\Onix\CodeInList;
use AragornYang\Onix\CodeLists\CodeList38ImageAudioVideoFileType;
use AragornYang\Onix\CodeLists\CodeList39ImageAudioVideoFileFormat;
use AragornYang\Onix\CodeLists\CodeList40ImageAudioVideoFileLinkType;

class MediaFile extends Composite
{
    protected const TYPE_OF_FRONT_COVER = '04';
    /** @var CodeInList */
    protected $mediaFileTypeCode;
    /** @var CodeInList */
    protected $mediaFileFormatCode;
    /** @var CodeInList */
    protected $mediaFileLinkTypeCode;
    /** @var string */
    protected $mediaFileLink = '';

    /** @var string */
    protected $mediaFileDate = '';

    /** @var string */
    protected $downloadCredit = '';

    public function getMediaFileTypeCode(): string
    {
        return $this->mediaFileTypeCode ? $this->mediaFileTypeCode->code() : '';
    }

    public function getMediaFileTypeCodeDesc(): string
    {
        return $this->mediaFileTypeCode ? $this->mediaFileTypeCode->desc() : '';
    }

    public function setMediaFileTypeCode(string $code): void
    {
        $this->mediaFileTypeCode = new CodeInList(CodeList38ImageAudioVideoFileType::class, $code);
    }

    public function getMediaFileFormatCode(): string
    {
        return $this->mediaFileFormatCode ? $this->mediaFileFormatCode->code() : '';
    }

    public function getMediaFileFormatCodeDesc(): string
    {
        return $this->mediaFileFormatCode ? $this->mediaFileFormatCode->desc() : '';
    }

    public function setMediaFileFormatCode(string $code): void
    {
        $this->mediaFileFormatCode = new CodeInList(CodeList39ImageAudioVideoFileFormat::class, $code);
    }

    public function getMediaFileLinkTypeCode(): string
    {
        return $this->mediaFileLinkTypeCode ? $this->mediaFileLinkTypeCode->code() : '';
    }

    public function getMediaFileLinkTypeCodeDesc(): string
    {
        return $this->mediaFileLinkTypeCode ? $this->mediaFileLinkTypeCode->desc() : '';
    }

    public function setMediaFileLinkTypeCode(string $code): void
    {
        $this->mediaFileLinkTypeCode = new CodeInList(CodeList40ImageAudioVideoFileLinkType::class, $code);
    }

    public function getMediaFileLink(): string
    {
        return $this->mediaFileLink;
    }

    public function setMediaFileLink(string $mediaFileLink): void
    {
        $this->mediaFileLink = trim($mediaFileLink);
    }

    public function isFrontCover(): bool
    {
        return (string)$this->mediaFileTypeCode === self::TYPE_OF_FRONT_COVER;
    }

    public function setMediaFileDate(string $value): void
    {
        $this->mediaFileDate = $value;
    }

    public function getMediaFileDate(): string
    {
        return $this->mediaFileDate;
    }

    public function setDownloadCredit(string $value): void
    {
        $this->downloadCredit = $value;
    }

    public function getDownloadCredit(): string
    {
        return $this->downloadCredit;
    }
}