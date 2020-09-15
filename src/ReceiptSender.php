<?php

namespace App;

use Swift_Mailer;
use Swift_Message;

class ReceiptSender
{
    private $cart;
    private $mailer;

    public function __construct(Cart $cart, Swift_Mailer $mailer)
    {
        $this->cart = $cart;
        $this->mailer = $mailer;
    }

    public function sendEmail(string $email, Items $items)
    {
        $total = $this->cart->getTotal($items);
        if ($total <= 0) return;

        $message = (new Swift_Message('Wonderful Subject'))
            ->setFrom(['contato@minhaempresa.com' => 'John D'])
            ->setTo([$email])
            ->setBody("Sua compra custou ${total}");

        $this->mailer->send($message);
    }
}