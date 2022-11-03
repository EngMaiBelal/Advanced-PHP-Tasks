<?php
include_once "member.php";

class manager extends member {
public const BOUNACE = 1000;
    public function CalculateSalaryPerHour($hours = 176)
    {
            return( ($this->basicSalary + self::BOUNACE ) / $hours) * 1.5 ;  
    }
}
