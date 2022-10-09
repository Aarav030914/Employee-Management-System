<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <link rel="stylesheet" href="Login Page/style.css">

</head>
<body>
  <div id="bg"></div>

  <form action="#" autocomplete="off" method="POST">
    <div class="form-field">
      <input type="username" name="username" placeholder="Username" required/>
    </div>
    
    <div class="form-field">
      <input type="password" name="password" placeholder="Password" required/>
    </div>
    
    <div class="form-field">
      <button class="btn" name="myButton" id="myButton">Log in</button>
    </div>
  </form>
</body>
</html>

<?php
include("Login Page/connection.php");

if(isset($_POST['myButton'])){
    $username=$_POST['username'];
    $pwd=$_POST['password'];
    $query ="SELECT * FROM new_entry WHERE emp_id='$username' && emp_password='$pwd'";
    $data=mysqli_query($conn,$query);
    $total =mysqli_num_rows($data);
    if($total==0){
        echo "LOGIN FAILED";
    }
    else{
?>

        <meta http-equiv = "refresh" content = "0; url = Employer Dashboard/home.html"/>;
<?php
    }
}
?>
