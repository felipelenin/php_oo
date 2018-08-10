<?php

class People{
    public function getHello($name){
        return "Hello {$name} ! <br>";
    }
} 

$p = new People;

echo $p->getHello('Felipe');


class Form{
    public function getInputs(
        $name, $age, $lastName
    ){
        return "<span> $name </span > <br> 
                <span> $lastName </span> <br>
                <strong> $age </strong>";
    }
}

$data = new Form;

echo $data->getInputs("Felipe", "Siqueira", "33" ); 



?>