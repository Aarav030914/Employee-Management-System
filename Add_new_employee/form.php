<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>

</head>
<body>
    <form action="#" method="POST">
    <input type="name" name="name" placeholder="Employee's Name" required/>
    <input type="email" name="mailid"  placeholder="Mail ID" required/>
    <input type="number" name="contact"  placeholder="Contact Number" required/>
      <select class="select" name="department" >
          <option>Select Department</option>
          <option>IT</option>
          <option>HR</option>
          <option>Accounts</option>
          <option>Sales</option>
          <option>Marketing</option>
          <option>Business Development</option>
      </select>
        <input type="text" name="date" placeholder="Joining Date" required/>
        <input type="password" name="password"  placeholder="password" required/>
        <input type="password" name="confirm_password"  placeholder="Confirm-password" required/>
      <button type="submit" name="save">Save</button>
</form>
</body>
</html>

<?php
include("connection.php");
if (isset($_POST['save'])) {
    $name=$_POST['name'];
    $mailid=$_POST['mailid'];
    $contact=$_POST['contact'];
    $department=$_POST['department'];
    $date=$_POST['date'];
    $password=$_POST['password'];
    $confirm_password=$_POST['confirm_password'];
    $query = "INSERT INTO form (emp_name,emp_id, emp_number, emp_department, emp_date, emp_password, emp_confirm_password) VALUES('$name','$mailid','$contact','$department','$date','$password','$confirm_password')";
    // echo "Running";
    $data= mysqli_query($conn,$query);
    if($data){
        echo "Data saved into DataBase";
    }
    else{
        echo "Failed to save data";
    }
}
?>