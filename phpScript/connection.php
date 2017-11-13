<?php
    //create connection
    //urutan parameter: nysql (server, username, password, database)
    $conn = new mysqli("localhost", "root", "","ide");
    
        //check connection
        if($conn->connect_errno){
            echo "Failed to connect.";
        } 
?>