<?php

namespace App\Payments;

use App\Payments\PaymentStrategy;

class CashOnDeliveryStrategy implements PaymentStrategy
{
	protected $name;
    protected $email;
	protected $address;
	//protected $city;
	//protected $postal_code;
	//protected $country;

	public function __construct($customer)
	{
		$this->name = $customer->getName();
		$this->address = $customer->getAddress();
		$this->email = $customer->getEmail();
        /* $this->name = $name;
		$this->address = $address;
		$this->city = $city;
		$this->postal_code = $postal_code;
		$this->country = $country; */
	}

	public function pay($amount)
	{
		echo "Payment for the amount {$amount} would be paid on delivery\n";
		echo "C.O.D. Details\n";
		echo "Payee: {$this->name} \n";
		echo "Email: {$this->email} \n";
		echo "Address: {$this->address}\n";
	}
}