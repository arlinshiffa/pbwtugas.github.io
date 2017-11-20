<?php
     $courseID=$_GET['id'];
     $courseTitle = $_GET['courseTitle'];
     //include connection dan startSession
     include('../../phpScript/connection.php');
     include('../../phpScript/startSession.php');
     include('../../phpScript/endSession.php');
?>


<!DOCTYPE html>
<html>
	<head>
		<title>IDE</title>
		<!-- include style -->
		<?php include('../../layout/style.php');?>
	</head>
	
	<body>
		<?php $myCourses = false ?>
		<!-- include header -->
		<?php include('../../layout/header.php'); ?>
		<div class="w3-main w3-row" style="margin-top:175px;">
			<!-- include sidebar -->
            <?php include('../../layout/sidebar.php'); ?>
            
            <div class="contentDiv">
                <p id="courseinfP" style=" margin-left:24%;" class="w3-theme-l3">
                    <b><?php echo $courseTitle?></b>
                </p>
            </div>

            <div class="topic">
                <?php include("../../phpScript/topics.php");?>
            </div>
               
                
		</div>
		
	</body>
</html>