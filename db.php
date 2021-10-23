<?php
    $conn=mysqli_connect("localhost","root","","spinx");
    if(!$conn){
        echo "Connection failed".mysqli_connect_error($conn);
    }
?>