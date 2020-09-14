<?php

require __DIR__.'/cart.php';

$total = getTotalCart([3,4,1]);
$expected = 8;

if($total === $expected) {
    echo "Teste passou!";
} else {
    echo "Teste não passou!";
}