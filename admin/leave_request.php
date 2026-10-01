<?php

$employees = [
    ["EMP-001", "Alethea Ticaro", "HR", "HR Officer", "Active"],
    ["EMP-002", "Daniel Cruz", "IT", "IT Specialist", "Active"],
    ["EMP-003", "Samantha Reyes", "Marketing", "Marketing Staff", "Active"],
    ["EMP-004", "Maria Santos", "HR", "HR Assistant", "Active"],
    ["EMP-005", "James Lim", "Finance", "Accountant", "Active"],
    ["EMP-006", "Anna Garcia", "Operations", "Operations Staff", "Inactive"]
];

?>

<!DOCTYPE html>
<html>

<head>

    <title>HRIS Admin - Employees</title>

    <link rel="stylesheet" href="admin.css">

</head>

<body>

<div class="layout">

<aside class="sidebar">

    <div class="admin-profile">

        <div class="profile-circle">♙</div>

        <h2>HRIS ADMIN</h2>

        <p>Administrator</p>

    </div>


    <nav>

        <a href="dashboard.php" class="nav-link">
            <span>▣</span> Dashboard
        </a>

        <a href="departments.php" class="nav-link">
            <span>▦</span> Departments
        </a>

        <a href="employees.php" class="nav-link active">
            <span>♙</span> Employees
        </a>

        <a href="leave_requests.php" class="nav-link">
            <span>▣</span> Leave Requests
        </a>

        <a href="reports.php" class="nav-link">
            <span>▥</span> Reports
        </a>

    </nav>


    <a href="../login.php" class="logout">
        ⇥ &nbsp; Log out
    </a>

</aside>


<main class="content">

    <div class="page-header">

        <div>

            <h1>Employees</h1>

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

            <option>All Departments</option>
            <option>HR</option>
            <option>IT</option>
            <option>Finance</option>
            <option>Marketing</option>
            <option>Operations</option>

        </select>

    </div>


    <div class="full-panel">

        <table>

            <thead>

                <tr>

                    <th>Employee ID</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Position</th>
                    <th>Status</th>
                    <th>Action</th>

                </tr>

            </thead>


            <tbody>

            <?php foreach ($employees as $employee): ?>

                <tr>

                    <td><?= $employee[0] ?></td>

                    <td>
                        <strong><?= $employee[1] ?></strong>
                    </td>

                    <td><?= $employee[2] ?></td>

                    <td><?= $employee[3] ?></td>

                    <td>

                        <?php if ($employee[4] == "Active"): ?>

                            <span class="active">
                                Active
                            </span>

                        <?php else: ?>

                            <span class="inactive">
                                Inactive
                            </span>

                        <?php endif; ?>

                    </td>

                    <td>

                        <a href="#" class="view-link">
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