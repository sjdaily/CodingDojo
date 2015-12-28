<?php

class Car 
{
	public $price;
	public $speed;
	public $fuel;
	public $mileage;
	public $tax;

	public function __construct($price,$speed,$fuel,$mileage)
	{
		$this->price = $price;
		$this->speed = $speed;
		$this->fuel = $fuel;
		$this->mileage = $mileage;

		// If the price is greater than 10,000, set the tax to be 15%. Otherwise set the tax to be 12%. 
		if($price > 10000)
		{
			$this->tax = '15%';
		}
		else
		{
			$this->tax = '12%';
		}

		// call Display all function within construct to display each new car's information
		echo $this->Display_all();
	}

	public function Display_all()
	{
		return "Price: " . $this->price . '<br>' . "Speed: " . $this->speed . '<br>' .
		"Fuel: " . $this->fuel . '<br>' . "Mileage: " . $this->mileage . '<br>' . 
		"Tax: " . $this->tax . '<hr>';
	}
}

$car1 = new Car(8000, '35mph', 'Full', '15mpg');
$car2 = new Car(2000, '5mph', 'Not Full', '105mpg');
$car3 = new Car(5000, '15mph', 'Kind of Full', '95mpg');
$car4 = new Car(12000, '25mph', 'Full', '25mpg');
$car5 = new Car(25000, '45mph', 'Empty', '25mpg');

?>