<?php

// Sample array of employees
$employees = [
    ["ID" => 101, "Name" => "Alice", "Department" => "HR", "Salary" => 50000],
    ["ID" => 102, "Name" => "Bob", "Department" => "IT", "Salary" => 60000],
    ["ID" => 103, "Name" => "Charlie", "Department" => "Finance", "Salary" => 55000],
    ["ID" => 104, "Name" => "David", "Department" => "IT", "Salary" => 70000],
    ["ID" => 105, "Name" => "Eve", "Department" => "Marketing", "Salary" => 52000],
    ["ID" => 106, "Name" => "Frank", "Department" => "HR", "Salary" => 48000]
];

// 1. Chunking Employees: Display in sets of 3 per page
$chunkedEmployees = array_chunk($employees, 3);
echo "Chunked Employees (3 per page):\n";
print_r($chunkedEmployees);

// 2. Extracting Specific Column: Get all employee names
$employeeNames = array_column($employees, "Name");
echo "\nEmployee Names:\n";
print_r($employeeNames);

// 3. Reversing Employee Order
$reversedEmployees = array_reverse($employees);
echo "\nEmployees in Reverse Order:\n";
print_r($reversedEmployees);        
// 4. Extracting a Subset of Employees: Extract 2 employees from index 1
$subsetEmployees = array_slice($employees, 1, 2);
echo "\nSubset of Employees (2 from index 1):\n";
print_r($subsetEmployees);

?>
