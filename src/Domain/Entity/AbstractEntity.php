<?php

namespace App\Invoicer\Domain\Entity;

abstract class AbstractEntity
{
  protected $_id;

  /**
   * @return int
   */
  public function getId()
  {
    return $this->_id;
  }

  /**
   * @param int $id
   */
  public function setId($id)
  {
    $this->_id = $id;
  }
}