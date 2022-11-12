<?php

class Employee
{
  private $name;
  private $enterprise;
  private $position;
  private $wage;

  function __construct($name, $enterprise, $position, $wage)
  {
    $this->name = $name;
    $this->enterprise = $enterprise;
    $this->position = $position;
    $this->wage = $wage;
  }

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


class Salesman extends Employee
{
  private $commission;

  function __construct($name, $enterprise, $position, $wage, $commission)
  {
    Employee::__construct($name, $enterprise, $position, $wage);
    $this->commission = $commission;
  }

  public function getWage()
  {
    return Employee::getWage() + $this->commission;
  }
}

$salesman = new Salesman('Joaby', 'Pagai', 'Salesman', 2202, 300);

echo "Salesman: ";
echo $salesman->getWage();
echo "<br>";


class Manager extends Employee
{
  function __construct($name, $enterprise, $position, $wage)
  {
    Employee::__construct($name, $enterprise, $position, $wage);
  }

  public function getWage()
  {
    return Employee::getWage() + (Employee::getWage() * 0.05);
  }
}

$manager = new Manager('Jobs', 'Pagai', 'Gerente', 5900);


echo "Manager: ";
echo $manager->getWage();
echo "<br>";
