<?php

namespace App;

class Cart 
{
    function getTotal(Items $itens): int
    {
        $total = 0;
    
        foreach ($itens as $item) {
            $total += $item->getValue();
        }

        $deliveryFeeCalculator = new DeliveryFeeCalculator;
        $fee = $deliveryFeeCalculator->calculateFee();
    
        return $total + $fee;
    }

}