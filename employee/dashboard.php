<?php
session_start();

$username = $_SESSION["username"] ?? "User";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <!-- SIDEBAR -->
    <div class="sidebar">

        <div class="profile-area">

            <div class="profile-circle">
                👤
            </div>

            <div class="profile-name">
                <?php echo htmlspecialchars($username); ?>
            </div>

            <div class="profile-label">
                EMPLOYEE
            </div>

        </div>

        <div class="sidebar-menu">

            <a href="dashboard.php" class="active">
                 Dashboard
            </a>

            <a href="profile.php">
                 Profile
            </a>

            <a href="file_leave.php">
                 File Leave
            </a>

            <a href="leave_balance.php">
                 Leave Balance
            </a>


        </div>

        <div class="logout">
            <a href="logout.php">
                 Logout
            </a>
        </div>

    </div>


    <!-- MAIN CONTENT -->
    <div class="main-content">

        <div class="page-header">

            <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>

            <p>
                Welcome to the Employee Leave Management System.
            </p>

        </div>


        <div class="cards">

            <div class="card">
                <h3>Vacation Leave</h3>
                <div class="number">10</div>
                <p>Days remaining</p>
            </div>

            <div class="card">
                <h3>Sick Leave</h3>
                <div class="number">8</div>
                <p>Days remaining</p>
            </div>

            <div class="card">
                <h3>Pending Requests</h3>
                <div class="number">2</div>
                <p>Requests waiting</p>
            </div>

        </div>


        <br><br>


        <div class="content-box">

            <h2>Quick Actions</h2>

            <br>

            <p>
                You can file a new leave request, check your remaining
                leave balance, or view your previous leave requests
                using the menu on the left.
            </p>

            <br>

            <a href="file_leave.php">
                <button class="btn">
                    File a Leave
                </button>
            </a>

        </div>

    </div>

</div>

</body>
</html>