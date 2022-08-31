<?php 
$min = 1;
$max = 100;
$quantity_of_numbers = 15;

$numbers= [];


while(count($numbers) < $quantity_of_numbers) {
    $number = rand($min, $max);
    if(!in_array($number, $numbers)){
        $numbers[] = $number;
    }
}

var_dump($numbers)
?>