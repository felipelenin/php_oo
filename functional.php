<?php

$input = array(22,23,24,25,26,12,21);

$filtro = function(int $age){
    return ($age >= 18);
};

$output = array_filter($input, $filtro);

print_r($output);


?>