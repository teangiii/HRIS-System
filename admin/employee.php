<?php

$employees = [

    [
        "EMP-001",
        "Alethea Ticaro",
        "HR",
        "HR Officer",
        "Active"
    ],

    [
        "EMP-002",
        "Daniel Cruz",
        "IT",
        "IT Specialist",
        "Active"
    ],

    [
        "EMP-003",
        "Samantha Reyes",
        "Marketing",
        "Marketing Staff",
        "Active"
    ],

    [
        "EMP-004",
        "Maria Santos",
        "HR",
        "HR Assistant",
        "Active"
    ],

    [
        "EMP-005",
        "James Lim",
        "Finance",
        "Accountant",
        "Active"
    ],

    [
        "EMP-006",
        "Anna Garcia",
        "Operations",
        "Operations Staff",
        "Inactive"
    ]

];

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>HRIS Admin - Employees</title>

    <link rel="stylesheet" href="admin.css">

</head>


<body>

<div class="layout">


    <?php include "sidebar.php"; ?>


    <main class="content">


        <div class="page-header">

            <div>

                <h1>
                    Employees
                </h1>

                <p>
                    View and manage all registered employees.
                </p>

            </div>


            <button class="blue-button">
                + Add Employee
            </button>

        </div>



        <div class="search-box">

            <input
                type="text"
                placeholder="Search employee..."
            >


            <select>

                <option>
                    All Departments
                </option>

                <option>
                    HR
                </option>

                <option>
                    IT
                </option>

                <option>
                    Finance
                </option>

                <option>
                    Marketing
                </option>

                <option>
                    Operations
                </option>

            </select>

        </div>



        <div class="full-panel">


            <table>


                <thead>

                    <tr>

                        <th>
                            Employee ID
                        </th>

                        <th>
                            Name
                        </th>

                        <th>
                            Department
                        </th>

                        <th>
                            Position
                        </th>

                        <th>
                            Status
                        </th>

                        <th>
                            Action
                        </th>

                    </tr>

                </thead>



                <tbody>


                <?php foreach ($employees as $employee): ?>


                    <tr>


                        <td>
                            <?= htmlspecialchars($employee[0]) ?>
                        </td>


                        <td>

                            <strong>
                                <?= htmlspecialchars($employee[1]) ?>
                            </strong>

                        </td>


                        <td>
                            <?= htmlspecialchars($employee[2]) ?>
                        </td>


                        <td>
                            <?= htmlspecialchars($employee[3]) ?>
                        </td>


                        <td>


                            <?php if ($employee[4] == "Active"): ?>

                                <span class="status active">
                                    Active
                                </span>

                            <?php else: ?>

                                <span class="status inactive">
                                    Inactive
                                </span>

                            <?php endif; ?>


                        </td>


                        <td>

                            <a href="#"
                               class="view-link">

                                View

                            </a>

                        </td>


                    </tr>


                <?php endforeach; ?>


                </tbody>


            </table>


        </div>


    </main>


</div>


</body>

</html>