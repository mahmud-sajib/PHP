
<?php

class Player {
	public $name; 
	public $age;
	public function playerAge($value){
		echo $this->name. " age is " . $this->age=$value . "</br>";
	}
} 
$playerOne = new Player;
$playerTwo = new Player;
$playerOne->name = "Ronaldo";
$playerTwo->name = "Messi";
$playerOne->playerAge("30");
$playerTwo->playerAge("26");


?>