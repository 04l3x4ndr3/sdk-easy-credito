<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;

/**
 * Modelo de Arquivo
 */
class File
{
    protected ?string $documentType;
    protected ?string $mimeType;
    protected ?string $name;
    protected ?string $base64;

    /**
     * @param string|null $documentType
     * @param string|null $mimeType
     * @param string|null $name
     * @param string|null $base64
     */
    public function __construct(
        ?string $documentType = null,
        ?string $mimeType = null,
        ?string $name = null,
        ?string $base64 = null
    ) {
        $this->documentType = $documentType;
        $this->mimeType = $mimeType;
        $this->name = $name;
        $this->base64 = $base64;
    }

    /**
     * @return string
     */
    public function getDocumentType(): string
    {
        return $this->documentType;
    }

    /**
     * @param string $documentType
     * @return File
     */
    public function setDocumentType(string $documentType): File
    {
        $this->documentType = $documentType;
        return $this;
    }

    /**
     * @return string
     */
    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    /**
     * @param string $mimeType
     * @return File
     */
    public function setMimeType(string $mimeType): File
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