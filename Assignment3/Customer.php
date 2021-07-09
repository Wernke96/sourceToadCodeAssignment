<?php
class Customer
{
    private string $first_name;
    private string $last_name;
    private array $addresses;

    /**
     * Customer constructor.
     * @param string $first_name
     * @param string $last_name
     * @param array $address
     */
    public function __construct(string $first_name, string $last_name, array $address)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->addresses = $address;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->first_name;
    }

    /**
     * @param string $first_name
     */
    public function setFirstName(string $first_name): void
    {
        $this->first_name = $first_name;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->last_name;
    }

    /**
     * @param string $last_name
     */
    public function setLastName(string $last_name): void
    {
        $this->last_name = $last_name;
    }

    /**
     * @return array
     */
    public function getAddresses(): array
    {
        return $this->addresses;
    }

    /**
     * @param array $addresses
     */
    public function setAddresses(array $addresses): void
    {
        $this->addresses = $addresses;
    }

    public function getShippingAddress() :Address
    {
        $shippingAddress = null;
        /** @var Address $address */
        foreach ($this->addresses as $address)
        {
            if($address->getType() == "Shipping") {
                $shippingAddress = $address;
            }
        }
        return $shippingAddress;
    }

    public function getBillingAddress() :Address
    {
        $shippingAddress = null;
        /** @var Address $address */
        foreach ($this->addresses as $address)
        {
            if($address->getType() == "Billing") {
                $shippingAddress = $address;
            }
        }
        return $shippingAddress;
    }


}