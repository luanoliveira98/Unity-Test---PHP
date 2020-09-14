<?php

use App\Exception\UnexpectedNonNumericException;

function getTotalCart(array $itens): int
{
    $total = 0;

    foreach ($itens as $item) {
        if (!is_numeric($item)) {
            throw new UnexpectedNonNumericException($item);
        }

        $total += $item;
    }

    return $total;
}