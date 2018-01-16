<?php 

/* 

1. We can access and implement more than one Method sequentially through Method Chaining

2. The synatx is: $object->methodA()->methodB();

*/

class Calculation{

	public $a;
	public $b;
	public $result;


	public function getValue($x,$y){
		$this->a = $x;
		$this->b = $y;
		return $this;

	}

	public function getResult(){
		$this->result = $this->a * $this->b;
		return $this->result;
	}
}

$value = new Calculation;

echo $value->getValue(4,5)->getResult();

?>