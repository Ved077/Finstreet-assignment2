<?php
include 'db.php';
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$email=$_REQUEST['email'];
$message=$_REQUEST['message'];

$sql="INSERT INTO form VALUES('','$fname','$lname','$email','$message')";
    if(mysqli_query($conn,$sql)){
        echo '<script>alert ("Register succesfully")</script>';
        header("location:index.php");
    }
    else{
        echo '<script>alert ("Not Register")</script>'.mysqli_error($conn);
    }

?>