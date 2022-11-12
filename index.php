<?php

class Employee
{
  private $name;
  private $enterprise;
  private $position;
  private $wage;


  public function getName()
  {
    return $this->name;
  }
  public function getEnterprise()
  {
    return $this->enterprise;
  }
  public function getPosition()
  {
    return $this->position;
  }
  public function getWage()
  {
    return $this->wage;
  }


  public function setName($name)
  {
    $this->name = $name;
  }
  public function setEnterprise($enterprise)
  {
    $this->enterprise = $enterprise;
  }
  public function setPosition($position)
  {
    $this->position = $position;
  }
  public function setWage($wage)
  {
    $this->wage = $wage;
  }
}
