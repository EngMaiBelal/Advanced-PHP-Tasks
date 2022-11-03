<?php

abstract class member {
    public $id, $name, $basicSalary;

    public abstract function CalculateSalaryPerHour($hours = 176);
    
  }

