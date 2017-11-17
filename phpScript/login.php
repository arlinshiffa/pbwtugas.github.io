<?php
    include("connection.php");
    

    
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

            include("startSession.php");


            $query="SELECT userGroups.name as role, users.username as username, users.userID as ID, users.name as name FROM userGroups INNER JOIN users ON userGroups.ID_UG=users.ID_UG WHERE username='1665'";
            $result=$conn->query($query)->fetch_array();
            $role=$result['role'];
            //session
            $_SESSION=$result;
         
            if($role=="lecturer"){
                $_SESSION['link']="/pages/lecturer/lct.php";
                header ('Location: ../pages/lecturer/lct.php');
            }else{
                $_SESSION['link']="/pages/student/std.php";
                header ('Location: ../pages/student/std.php');
            }

    }
    
  
  
    


?>