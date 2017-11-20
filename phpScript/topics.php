<?php
    $query="SELECT topic, ID_A as idActivity FROM activities WHERE activities.ID_C=$courseID ORDER BY topic ASC, idActivity DESC";
    if($result=$conn->query($query)){
        while($row=$result->fetch_array()){
            $temp=0;
            if($temp!=$row['topic']){
                echo "<div id='courseinfP'  style='margin-left:24%;' class='w3-card w3-container'>";
                echo "<i class='fa fa-newspaper-o'></i> Topic ".$row['topic']."<br><br>";
              
                if($_SESSION['role']=="lecturer"){
                 
                    echo "<button class='w3-button w3-grey  w3-hover-black w3-small' onclick='document.getElementById('addactivity').style.display='block''>Add Activities</button>";
                 
                
                }
                
                echo " </div>";
                $temp++;
            }
        }         
    }      
?>

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