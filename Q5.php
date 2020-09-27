<?php
class Animal{
	public $family;
	public $food;

	public function __construct($famiy,$food){
		$this->family = $famiy;
		$this->food = $food;
	}

	public function decl(){
		echo "The animal is {$this->family} and the food is {$this->food}." . "<br>";
	}
}

class ccat extends Animal{
	public function message(){
		echo "Mooda dimuthu....";
	}

}

$cat = new ccat("smollCat","fish");
$cat->decl();
$cat->message();



?>