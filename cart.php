<?php

function getTotalCart(array $itens): int
{
    $total = 0;
    foreach ($itens as $item) {
        $total += $item;
    }

    return $total;
}