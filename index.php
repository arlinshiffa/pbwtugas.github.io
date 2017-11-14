<?php 
	if(strpos($_SERVER['REQUEST_URI'],'.php')!=false){
		$GLOBALS['root']= dirname($_SERVER['REQUEST_URI']);
	}else{
		$GLOBALS['root']= $_SERVER['REQUEST_URI'];
	}
?>
<!DOCTYPE html>
<html>
	<head>

		<title>IDE</title>
		<?php
			include("layout/style.php");
		?>
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	</head>
	
	<body class="w3-theme bodyIndex">
		<div class="menuBar w3-padding-large w3-display-topright">
		<button class="w3-button w3-grey w3-opacity-min w3-hover-white w3-small " >About Us</button>
		<button class="w3-button w3-grey w3-opacity-min w3-hover-white w3-small " >Contact Us</button>
		<button class="w3-button w3-grey w3-opacity-min w3-hover-white w3-small " >Help</button>
		</div>
	

			<p class="IDEtitle" style="font-size:50px;">IDE</p>
			<p class="title1" style="font-size:20px;">Interactive Digital Learning Environment</p>
			<p class="title2" style="font-size:14px;">-Faculty of Information Technology and Science</p>
		
		
		<button class="w3-button w3-grey w3-opacity-min w3-hover-white w3-medium" 
		onclick="document.getElementById('login').style.display='block'"style="margin-left:30px">Login</button>
		<p class="w3-display-bottomleft copyright" style="font-size:12px;">©Developed by Maria Veronica Claudia Muljana,S.T.</p>
	
		<!-- The Modal -->
		<div id="login" class="w3-modal divModal">
			<div class="w3-modal-content  w3-animate-right loginmodal">
				<div class="w3-container modalContainer">
				<span onclick="document.getElementById('login').style.display='none'" 
				class="w3-button w3-display-topright">&times;</span>
				<h2>Login</h2>

				<form action="phpScript/login.php" method="post">
					<input class="w3-input" type="text" name="username" placeholder="username">
					<br>
					<input class="w3-input" type="password" name="password" placeholder="password">
					<br>
					<input type ="submit" class="w3-btn w3-black w3-small w3-hover-white" value="LOGIN" name="iSubmit">
					<br>
				</form>

				<!--include login.php-->
				
				<p><a href="">Forget password</a> or <a href="">forget username</a>?</p>
				</div>
			</div>
		</div>
	</body>
</html>