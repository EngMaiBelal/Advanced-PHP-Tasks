<?php
include_once "employee.php";
include_once "manager.php";
include_once "customerService.php";

class main {
    public function calculate(object $employee)
    {
       return $employee->CalculateSalaryPerHour(100);
    }
}


$customerService = new customerService;
$customerService->id = 2;
$customerService->name = 'mai';
$customerService->basicSalary = 1000;

$manger = new manager;
$manger->id = 1;
$manger->name = 'galal';
$manger->basicSalary = 1000;

$employee = new employee;
$employee->id = 3;
$employee->name = 'nada';
$employee->basicSalary = 1000;

$main = new main;
echo $main->calculate($customerService);
echo ('<br>');
echo $main->calculate($manger);
echo ('<br>');
echo $main->calculate($employee);