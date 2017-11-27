<?php
    $root="/pbwtugas.github.io";
    $query="SELECT topic, ID_A as idActivity FROM activities WHERE activities.ID_C=$courseID ORDER BY topic ASC, idActivity DESC";
    if($result=$conn->query($query)){
        while($row=$result->fetch_array()){
            $temp=0;
            if($temp!=$row['topic']){
                echo "<div id='courseinfP'  style='margin-left:24%;' class='w3-card w3-container'>";
                echo "<i class='fa fa-newspaper-o'></i> Topic ".$row['topic']."<br><br>";
              
                if($_SESSION['role']=="lecturer"){
                 
                    echo "<div class='w3-button w3-grey  w3-hover-black w3-small' onclick='openModal()'>Add Activities</div>";
                    echo "<script>function openModal(){document.getElementById('addactivity').style.display='block'}</script>";
                
                }
                
                echo " </div>";
                $temp++;
            }
        }         
    }      
?>

<div id="addactivity" class="w3-modal divModal">
<div class="w3-modal-content  w3-animate-right loginmodal">
    <div class="w3-container modalContainer">
    <span onclick="document.getElementById('addactivity').style.display='none'" class="w3-button w3-display-topright">&times;</span>
    <h2>Add Activity</h2>
    <form action=""></form>
    <form action="<?php echo $root?>/pages/lecturer/addActivity.php" method="get">
        <table>
            <tr>
                <td><input class="" type="radio" name="typeActivity" value="assignment" > </td>
                <td><label for=""><i class ="fa fa-file-text-o"></i> Assignment</label></td>
            </tr>
            <tr>
                <td><input class="" type="radio" name="typeActivity" value="file"></td>
                <td><label><i class ="fa fa-file-o"></i> File</label></td>
            </tr>
            <input type="hidden" name="courseID" value="<?php echo $courseID ?>">
            <input type="hidden" name="courseTitle" value="<?php echo $courseTitle ?>">
        </table>
        <br>
        <input class="w3-btn w3-black w3-small w3-hover-white" value="Add" type="submit"> 
        <br>
        <br>
    </form>
    </div>
</div>
</div>