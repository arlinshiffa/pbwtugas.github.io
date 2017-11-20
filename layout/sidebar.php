<?php
    $root='/pbwtugas.github.io';
    $link=$root;
    $link.= $_SESSION['link'];
    
?>
 
<div class="w3-sidebar w3-col w3-bar-block w3-padding-large w3-light-grey w3-text-theme-dark w3-bar-block" style="width:23%;position:fixed;">
        <p style="font-size:12px;">You are logged in as</p>
      
        <span class=" w3-text-black" style="font-size:14px;">
            <b><?php echo $_SESSION['NPM'] ?></b></span><br>
        <span class=" w3-text-black" style="font-size:14px;">
            <b><?php echo $_SESSION['name']?></b></span>
          <hr noshade color="lightgrey" align="center" style="width:99%;height:5px;">

        <img id="displaypic" src=<?php echo '"'.$root?>/img/profile.png" width="70px" style="border:solid;border-color:lightgrey;" alt=""> <!-- img\profile.png -->
        <br><br>
        <a href=<?php echo $link?> class="w3-button">
            <i class="fa fa-home" aria-hidden="true"></i> HOME</a><br>
        <a href="#" class="w3-button">
            <span></span>
            <i class="fa fa-list" aria-hidden="true"></i> MY COURSES</a><br>
        <a href="#" class=" w3-button">
            <span></span>
            <i class="fa fa-user" aria-hidden="true"></i> MY PROFILE</a><br>
        <form action=<?php echo '"'.$root?>/pages/lecturer/lct.php"    method="get">
            <button class="w3-bar-item w3-button" name="logout"><i class="fa fa-power-off" aria-hidden="true"></i> LOG OUT</button>
        <form>
    </div>