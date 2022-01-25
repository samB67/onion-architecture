<?php


namespace App\Invoicer\Domain\Entity;


class Order
{
  protected $_customer;
  protected $_orderNumber;
  protected $_description;
  protected $_total;

  /**
   * @return mixed
   */
  public function getCustomer()
  {
    return $this->_customer;
  }

  /**
   * @param mixed $customer
   */
  public function setCustomer($customer)
  {
    $this->_customer = $customer;
  }

  /**
   * @return mixed
   */
  public function getOrderNumber()
  {
    return $this->_orderNumber;
  }

  /**
   * @param mixed $orderNumber
   */
  public function setOrderNumber($orderNumber)
  {
    $this->_orderNumber = $orderNumber;
  }

  /**
   * @return mixed
   */
  public function getDescription()
  {
    return $this->_description;
  }

  /**
   * @param mixed $description
   */
  public function setDescription($description)
  {
    $this->_description = $description;
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