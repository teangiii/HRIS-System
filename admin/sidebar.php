<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<aside class="sidebar">

    <!-- ADMIN PROFILE -->
    <div class="admin-profile">

        <div class="profile-circle"></div>

        <h2>HRIS ADMIN</h2>

        <p>Administrator</p>

    </div>


    <!-- NAVIGATION -->
    <nav>

        <!-- DASHBOARD -->
        <a href="dashboard.php"
           class="nav-link <?= $currentPage == 'dashboard.php' ? 'active' : '' ?>">
            Dashboard
        </a>


        <!-- DEPARTMENTS -->
        <a href="departments.php"
           class="nav-link <?= $currentPage == 'departments.php' ? 'active' : '' ?>">
            Departments
        </a>


        <!-- EMPLOYEES -->
        <a href="employees.php"
           class="nav-link <?= $currentPage == 'employees.php' ? 'active' : '' ?>">
            Employees
        </a>


        <!-- LEAVE REQUESTS -->
        <a href="leave_requests.php"
           class="nav-link <?= $currentPage == 'leave_requests.php' ? 'active' : '' ?>">
            Leave Requests
        </a>


        <!-- REPORTS -->
        <a href="reports.php"
           class="nav-link <?= $currentPage == 'reports.php' ? 'active' : '' ?>">
            Reports
        </a>

    </nav>


    <!-- LOGOUT -->
    <a href="../login.php" class="logout">
        Log out
    </a>

</aside>