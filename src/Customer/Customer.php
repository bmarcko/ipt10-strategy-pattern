<?php

namespace App\Customer;

class Customer
{
	protected $name;
	protected $address;
	//protected $description;
	protected $email;

	public function __construct($name, $address, $email)
	{
		$this->code = $name;
		$this->name = $address;
		//$this->description = $description;
		$this->price = $email;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getAddress()
	{
		return $this->address;
	}

	/* public function getDescription()
	{
		return $this->description;
	} */

	public function getEmail()
	{
		return $this->email;
	}
}