<?php


namespace App\Invoicer\Domain\Entity;


class Invoice
{
  protected $_order;
  protected $_invoiceDate;
  protected $_total;

  /**
   * @return mixed
   */
  public function getOrder()
  {
    return $this->_order;
  }

  /**
   * @param mixed $order
   */
  public function setOrder($order)
  {
    $this->_order = $order;
  }

  /**
   * @return mixed
   */
  public function getInvoiceDate()
  {
    return $this->_invoiceDate;
  }

  /**
   * @param mixed $invoiceDate
   */
  public function setInvoiceDate($invoiceDate)
  {
    $this->_invoiceDate = $invoiceDate;
  }

  /**
   * @return mixed
   */
  public function getTotal()
  {
    return $this->_total;
  }

  /**
   * @param mixed $total
   */
  public function setTotal($total)
  {
    $this->_total = $total;
  }

}