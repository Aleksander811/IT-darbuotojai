<?php

namespace IT;


abstract class Employee
{
    protected $ssn;
    protected $firstname;
    protected $secondname;
    protected $salary;
    protected $division;

    public function __construct($firstname, $secondname, $salary)
    {
        $this->ssn = rand(10000, 50000);
        $this->firstname = $firstname;
        $this->secondname = $secondname;
        $this->salary = $salary;
    }
    public function addFirstName($firstname)
    {
        $this->firstname = $firstname;
    }
    public function addSecondName($secondname)
    {
        $this->secondname = $secondname;
    }
    public function changeFirstName($firstname)
    {
        $this->firstname = $firstname;
    }
    public function changeSecondName($secondname)
    {
        $this->secondname = $secondname;
    }
    public function addSalary($salary)
    {
        $this->salary = $salary;
    }
    public function addDivision($division)
    {
        $this->division = $division;
    }
    abstract public function getAllInfo();
}
