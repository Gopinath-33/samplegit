<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $con = mysqli_connect("localhost", "root", "", "db_contact");

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $fname = $_POST['fname'];
    $designation = $_POST['designation'];
    $department = $_POST['department'];
    $d_from=date('y-m-d',strtotime($_POST['d_from']));
    $d_to=date('y-m-d',strtotime($_POST['d_to']));
    $time_from =date('H:i:s',strtotime($_POST['time_from']));
    $time_to = date('H:i:s',strtotime($_POST['time_to']));
    $Leave_credit = $_POST['Leave_credit'];
    $reason = $_POST['reason'];
    $date_ = date('y-m-d',strtotime($_POST['date_']));
    $hour_ = $_POST['hour_'];
    $class_ = $_POST['class_'];
    $year_ = $_POST['year_'];
    $afname_ = $_POST['afname_'];
   
    
    


    $sql = "INSERT INTO tbl_contact,alternate(fname, designation, department, d_from, d_to,time_from,time_to, Leave_credit,
    reason,date_,hour_,class_,year_,afname_) 
            VALUES ('$fname', '$designation', '$department', '$d_from', '$d_to','$time_from','$time_to',
             '$Leave_credit','$reason','$date_','$hour_','$class_','$year_','$afname_' )";

    $sql = "INSERT INTO alternate(date_,hour_,class_,year_,afname_) 
            VALUES ('$date_','$hour_','$class_','$year_','$afname_' )";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "User data is added successfully";
    } else {
        echo "Unsuccessful: " . mysqli_error($con);
    }

    mysqli_close($con);
}
?>