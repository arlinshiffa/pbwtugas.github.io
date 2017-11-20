<?php
    $root='/pbwtugas.github.io';
    if(isset($_GET['logout'])){
        $cookie_value = $_SESSION['username'];
        session_unset();
        session_destroy();
        setcookie('username', $cookie_value, time()+(86400*30),"$root/index.php");
        echo $cookie_value;
        header("Location: $root/index.php");
    }
?>