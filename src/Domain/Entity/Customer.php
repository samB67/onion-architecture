<?php


namespace App\Invoicer\Domain\Entity;


class Customer extends AbstractEntity
{
  /** @var string */
  protected $_name;
  /** @var string */
  protected $_email;
  protected $_deliveryMethod;

  /**
   * @return string
   */
  public function getName()
  {
    return $this->_name;
  }

  /**
   * @param string $name
   */
  public function setName($name)
  {
    $this->_name = $name;
  }

  /**
   * @return string
   */
  public function getEmail()
  {
    return $this->_email;
  }

  /**
   * @param string $email
   */
  public function setEmail($email)
  {
    $this->_email = $email;
  }

  /**
   * @return mixed
   */
  public function getDeliveryMethod()
  {
    return $this->_deliveryMethod;
  }

  /**
   * @param mixed $deliveryMethod
   */
  public function setDeliveryMethod($deliveryMethod)
  {
    $this->_deliveryMethod = $deliveryMethod;
  }
}