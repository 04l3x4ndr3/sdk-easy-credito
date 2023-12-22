<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;

use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\DocumentType;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\MIMEType;


/**
 * Modelo de Arquivo
 */
class File
{
    protected DocumentType $documentType;
    protected MIMEType $mimeType;
    protected string $name;
    protected string $base64;

    /**
     * @param DocumentType|null $documentType
     * @param MIMEType|null $mimeType
     * @param string|null $name
     * @param string|null $base64
     */
    public function __construct(
        ?DocumentType $documentType,
        ?MIMEType $mimeType,
        ?string $name,
        ?string $base64
    ) {
        $this->documentType = $documentType;
        $this->mimeType = $mimeType;
        $this->name = $name;
        $this->base64 = $base64;
    }

    /**
     * @return DocumentType
     */
    public function getDocumentType(): DocumentType
    {
        return $this->documentType;
    }

    /**
     * @param DocumentType $documentType
     * @return File
     */
    public function setDocumentType(DocumentType $documentType): File
    {
        $this->documentType = $documentType;
        return $this;
    }

    /**
     * @return MIMEType
     */
    public function getMimeType(): MIMEType
    {
        return $this->mimeType;
    }

    /**
     * @param MIMEType $mimeType
     * @return File
     */
    public function setMimeType(MIMEType $mimeType): File
    {
        $this->mimeType = $mimeType;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return File
     */
    public function setName(string $name): File
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getBase64(): string
    {
        return $this->base64;
    }

    /**
     * @param string $base64
     * @return File
     */
    public function setBase64(string $base64): File
    {
        $this->base64 = $base64;
        return $this;
    }
    /**
     * Parse props to array
     *
     * @return array
     */
    public function toArray(): array
    {
        return array_filter([
            'type' => $this->documentType,
            'mimeType' => $this->mimeType,
            'name' => $this->name,
            'base64' => $this->base64
        ], function ($v) {
            return ! is_null($v);
        });
    }
}