<?php
    include("connection.php");
    include("startSession.php");

    $courseTitle=substr($_POST['courseTitle'],0,strpos($_POST['courseTitle']," /"));
    $courseTitle1=$_POST['courseTitle'];
    $id_AT = $_POST['id_AT'];

     //target folder untuk mengupload file
    $target_dir="../upload/".$_POST['typeActivity']."/$courseTitle/";
    $target="/upload/".$_POST['typeActivity']."/$courseTitle/";
    $target_file= $target_dir.basename($_FILES["file"]["name"]);
    $fileDir=$target.basename($_FILES["file"]["name"]);

     //membuat folder baru
     if(!file_exists($target_dir)){
        mkdir($target_dir,0777,true);
    }

    $fromDate= "NULL";
    $dueDate= "NULL";
    if($_POST['fromDateEnable']==true){
        $fromDate= $_POST['fromDate'];
        $fromDate="'".$fromDate."'";
    }

    if($_POST['dueDateEnable']==true){
        $dueDate= $_POST['dueDate'];
        $dueDate="'".$dueDate."'";
    }
    echo $dueDate;
     //$query="INSERT INTO submissions (ID_A,ID_U,submitTime,fileDirectory) VALUES(".$_POST['ID_A'].",".$_SESSION['ID'].",".time().",/upload/".$_POST['typeActivity']."/$courseTitle/". basename($_FILES["file"]["name"]).")";
    $query2="INSERT INTO activities(ID_AT,ID_C,dateOpen, dateClose, submissions, title, topic, fileDir) VALUES(".$id_AT.",".$_POST['courseID'].",".$fromDate.",".$dueDate.",0,'".$_POST['title']."',".$_POST['topic'].",'".$fileDir."')";
    //run the query
    $conn->query($query2);

    //try to upload in the right folder
    $fileType=pathinfo($target_file, PATHINFO_EXTENSION);
    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
    //echo $courseTitle1;
    // echo $_POST['courseID'];
  header('Location:'.'../pages/lecturer/course.php?&id='.$_POST['courseID']."&courseTitle=".$_POST['courseTitle']."&id_AT=".$id_AT);
?>