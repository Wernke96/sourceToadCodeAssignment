<?php


class Address
{
    private string $addressOne;
    private ?string $addressTwo;
    private string $city;
    private string $zip;
    private string $state;
    private string $type;

    /**
     * Address constructor.
     * @param string $addressOne
     * @param string|null $addressTwo
     * @param string $city
     * @param string $zip
     * @param string $state
     */
    public function __construct(
        string $addressOne,
        ?string $addressTwo,
        string $city,
        string $zip,
        string $state,
        string $type
    )
    {
        $this->addressOne = $addressOne;
        $this->addressTwo = $addressTwo;
        $this->city = $city;
        $this->zip = $zip;
        $this->state = $state;
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getAddressOne(): string
    {
        return $this->addressOne;
    }

    /**
     * @param string $addressOne
     */
    public function setAddressOne(string $addressOne): void
    {
        $this->addressOne = $addressOne;
    }

    /**
     * @return string|null
     */
    public function getAddressTwo(): ?string
    {
        return $this->addressTwo;
    }

    /**
     * @param string|null $addressTwo
     */
    public function setAddressTwo(?string $addressTwo): void
    {
        $this->addressTwo = $addressTwo;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getZip(): string
    {
        return $this->zip;
    }

    /**
     * @param string $zip
     */
    public function setZip(string $zip): void
    {
        $this->zip = $zip;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }


}