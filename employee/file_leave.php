<?php
session_start();

$username = $_SESSION["username"] ?? "User";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $leave_type = $_POST["leave_type"];
    $start_date = $_POST["start_date"];
    $end_date = $_POST["end_date"];
    $reason = $_POST["reason"];

    $message = "Leave request submitted successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>File Leave</title>
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

            <a href="file_leave.php" class="active">
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

            <h1>File Leave</h1>

            <p>
                Submit a new leave request.
            </p>

        </div>


        <div class="content-box">

            <?php if ($message != ""): ?>

                <p style="color: green; margin-bottom: 20px;">
                    <?php echo $message; ?>
                </p>

            <?php endif; ?>


            <form method="POST">

                <div class="form-group">

                    <label>Leave Type</label>

                    <select name="leave_type" required>

                        <option value="">Select Leave Type</option>

                        <option value="Vacation Leave">
                            Vacation Leave
                        </option>

                        <option value="Sick Leave">
                            Sick Leave
                        </option>

                        <option value="Emergency Leave">
                            Emergency Leave
                        </option>

                    </select>

                </div>


                <div class="form-group">

                    <label>Start Date</label>

                    <input
                        type="date"
                        name="start_date"
                        required
                    >

                </div>


                <div class="form-group">

                    <label>End Date</label>

                    <input
                        type="date"
                        name="end_date"
                        required
                    >

                </div>


                <div class="form-group">

                    <label>Reason</label>

                    <textarea
                        name="reason"
                        placeholder="Enter your reason for leave..."
                        required
                    ></textarea>

                </div>


                <button type="submit" class="btn">
                    Submit Leave Request
                </button>

            </form>

        </div>

    </div>

</div>

</body>
</html>