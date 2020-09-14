<?php

function getTotalCart(array $itens): int
{
    foreach ($itens as $item) {
        $total += $item;
    }

    return $total;
}