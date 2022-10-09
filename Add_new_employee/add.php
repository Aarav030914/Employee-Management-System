<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <link rel="stylesheet" href="./style_add.css">

</head>
<body>
<div id="outer">

    <form>
        <div class="form-field">
    <input type="name" placeholder="Employee's Name" required/>
</div>

<div class="form-field">
    <input type="email" placeholder="Mail ID" required/>
</div>

<div class="form-field">
    <input type="number" placeholder="Contact Number" required/>

  </div>
  <div class="form-field">
      <!-- <input type="name" placeholder="Department" required/> -->
      <select class="select">
          <option>Select Department</option>
          <option>IT</option>
          <option>HR</option>
          <option>Accounts</option>
          <option>Sales</option>
          <option>Marketing</option>
          <option>Business Development</option>
      </select>
      
    </div>
    <div class="form-field">
        <input type="text" placeholder="Joining Date" required/>
        
    </div>
    <div class="form-field">
        <input type="password" placeholder="password" required/>
        
    </div>
        <div class="form-field">
        <input type="password" placeholder="Confirm-password" required/>
        
    </div>
  <div class="form-field">
      <button class="btn" type="submit">Submit</button>
    </div>
</form>
</div>
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
    echo "Running";
    $data= mysqli_query($conn,$query);
    if($data){
        echo "Data saved into DataBase";
    }
    else{
        echo "Failed to save data";
    }
}
?>
