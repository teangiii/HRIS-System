<?php
session_start();

$username = $_SESSION["username"] ?? "User";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Leave Balance</title>
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

            <a href="dashboard.php">
                 Dashboard
            </a>

            <a href="profile.php">
                 Profile
            </a>

            <a href="file_leave.php">
                 File Leave
            </a>

            <a href="leave_balance.php" class="active">
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

            <h1>Leave Balance</h1>

            <p>
                Check your remaining leave credits.
            </p>

        </div>


        <div class="cards">

            <div class="card">

                <h3>Vacation Leave</h3>

                <div class="number">
                    10
                </div>

                <p>
                    Days remaining
                </p>

            </div>


            <div class="card">

                <h3>Sick Leave</h3>

                <div class="number">
                    8
                </div>

                <p>
                    Days remaining
                </p>

            </div>


            <div class="card">

                <h3>Emergency Leave</h3>

                <div class="number">
                    5
                </div>

                <p>
                    Days remaining
                </p>

            </div>

        </div>


        <br><br>


        <div class="content-box">

            <h2>Leave Information</h2>

            <br>

            <p>
                Your available leave credits are displayed above.
                Approved leave requests will automatically reduce
                your available balance once connected to the database.
            </p>

        </div>

    </div>

</div>

</body>
</html>