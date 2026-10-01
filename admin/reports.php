<?php
// dashboard.php
?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>HRIS Admin - Dashboard</title>

    <link rel="stylesheet" href="admin.css">

</head>


<body>

<div class="layout">


    <!-- SIDEBAR -->

    <?php include "sidebar.php"; ?>


    <!-- MAIN CONTENT -->

    <main class="content">


        <div class="welcome">

            <div>

                <h1>Welcome, Admin!</h1>

                <p>
                    Manage your organization's employee information
                    and HR activities.
                </p>

            </div>


            <div class="admin-label">
                ADMIN
            </div>

        </div>



        <!-- STATISTICS -->

        <div class="cards">


            <div class="card">

                <div>

                    <p>Total Employees</p>

                    <h2>24</h2>

                    <small class="green">
                        ↑ +2 this month
                    </small>

                </div>

            </div>



            <div class="card">

                <div>

                    <p>Departments</p>

                    <h2>5</h2>

                    <small>
                        — No change
                    </small>

                </div>

            </div>



            <div class="card">

                <div>

                    <p>Pending Requests</p>

                    <h2>3</h2>

                    <small class="orange">
                        Requires review
                    </small>

                </div>

            </div>



            <div class="card">

                <div>

                    <p>Approved Leaves</p>

                    <h2>12</h2>

                    <small class="green">
                        ↑ +4 this month
                    </small>

                </div>

            </div>


        </div>



        <!-- QUICK ACTIONS -->

        <div class="quick">

            <h2>Quick Actions</h2>

            <p>
                Quickly access important HR management functions.
            </p>


            <div class="quick-buttons">


                <a href="employees.php"
                   class="quick-button">

                    <div>

                        <strong>
                            Add / Manage Employees
                        </strong>

                        <small>
                            Manage employee records
                        </small>

                    </div>

                    <span>→</span>

                </a>



                <a href="departments.php"
                   class="quick-button">

                    <div>

                        <strong>
                            Manage Departments
                        </strong>

                        <small>
                            View departments
                        </small>

                    </div>

                    <span>→</span>

                </a>



                <a href="leave_requests.php"
                   class="quick-button">

                    <div>

                        <strong>
                            Review Leave Requests
                        </strong>

                        <small>
                            Approve or reject requests
                        </small>

                    </div>

                    <span>→</span>

                </a>


            </div>

        </div>



        <!-- LOWER SECTION -->

        <div class="dashboard-grid">


            <!-- RECENT REQUESTS -->

            <div class="panel">

                <div class="panel-title">

                    <h2>
                        Recent Leave Requests
                    </h2>

                    <a href="leave_requests.php">
                        View All →
                    </a>

                </div>


                <div class="table-head">

                    <span>Employee</span>

                    <span>Type</span>

                    <span>Date</span>

                    <span>Status</span>

                </div>



                <div class="table-row">

                    <div class="person">

                        <div>

                            <strong>
                                Samantha Reyes
                            </strong>

                            <small>
                                Marketing
                            </small>

                        </div>

                    </div>


                    <span>
                        Sick Leave
                    </span>


                    <span>
                        Sep 18 - 19
                    </span>


                    <span class="status pending">
                        Pending
                    </span>

                </div>



                <div class="table-row">

                    <div class="person">

                        <div>

                            <strong>
                                Daniel Cruz
                            </strong>

                            <small>
                                IT
                            </small>

                        </div>

                    </div>


                    <span>
                        Vacation
                    </span>


                    <span>
                        Sep 22 - 26
                    </span>


                    <span class="status approved">
                        Approved
                    </span>

                </div>



                <div class="table-row">

                    <div class="person">

                        <div>

                            <strong>
                                Maria Santos
                            </strong>

                            <small>
                                HR
                            </small>

                        </div>

                    </div>


                    <span>
                        Personal
                    </span>


                    <span>
                        Sep 20
                    </span>


                    <span class="status pending">
                        Pending
                    </span>

                </div>


            </div>



            <!-- EMPLOYEE OVERVIEW -->

            <div class="panel">

                <div class="panel-title">

                    <h2>
                        Employee Overview
                    </h2>

                    <a href="employees.php">
                        View All →
                    </a>

                </div>


                <div class="employee-head">

                    <span>ID</span>

                    <span>Name</span>

                    <span>Department</span>

                    <span>Status</span>

                </div>



                <div class="employee-row">

                    <span>
                        EMP-001
                    </span>

                    <span>
                        Alethea
                    </span>

                    <span>
                        HR
                    </span>

                    <span class="status active">
                        Active
                    </span>

                </div>



                <div class="employee-row">

                    <span>
                        EMP-002
                    </span>

                    <span>
                        Daniel
                    </span>

                    <span>
                        IT
                    </span>

                    <span class="status active">
                        Active
                    </span>

                </div>



                <div class="employee-row">

                    <span>
                        EMP-003
                    </span>

                    <span>
                        Samantha
                    </span>

                    <span>
                        Marketing
                    </span>

                    <span class="status active">
                        Active
                    </span>

                </div>



                <div class="employee-row">

                    <span>
                        EMP-004
                    </span>

                    <span>
                        Maria
                    </span>

                    <span>
                        HR
                    </span>

                    <span class="status active">
                        Active
                    </span>

                </div>


            </div>


        </div>


    </main>


</div>


</body>

</html>