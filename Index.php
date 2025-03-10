<?php

include 'Employee.php';

$employees = [
    new FullTimeEmployee("Angel Erica L. Uanang", 1205, "Manager", 50000),
];

foreach ($employees as $employee) {
    $details = $employee->getDetails();
    echo "Name: {$details['Name']}<br>";
    echo "ID: {$details['ID']}<br>";
    echo "Position: {$details['Position']}<br>";
    echo "Salary: {$details['Salary']}<br>";

    if ($employee instanceof FullTimeEmployee || $employee instanceof PartTimeEmployee) {
        echo "Bonus: " . ($employee instanceof FullTimeEmployee ? $employee->calculateBonus() : $employee->calculateBonus()) . "<br>";
    }
    
    echo "Employment Type: " . get_class($employee) . "<br>";
}
?>
