<?php


namespace App\Invoicer\Domain\Service;


use App\Invoicer\Domain\Factory\InvoiceFactory;
use App\Invoicer\Domain\Repository\OrderRepositoryInterface;

class InvoicingService
{
  /** @var OrderRepositoryInterface */
  protected $_orderRepository;
  /** @var InvoiceFactory */
  protected $_invoiceFactory;

  /**
   * InvoicingService constructor.
   * @param OrderRepositoryInterface $orderRepository
   * @param InvoiceFactory $invoiceFactory
   */
  public function __construct(OrderRepositoryInterface $orderRepository, InvoiceFactory $invoiceFactory)
  {
    $this->_orderRepository = $orderRepository;
    $this->_invoiceFactory = $invoiceFactory;
  }

  public function generateInvoices(): array
  {
    $orders = $this->_orderRepository->getUninvoicedOrders();

    $invoices = [];

    foreach ($orders as $order)
    {
      $invoices[] = $this->_invoiceFactory->createFromOrder($order);
    }

    return $invoices;
  }
}