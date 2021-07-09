<?php
require_once 'Address.php';
require_once 'Cart.php';
require_once 'Customer.php';
require_once 'Item.php';
require_once 'ShippingApi.php';

$billingAddress = new Address(
    "752 Wayne St",
    "UNIT 211",
    "Cincinnati",
    45206,
    "OH",
    "Billing"
);

$shippingAddress = new Address(
    "752 Wayne St",
    null,
    "Cincinnati",
    45206,
    "OH",
    "Shipping"
);

$addresses = array($billingAddress,$shippingAddress);

$customer = new Customer(
    "Jerred",
    "Wernke",
    $addresses
);
$itemJeans = new Item(12,"Jeans",1,12.25);
$itemShirt = new Item(1256,"Shirt",2,8.50);
$items = [$itemJeans,$itemShirt];
$cart = new Cart($customer,$items);
/** @var Item $item */
echo "customer_full_name: {$cart->getCustomerFullName()}\n";
foreach ($cart->getItems() as $item) {
    echo "item_name: {$item->getName()}\n";
    echo "item_id: {$item->getId()} \n";
    echo "item_quantity: {$item->getQuantity()}\n";
    echo "item_price: {$item->getPrice()}\n";
}
echo "subTotal: {$cart->getItemsSubtotal()}\n";
echo "total: {$cart->getTotal()}\n";
$billing = $cart->getCustomer()->getBillingAddress();
$shipping = $cart->getCustomer()->getShippingAddress();
echo "billing_address: {$billing->getAddressOne()} {$billing->getAddressTwo()} {$billing->getCity()} {$billing->getState()} {$billing->getZip()} \n";
echo "shipping_address: {$shipping->getAddressOne()} {$shipping->getAddressTwo()} {$shipping->getCity()} {$shipping->getState()} {$shipping->getZip()} \n";
