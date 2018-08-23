<?php

require_once "OO/Car.php";

$ferrari = new Car;
$ferrari->brand = "Ferrari";
$ferrari->color = "Yellow"; //$_POST['brand_car'];
$ferrari->engine = 300; ?>


<!-- <input type="text" name="brand_car" id=""> -->

<?php $mustang = new Car;
$mustang->brand = "Mustange";
$mustang->color = "Blue";
$mustang->engine = 350;
$mustang->doors = 2;

$mazda = new Car;
$mazda->brand = "Mazda";
$mazda->color = "Green";
$mazda->engine = 650;
$mazda->doors = 3;

$acura = new Car;
$acura->brand = "Acura";
$acura->color = "Blue";
$acura->engine = 350;
$acura->doors = 2;

$wolks = new Car;
$wolks->brand = "Wolks";
$wolks->color = "grey";
$wolks->engine = 200;
$wolks->doors = 4;

$fiat = new Car;
$fiat->brand = "Fiat";
$fiat->color = "Black";
$fiat->engine = 800;
$fiat->doors = 4;

$cbr = new Motorcycle;
$cbr->brand = 'Suzuki';

//var_dump(getEngine());

echo $ferrari->color;


// echo $ferrari->brand;

// echo $ferrari->color;

// echo $ferrari->engine . 'cavalos';



?>