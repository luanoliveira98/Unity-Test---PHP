<?php

use App\Items;

function getTotal(Items $itens): int
{
    $total = 0;

    foreach ($itens as $item) {
        $total += $item->getValue();
    }

    return $total;
}