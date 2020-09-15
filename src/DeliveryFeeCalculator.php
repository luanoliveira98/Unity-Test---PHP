<?php

namespace App;

class DeliveryFeeCalculator
{
    public function calculateFee(): int
    {
        $fee = file_get_contents('https://www.random.org/integers/?num=1&min=1&max=100&col=1&base=10&format=plain&rnd=new');

        return (int)$fee;
    }
}