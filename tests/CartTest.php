<?php 

namespace Tests;

use PHPUnit\Framework\TestCase;

require __DIR__.'/../src/cart.php';

class CartTest extends TestCase
{
    /**
     * @test
     */
    public function shouldReturnCorrectCardTotal()
    {
        $items = [1,3,4];

        $total = \getTotalCart($items);
        
        $this->assertEquals(8, $total);
    }
}