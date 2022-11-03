<?php
include_once "member.php";

class CustomerService extends member {
    public function CalculateSalaryPerHour($hours = 176)
    {
        return $this->basicSalary / $hours;
    }
}