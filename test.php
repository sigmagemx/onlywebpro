<?php

class MyCar
{
	public $name;
	public $color;
	public $price;

	public function __construct($name, $color, $price)
	{
		$this->name = $name;
		$this->color = $color;
		$this->price = $price;
	}

	public function showDetails()
	{
		print "Hi, I have just produced a {$this->name} - {$this->color} | {$this->price} USD <br />";
	}
}

$car1 = new MyCar('BMW', 'Black', '40000');
$car2 = new MyCar('Volkswagen', 'Golf', '15000');

$car1->showDetails();
$car2->showDetails();

?>