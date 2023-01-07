<?php

namespace App;

use App\Cart\Item;
use App\Cart\ShoppingCart;
use App\Order\Order;
use App\Invoice\TextInvoiceStrategy;
use App\Invoice\PDFInvoiceStrategy;
use App\Customer\Customer;
use App\Payments\CashOnDeliveryStrategy;
use App\Payments\CreditCardStrategy;
use App\Payments\PaymentStrategy;
use App\Payments\PaypalStrategy;

class Application
{
    public static function run()
    {
        $prod1 = new Item('JEIKY', 'Men PU Leather Hard Bottom Sneakers Construction Shoes' , 3000);
        $prod2 = new Item('Converse', 'Highcut Chuck Taylor All Star Core', 4000);
        $prod3 = new Item('Air Force', 'Running Sneaker Shoes', 5000);

        $shopping_cart = new ShoppingCart();
        $shopping_cart->addItem($prod1, 3);
        $shopping_cart->addItem($prod2, 2);
        $customer = new Customer('Bobby Marcko L. Cruz', 'Tapulao, Orani, Bataan', 'cruz.bobbymarcko@auf.edu.ph');
        $order = new Order($customer, $shopping_cart);

        $invoice = new PDFInvoiceStrategy();
        $order->setInvoiceGenerator($invoice);
        $invoice->generate($order);

        $payment = new PaypalStrategy('cruz.bobbymarckoe@email.paypal.ph', '');
        $order->setPaymentMethod($payment);
        $order->payInvoice();
    }
}