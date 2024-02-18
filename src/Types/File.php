<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;

class File
{
    private ?string $type;
    private ?string $mimeType;
    private ?string $name;
    private ?string $base64;

    public function __construct(
        ?string $type = null,
        ?string $mimeType = null,
        ?string $name = null,
        ?string $base64 = null
    )
    {
        $this->type = $type;
        $this->mimeType = $mimeType;
        $this->name = $name;
        $this->base64 = $base64;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(?string $type): File
    {
        $this->type = $type;
        return $this;
    }

    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    public function setMimeType(?string $mimeType): File
    {
        $this->mimeType = $mimeType;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(?string $name): File
    {
        $this->name = $name;
        return $this;
    }

    public function getBase64(): string
    {
        return $this->base64;
    }

    public function setBase64(?string $base64): File
    {
        $this->base64 = $base64;
        return $this;
    }

    public function toArray(): ?array
    {
        return array_filter([
            'type' => $this->type,
            'mimeType' => $this->mimeType,
            'name' => $this->name,
            'base64' => $this->base64
        ], function ($v) {
            return !is_null($v);
        });
    }
}