<?php

require_once "OO/Car.php";

$ferrari = new Car;
$ferrari->brand = "Ferrari";
$ferrari->color = "Yellow"; $_POST['brand_car'];
$ferrari->engine = 300;


<input type="text" name="brand_car" id="">

$mustang = new Car;
$mustang->brand = "Mustange";
$mustang->color = "Blue";
$mustang->engine = 350;

$mazda = new Car;
$mazda->brand = "Mazda";
$mazda->color = "Green";
$mazda->engine = 650;

$acura = new Car;
$acura->brand = "Acura";
$acura->color = "Blue";
$acura->engine = 350;

$wolks = new Car;
$wolks->brand = "Wolks";
$wolks->color = "grey";
$wolks->engine = 200;

$fiat = new Car;
$fiat->brand = "Fiat";
$fiat->color = "Black";
$fiat->engine = 800;

//var_dump(getEngine());

echo $mustang->getEngine();


// echo $ferrari->brand;

// echo $ferrari->color;

// echo $ferrari->engine . 'cavalos';



?>