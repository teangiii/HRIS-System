<?php
session_start();

$username = $_SESSION["username"] ?? "User";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
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

            <a href="profile.php" class="active">
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

            <h1>My Profile</h1>

            <p>
                View your employee information.
            </p>

        </div>


        <div class="content-box">

            <div class="form-group">

                <label>Username</label>

                <input
                    type="text"
                    value="<?php echo htmlspecialchars($username); ?>"
                    readonly
                >

            </div>


            <div class="form-group">

                <label>Employee ID</label>

                <input
                    type="text"
                    value="EMP-001"
                    readonly
                >

            </div>


            <div class="form-group">

                <label>Position</label>

                <input
                    type="text"
                    value="Employee"
                    readonly
                >

            </div>


            <div class="form-group">

                <label>Email</label>

                <input
                    type="email"
                    value="employee@example.com"
                    readonly
                >

            </div>

        </div>

    </div>

</div>

</body>
</html>