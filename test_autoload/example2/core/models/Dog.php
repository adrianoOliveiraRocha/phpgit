<?php

// include_once ABSTRACTCLASS . 'Animal.php';

class Dog extends AbstractAnimal {
	
	public function eat(string $food) : bool {
		if($food === "dog food" || $food === "meat") {
			return true;
		} else {
			return false;
		}
	}

	public function talk(bool $shout) : string {
		if($shout === true) {
			return "WOOF! ";
		} else {
			return "Woof woof ";
		}
	}

}