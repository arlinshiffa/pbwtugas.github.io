<!-- include connection dan startSession-->
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

		<div id='addactivity' class='w3-modal '>; 
   <div class='w3-modal-content  w3-animate-right'>;
       <div class='w3-container modalContainer'>
           <span onclick='document.getElementById('addactivity').style.display='none''class='w3-button w3-display-topright'>&times;</span>
           <h2>Select Activity</h2>
           <form action='' method=''>
               <input class='w3-radio' type='radio' name='typeA' value='assignment'>
               <br>
               <input class='w3-radio' type='radio' name='typeA' falue='file'>
               <br>
               <input type ='submit' class='w3-btn w3-black w3-small w3-hover-white' value='Add' name='addActivity'>
                <br>
           </form>
       </div>
    </div>
  </div>
		
	</body>
</html>