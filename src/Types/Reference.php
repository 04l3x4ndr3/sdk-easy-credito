<?php
namespace O4l3x4ndr3\SdkEasyCredito\Types;
/**
 * Classe de Contato para Referência
 */
class Reference
{
    protected string $name;
    protected int $phone;
    /**
     * @param string $name
     * @param int $phone
     */
    public function __construct(string $name, int $phone)
    {
        $this->name = $name;
        $this->phone = $phone;
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
     * @return Reference
     */
    public function setName(string $name): Reference
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getPhone(): int
    {
        return $this->phone;
    }

    /**
     * @param int $phone
     * @return Reference
     */
    public function setPhone(int $phone): Reference
    {
        $this->phone = $phone;
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
            'name' => $this->name,
            'phone' => $this->phone
        ], function ($v) {
            return ! is_null($v);
        });
    }
}