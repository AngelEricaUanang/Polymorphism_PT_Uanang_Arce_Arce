<?php

class Employee {
    public $name;
    public $id;
    public $position;

    public function __construct($name, $id, $position) {
        $this->name = $name;
        $this->id = $id;
        $this->position = $position;
    }

    public function getSalary() {
        return 0;
    }

    public function getDetails() {
        return [
            "Name" => $this->name,
            "ID" => $this->id,
            "Position" => $this->position,
            "Salary" => $this->getSalary()
        ];
    }
}

class FullTimeEmployee extends Employee {
    public $monthlySalary;

    public function __construct($name, $id, $position, $monthlySalary) {
        parent::__construct($name, $id, $position);
        $this->monthlySalary = $monthlySalary;
    }

    public function getSalary() {
        return $this->monthlySalary;
    }

    public function calculateBonus() {
        return $this->monthlySalary * 0.1;
    }
}

class PartTimeEmployee extends Employee {
    public $hourlyRate;
    public $hoursWorked;

    public function __construct($name, $id, $position, $hourlyRate, $hoursWorked) {
        parent::__construct($name, $id, $position);
        $this->hourlyRate = $hourlyRate;
        $this->hoursWorked = $hoursWorked;
    }

    public function getSalary() {
        return $this->hourlyRate * $this->hoursWorked;
    }

    public function calculateBonus() {
        return $this->getSalary() * 0.05;
    }
}

class ContractEmployee extends Employee {
    public $contractAmount;

    public function __construct($name, $id, $position, $contractAmount) {
        parent::__construct($name, $id, $position);
        $this->contractAmount = $contractAmount;
    }

    public function getSalary() {
        return $this->contractAmount;
    }
}
?>
