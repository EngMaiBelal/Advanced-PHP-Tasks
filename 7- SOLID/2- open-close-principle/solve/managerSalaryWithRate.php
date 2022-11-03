<?php
include_once "member.php";

class mangerSalaryWithRate extends manager {
    public $rate;
    public function CalculateSalaryPerHour($hours = 176)
    {
        return( $this->basicSalary + self::BONUS / $hours) * $this->rate;
    }
}
