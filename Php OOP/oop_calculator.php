<?php 

class Calculator {
	
	public function add($a,$b){
		echo "Summation : " . ($a+$b) . "</br>" ;
	}

	public function sub($a,$b){
		echo "Subtraction : " . ($a-$b) . "</br>" ;
	}

    public function mul($a,$b){
		echo "Multiplication : " . ($a*$b) . "</br>" ;
	}

	public function div($a,$b){
		echo "Division : " . ($a/$b) . "</br>";
	}
	
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<form action=" " method="post">
	<table>
	
		<tr>		
		  <td>Enter First Number:</td>
		  <td><input type="number" name="num1"></td>
		</tr>

		<tr>		
		  <td>Enter First Number:</td>
		  <td><input type="number" name="num2"></td>
		</tr>

		<tr>		
		  <td></td>
		  <td><input type="submit" name="calculation" value="calculate"></td>
		</tr>

	</table>
</form>

<?php

if (isset($_POST["calculation"])) {

	$numberOne = $_POST["num1"];
	$numberTwo = $_POST["num2"];

	if (empty($numberOne || $numberTwo)){
		echo "Value must be entered </br>";
	} else {

		echo "First number is " . $numberOne . "</br>";
		echo "Second number is " . $numberTwo . "</br>";

		$cal = new Calculator;

        $cal->add($numberOne, $numberTwo);
        $cal->sub($numberOne, $numberTwo);
    	$cal->mul($numberOne, $numberTwo);
    	$cal->div($numberOne, $numberTwo);

	}

}

?>

	
</body>
</html>
