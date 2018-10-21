<?php

namespace MyProject\Example06;

use PDO;

class EmployeeList
{
    /** @var PDO */
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getEmployeeNames(): array
    {
        $employeeList = $this->pdo->query('SELECT name FROM employees')->fetchAll();

        $names = [];

        foreach ($employeeList as $item) {
            $names[] = $item['name'];
        }

        return $names;
    }
}
