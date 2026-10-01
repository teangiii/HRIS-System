<?php
$departments = [
    ["HR", "Human Resources", 5],
    ["IT", "Information Technology", 7],
    ["FIN", "Finance", 4],
    ["MKT", "Marketing", 5],
    ["OPS", "Operations", 3]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>HRIS Admin - Departments</title>
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

        <a href="departments.php" class="nav-link active">
            <span>▦</span> Departments
        </a>

        <a href="employees.php" class="nav-link">
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
            <h1>Departments</h1>
            <p>Manage departments within the organization.</p>
        </div>

        <button class="blue-button">
            + Add Department
        </button>

    </div>


    <div class="department-grid">

        <?php foreach ($departments as $department): ?>

            <div class="department-card">

                <div class="department-icon">
                    ▦
                </div>

                <div>
                    <h2><?= $department[1] ?></h2>
                    <p>Department Code: <?= $department[0] ?></p>
                    <strong><?= $department[2] ?> Employees</strong>
                </div>

                <a href="#">View →</a>

            </div>

        <?php endforeach; ?>

    </div>

</main>

</div>

</body>
</html>