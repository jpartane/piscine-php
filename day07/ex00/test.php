<?php

class Lannister {
	public function __construct() {
		print("A Stark is born !" . PHP_EOL); 
	}
	public function getSize() {
		return "King";
	}
	public function houseMotto() {
		return "Hear me cry!";
	}
}

include('Tyrion.class.php');

$tyrion = new Tyrion();

print($tyrion->getSize() . PHP_EOL);
print($tyrion->houseMotto() . PHP_EOL);
?>
