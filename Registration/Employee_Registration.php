<?php
$conn = new mysqli("localhost", "root", "", "employee_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['register'])) {

    $employee_id = $_POST['employee_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $department = $_POST['department'];
    $position = $_POST['position'];
    $date_hired = $_POST['date_hired'];

    $sql = "INSERT INTO employee_registration
            (employee_id, first_name, last_name, email, phone, department, position, date_hired)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param(
        "ssssssss",
        $employee_id,
        $first_name,
        $last_name,
        $email,
        $phone,
        $department,
        $position,
        $date_hired
    );

    if ($stmt->execute()) {
        echo "<script>alert('Employee registered successfully!');</script>";
    } else {
        echo "<script>alert('Error registering employee.');</script>";
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Employee Registration </title>
          <link rel="stylesheet" href="style.css">    
</head>

<body>

<div class="container">

    <h2>Employee Registration</h2>

    <form action="" method="POST">

        <div class="row">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" name="first_name" required>
            </div>

            <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="last_name" required>
            </div>
        </div>

        <div class="form-group">
            <label>Employee ID</label>
            <input type="text" name="employee_id" required>
        </div>

        <div class="form-group">
           <label>Email</label>
            <input type="email" name="email" required>
        </div>

        <div class="form-group">
            <label>Phone Number</label>
            <input type="text" name="phone" required>
        </div>

        <div class="row">
            <div class="form-group">
                <label>Department</label>
                <select name="department" required>                    <option value="">Select Department</option>
                    <option value="IT">IT</option>
                    <option value="HR">Human Resources</option>
                    <option value="Finance">Finance</option>
                   <option value="Marketing">Marketing</option>
                </select>
            </div>
            <div class="form-group">
                <label>Position</label>
                <input type="text" name="position" required>
            </div>
        </div>

        <div class="form-group">
            <label>Date Hired</label>
           <input type="date" name="date_hired" required>
        </div>

       <button type="submit" name="register">Register Employee</button>

    </form>

</div>

</body>
</html>

