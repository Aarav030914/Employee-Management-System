<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="./style_add.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <form method="post">
        <div class="form-field">
            <input type="username" name='name' placeholder="Employee's Name" required />
        </div>

        <div class="form-field">
            <input type="email" name='mailid' placeholder="Mail ID" required />
        </div>

        <div class="form-field">
            <input type="number" name='contact' placeholder="Contact Number" required />

        </div>
        <div class="form-field">
            <select class="domains" name='department'>
                <option class="dropdown-item">Select Department</option>
                <option class="dropdown-item">IT</option>
                <option class="dropdown-item">HR</option>
                <option class="dropdown-item">Accounts</option>
                <option class="dropdown-item">Sales</option>
                <option class="dropdown-item">Marketing</option>
                <option class="dropdown-item">Business Development</option>
            </select>

        </div>
        <div class="form-field">
            <input type="text" name='date' placeholder="Joining Date" required />
        </div>
        <div class="form-field">
            <input type="password" name='password' placeholder="Password" required />
        </div>
        <div class="form-field">
            <input type="password" name='confirm_password' placeholder="Confirm Password" required />
        </div>
        <div class="form-field">
        <button class="btn" name='submit' type="submit">Submit</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>

<?php
include("connection.php");
if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $mailid=$_POST['mailid'];
    $contact=$_POST['contact'];
    $department=$_POST['department'];
    $date=$_POST['date'];
    $password=$_POST['password'];
    $confirm_password=$_POST['confirm_password'];
    echo "Running";
    $query = "INSERT INTO new_entry (emp_name, emp_id, emp_number, emp_department, emp_date, emp_password, emp_confirm_password) VALUES('$name','$mailid','$contact','$department','$date','$password','$confirm_password')";
    
    $data= mysqli_query($conn,$query);
    if($data){
        echo "Data saved into DataBase";
    }
    else{
        echo "Failed to save data";
    }
}
?>