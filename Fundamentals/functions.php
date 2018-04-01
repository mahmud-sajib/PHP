<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


<?php



function color($colorname="blue"){
    echo "Color is: $colorname </br>" ;
}

color("black");
color();
color("white");


?>

<?php



function sum($x, $y){
   $z = $x + $y;
   return $z;


}

echo "The result is " . sum(5,10) . "</br>";


function validate($x){

return $x;

}

echo "Number is: " . validate(2);




?>



	
</body>
</html>