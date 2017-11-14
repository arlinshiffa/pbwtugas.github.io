<?php
    include("connection.php");
    $username=$_GET['username'];
    $password=$_GET['password'];

    $query=" SELECT * FROM users WHERE username=$username";
    if($result!="" || $result!=null){
        $tempPass= mysqli_query($con, "SELECT * FROM users WHERE");
    }else{
        echo "WRONG USERNAME";
    }
?>