<?php


namespace App\Invoicer\Domain\Repository;


interface OrderRepositoryInterface extends RepositoryInterface
{
  public function getUninvoicedOrders();
}