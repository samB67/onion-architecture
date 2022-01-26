<?php


namespace App\Invoicer\Domain\Factory;


use App\Invoicer\Domain\Entity\Invoice;
use App\Invoicer\Domain\Entity\Order;
use DateTime;

class InvoiceFactory
{
  public function createFromOrder(Order $order)
  {
    $invoice = new Invoice();
    $invoice->setOrder($order);
    $invoice->setInvoiceDate(new DateTime());
    $invoice->setTotal($order->getTotal());

    return $invoice;
  }
}