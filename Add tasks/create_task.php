<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="./add_tasks.html">Move to the Task List Page</a>
    <form action="">
        <div>
            <label>id:
                <input type="text" name="id">
            </label>
        </div>
        <div>
            <label>Description:
                <input type="text" name="task_description">
            </label>
        </div>
        <div>
            <label>Date:
                <input type="date" name="date_of_assign">
            </label>
        </div>
        <div>
            <label>Start-Time:
                <input type="time" name="start-time">
            </label>
        </div>
        <div>
            <label>End-Time:
                <input type="time" name="end-time">
            </label>
        </div>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>

</html>
<?php
include("connection.php");
if (isset($_POST['submit'])) {
    $id=$_POST['id'];
    $task=$_POST['task_description'];
    $date1 = $_POST['date_of_assign'];
    $start_time = $_POST['start-time'];
    $end_time = $_POST['end-time'];
    $query = "INSERT INTO task (id,task,date1,start_time,end_time) VALUES('$emp_id','$description','$date','$start','$end')";
    $data = mysqli_query($conn, $query);
    echo "Running";
    if ($data) {
        echo "Data saved into DataBase";
    } else {
        echo "Failed to save data";
    }
}
?>