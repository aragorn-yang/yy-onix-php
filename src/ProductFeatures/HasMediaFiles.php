<?php

namespace AragornYang\Onix\ProductFeatures;

use AragornYang\Onix\Composites\MediaFile;
use SimpleXMLElement;

trait HasMediaFiles
{
    /** @var array|MediaFile[] */
    protected $mediaFiles = [];

    /**
     * @return MediaFile[]
     */
    public function getMediaFiles(): array
    {
        return $this->mediaFiles;
    }

    public function setMediaFile(SimpleXMLElement $xml): void
    {
        $this->mediaFiles[] = MediaFile::buildFromXml($xml, $this);
    }

    public function getFrontCoverLink(): string
    {
        foreach ($this->mediaFiles as $mediaFile) {
            if ($mediaFile->isFrontCover()) {
                return $mediaFile->getMediaFileLink();
            }
        }
        return '';
    }
}