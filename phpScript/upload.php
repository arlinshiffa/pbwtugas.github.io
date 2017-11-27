<?php
    include("connection.php");
    include("startSession.php");

    $courseTitle=substr($_POST['courseTitle'],0,strpos($_POST['courseTitle'],"/"));
    $courseTitle1=$_POST['courseTitle'];
    
    $query="INSERT INTO submissions (ID_A,ID_U,submitTime,fileDirectory) VALUES(".$_POST['ID_A'].",".$_SESSION['ID'].",".time().",/upload/".$_POST['typeActivity']."/$courseTitle/". basename($_FILES["file"]["name"]).")";

    //target folder untuk mengupload file
    $target_dir="../upload/".$_POST['typeActivity']."/$courseTitle/";
    $target_file= $target_dir.basename($_FILES["file"]["name"]);
    

    //membuat folder baru
    if(!file_exists($target_file)){
        mkdir($target_dir,0777,true);
    }

    //try to upload in the right folder
    $fileType=pathinfo($target_file, PATHINFO_EXTENSION);
    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
    echo $query;
    echo $courseTitle1;


?>