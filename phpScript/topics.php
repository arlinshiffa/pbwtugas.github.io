<?php
    $root="/pbwtugas.github.io";
    $query="SELECT topic, ID_A as idActivity FROM activities WHERE activities.ID_C=$courseID ORDER BY topic ASC, idActivity ASC";
            $temp=1;
            $fortitle=1;
            while($temp<7){
                echo "<div id='courseinfP'  style='margin-left:24%;' class='w3-card w3-container'>";
                echo "<i class='fa fa-newspaper-o'></i><span> Topic ".$temp."</span><br><br>";
                $query="SELECT * FROM Activities WHERE ID_C = $courseID AND topic = $temp";
                echo "<div>";
                if($result=$conn->query($query)){
                    while($row=$result->fetch_array()){
                        
                            echo "<div class='w3-small'><a href='../..".$row['fileDir']."' download>";
                        
                       
                        echo $row['title'];
                        echo "</a><br><br>";
                        echo"</div>";
                    }
                }
                echo "</div>";
                if($_SESSION['role']=="lecturer"){
                  

                    echo "<div class='w3-button w3-grey  w3-hover-black w3-small addButton' onclick='openModal()'>Add Activities</div>";
                    echo "<script>function openModal(){document.getElementById('addactivity').style.display='block'}</script>";
                   
                }

                echo " </div>";
                $temp++;
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
                <td><input class="" type="radio" name="typeActivity" value=assignment > </td>
                <td><label for=""><i class ="fa fa-file-text-o"></i> Assignment</label></td>
            </tr>
            <tr>
                <td><input class="" type="radio" name="typeActivity" value=file></td>
                <td><label><i class ="fa fa-file-o"></i> File</label></td>
            </tr>
            <input type="hidden" name="courseID" value="<?php echo $courseID ?>">
            <input type="hidden" name="topic" value="" id="topic">
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
<script>
    
    $(".addButton").click(function(){
        var str=$(this).prev().prev().prev().prev().html();
        var res = str.substring(6,8);
        resInt= parseInt(res);
        $("#topic").val(resInt);
    })
</script>