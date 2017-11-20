<?php
    $id=$_SESSION['ID'];
    $query="SELECT CONCAT(courses.code,' / ',courses.course) as course, Courses.ID_C as id
            FROM Courses JOIN Enrollments
            ON Courses.ID_C = Enrollments.ID_C
            WHERE $id= Enrollments.ID_U";
            
?>
<div class="w3-col">
    <div class="contentDiv">
            <p id="courseinfP" style=" margin-left:24%;" class="w3-theme-l3">
                <b>COURSE OVERVIEW</b>
            </p>
    </div>
    <div class="matkul">
            <?php
                 if($result = $conn->query($query)){
                    while($row = $result->fetch_array()){
                        $courseID= $row['id'];
                        $course = $row['course'];
                        echo "<div id='courseinfP'  style='margin-left:24%;' class='w3-card w3-container w3-hover-opacity'>";
                        echo "<a class='matkul' href='course.php?id=".$courseID."&courseTitle=".$course."'>".$row['course'].'</a>';
                        echo "</div>";
                        echo "<br>";
                    }
                }
            ?>
            
    </div>
</div>
