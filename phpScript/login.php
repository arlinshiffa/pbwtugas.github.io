<?php
    include("connection.php");
   
    $query;
    if(isSet($_POST['iSubmit'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        echo $username. "<br>";
        echo $password. "<br>";
        if(isset($username) && isset($password) && $username!="" && $password!=""){
            $query= "SELECT * FROM users WHERE username='$username'";
        }
        $result=$conn->query($query)->fetch_array();
        if($conn->query($query)->num_rows==0){
            echo "WRONG USERNAME";
        }else{
            if($password!=$result['pass']){
                echo "WRONG PASSWORD";
            }
        }
    }
    
    $query="SELECT userGroups.name as name FROM userGroups INNER JOIN users ON userGroups.ID_UG=users.ID_UG WHERE username='$username'";
    $result=$conn->query($query)->fetch_array();
    $role=$result['name'];
    if($role=="lecturer"){
        header ('Location: ../pages/lecturer/lct.php');
    }else{
        header ('Location: ../pages/student/std.php');
    }


?>