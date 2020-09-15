<?php

namespace App;

class Cart 
{
    private $deliveryFeeCalculator;
    public function __construct(DeliveryFeeCalculator $deliveryFeeCalculator)
    {
        $this->deliveryFeeCalculator = $deliveryFeeCalculator;
    }

    function getTotal(Items $itens): int
    {
        $total = 0;
    
        foreach ($itens as $item) {
            $total += $item->getValue();
        }

        $fee = $this->deliveryFeeCalculator->calculateFee();
    
        return $total + $fee;
    }

}