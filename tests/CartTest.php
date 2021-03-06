<?php 

namespace Tests;

use App\Cart;
use App\DeliveryFeeCalculator;
use App\Item;
use App\Items;
use PHPUnit\Framework\TestCase;

require __DIR__.'/../src/Cart.php';

class CartTest extends TestCase
{
    /**
     * @test
     */
    public function shouldReturnCorrectCardTotal()
    {
        // Arrange
        $items = new Items;
        $items->add(new Item("mouse", 1));
        $items->add(new Item("Macbook", 4));
        $items->add(new Item("mochila", 3));

        // Act
        $feeCalculator = $this->createMock(DeliveryFeeCalculator::class);
        $cart = new Cart($feeCalculator);
        $total = $cart->getTotal($items);
        
        // Assert
        $this->assertEquals(8, $total);
    }

    /**
     * @test
     */
    public function shouldReturnZeroWhenArrayIsEmpty()
    {
        // Arrange
        $items = new Items;

        // Act
        $feeCalculator = $this->createMock(DeliveryFeeCalculator::class);
        $cart = new Cart($feeCalculator);
        $total = $cart->getTotal($items);
        
        // Assert
        $this->assertEquals(0, $total);
    }
}