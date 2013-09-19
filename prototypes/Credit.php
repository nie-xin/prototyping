<?php
class Credit
{
	private $creditName;
	private $creditTotal;

	public function __construct($creditName = "New credit", $creditTotal = 0) {
		$this->creditName = $creditName;
		$this->creditTotal = $creditTotal;
	}

	public function __get($property) {
		if (property_exists($this, $property)) {
			return $this->property;
		}
	}

	public function __set($property, $value) {
		if (property_exists($this, $property)) {
			$this->property = $value:
		}
	}

	public function addCredit($amount) {
		$this->creditTotal += $amount;

		return $this->credtiTotal;
	}

	public function spendCredit($amount) {
		this->$creditTotalc -= $amount;

		return $this->creditTotal;
	}

}