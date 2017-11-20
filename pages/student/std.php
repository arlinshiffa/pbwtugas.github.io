<!-- include connection dan startSession -->
<?php

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
			<?php 	include('../../phpScript/courses.php');?>
		</div>
	</body>
</html>