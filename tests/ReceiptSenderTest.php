<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Cart;
use App\Items;
use App\ReceiptSender;
use Swift_Mailer;

class ReceiptSenderTest extends TestCase
{
    /**
     * @test
     */
    public function shouldNotSendEmail()
    {
        $cart = $this->createMock(Cart::class);
        $mailer = $this->createMock(Swift_Mailer::class);
        $render = new ReceiptSender($cart, $mailer);
        $items = new Items;

        $mailer->expects($this->never())->method('send');

        $render->sendEmail('foo@bar.com', $items);
    }
    
    /**
     * @test
     */
    public function shouldSendEmail()
    {
        $cart = $this->createMock(Cart::class);
        $mailer = $this->createMock(Swift_Mailer::class);
        $render = new ReceiptSender($cart, $mailer);
        $items = new Items;

        $mailer->expects($this->exactly(1))->method('send');
        $cart->method('getTotal')->willReturn(10);

        $render->sendEmail('foo@bar.com', $items);
    }
}