<?php
class Cart
{
    private Customer $customer;
    private array $items;

    /**
     * Cart constructor.
     * @param Customer $customer
     * @param array $items
     */
    public function __construct(Customer $customer, array $items)
    {
        $this->customer = $customer;
        $this->items = $items;
    }

    /**
     * @return Customer
     */
    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    public function getCustomerFullName() :string
    {
        return "{$this->getCustomer()->getFirstName()} {$this->getCustomer()->getLastName()}";
    }

    /**
     * @param Customer $customer
     */
    public function setCustomer(Customer $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param array $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

    public function getItemsSubtotal() :float
    {
        $subtotal = 0.0;
        /** @var Item $item */
        foreach($this->items as $item) {
            $subtotal += $item->getPrice();
        }
        return round($subtotal,2);
    }

    public function getShipToAddress() :Address
    {
        return $this->getCustomer()->getShippingAddress();
    }

    public function getTotal()
    {
        $price = $this->getItemsSubtotal();
        $taxRate = $price * 7 / 100;
        $taxRateAndPrice = $price + $taxRate;
        return $taxRateAndPrice + ShippingApi::getShippingRate();
    }


}