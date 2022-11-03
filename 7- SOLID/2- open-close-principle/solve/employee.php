<?php
include_once "member.php";

class employee extends member {
    
    public function CalculateSalaryPerHour($hours = 176)
    {
        return ($this->basicSalary) / $hours ;

    }

}

