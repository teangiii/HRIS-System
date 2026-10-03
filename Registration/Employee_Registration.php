<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Employee Registration</title>
   <style>
       body {
           font-family: Arial, sans-serif;
           background-color: #f5f5f5;
           margin: 0;
           padding: 30px;
       }

        .container {
            width: 700px;
           margin: auto;
            background: white;
           padding: 30px;
          border-radius: 10px;
       }

       h2 {
           text-align: center;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 15px;        }

        label {
            display: block;
            margin-bottom: 5px;            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .row {
            display: flex;
            gap: 15px;
        }

        .row .form-group {
            flex: 1;
        }

        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background-color: #333;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }
    </style>
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

