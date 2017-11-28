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
		
		</div>

		<div class="contentDiv">
        <p id="courseinfP" class="w3-theme-l3">
            <b>Adding a new files </b>
        </p>
       </div>

    <div>
        <a>
            <div class="w3-btn w3-black w3-text-white w3-hover-white toggler "  id="blackButton">Expand All</div>
        </a>
       
    </div>
		
		<div id="divLegend">
            <form action=""></form>
        <form method="post" action="../../phpScript/upload.php" style="margin-right: 20px;" enctype="multipart/form-data">
            <fieldset>
               
                <legend>
                    <div class="w3-button w3-medium w3-border w3-border-theme w3-black  w3-hover-theme toggler collapse " >
                        General
                        <i class="fa fa-angle-double-down"></i>
                    </div>
                </legend>

                <div class="w3-hide w3-container collapse">
                    <table>
                        <tr>
                            <td><span id="fieldName"> Name * </span></td>
                            <td> <input type="text" size="30" name="title" id="inputField1"></td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td><textarea type="text" rows="4" size="30" name="description" id="inputField2"> </textarea></td>
                        </tr>
                    </table>
                    <br>
                    <br
                    
                </div>

		    </fieldset>
                        <br>
                <?php
                     if($_GET['typeActivity']=="assignment"){
                        $ID_AT=1;
                        echo '	<fieldset >
                        <legend>
                            <div class="w3-button w3-black w3-text-white toggler collapse1">Availability <i class="fa fa-angle-double-down" aria-hidden="true"></i></div>
                        </legend>
                        <div class="w3-container w3-hide collapse">
                            <table>
                           
                                <tr>
                                        <td  style="text-align:center;" ><label class="">Allow submission from <i class="fa fa-question-circle" aria-hidden="true"></i></label></td>
                                        <td>	<input type="date" name="fromDate" class="form-control" id="" ></td>
                                        <td><input type="checkbox" name="fromDateEnable" value="">Enable</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;" ><label class="">Due date <i class="fa fa-question-circle" aria-hidden="true"></i></label></td>
                                        <td>	<input type="date" name="dueDate" class="form-control" id="" >	</td>
                                        <td><input type="checkbox" name="dueDateEnable" value="">Enable</td>
                                    </tr>
                            </div>
                            
                                    
                                
                            
                            </table>
    
                     </fieldset><br>';
                    }else{
                        $ID_AT=2;
                    }
                ?>
			
		    
          <fieldset>
                <legend>
                    <div class="w3-button w3-medium w3-border w3-border-theme w3-black  w3-hover-theme toggler collapse ">
                        Content
                        <i class="fa fa-angle-double-down"></i>
                    </div>
                </legend>
               
                <div class="w3-container w3-hide">
                    <input type="file" id="thefile" name="file"  style="height:0; width:0;">
                    <label class=" chooseFile" for="thefile" id="filename"> Select files </label><i class="fa fa-question-circle" aria-hidden="true"></i>                  
                </div>
         </fieldset>

            <br>
            <div style="margin-left:27%">
                    
                <input type="hidden" name="courseID" value="<?php echo $_GET['courseID']?>">
                <input type="hidden" name="courseTitle" value="<?php echo $_GET['courseTitle'] ?>">
                <input type="hidden" name="topic" value="<?php echo $_GET['topic'] ?>">
                <input type="hidden" name="id_AT" value="<?php echo $ID_AT?>">
                <input type="hidden" name="typeActivity" value="<?php echo $_GET['typeActivity'] ?>">
                <input class="w3-btn w3-black w3-small w3-hover-white" id="" type="submit" value="SAVE AND RETURN TO COURSE"> 
                <button class="w3-btn w3-black w3-small w3-hover-white"> CANCEL </button>
                
            </div>
        </form>
    </div>
		<br>
		<br>
    
</div>

		<br>
		<br>
		<br>

</html>

<script>
   

    $(document).ready(function () {
        $(".toggler").click(function () {
            $(this).parent().next().toggleClass("w3-hide");
            $(this).children().toggleClass("fa fa-angle-double-down");
            $(this).children().toggleClass("fa fa-angle-double-up");
        });

        $('#thefile').change(function(e){
            $('#filename').html(e.target.files[0].name+" ");
        })

        $("#blackButton").click(function () {
          

           if($(this).html()=="Collapse All"){
            $(this).html("Expand All");
            $(".toggler").each(function(){
                if(!$(this).parent().next().hasClass("w3-hide")){
                    $(this).parent().next().toggleClass("w3-hide");
                    $(this).children().toggleClass("fa fa-angle-double-down");
                    $(this).children().toggleClass("fa fa-angle-double-up");
                    
                } 
           })
           }else{
            $(this).html("Collapse All");
            $(".toggler").each(function(){
                if($(this).parent().next().hasClass("w3-hide")){
                    $(this).parent().next().toggleClass("w3-hide");
                    $(this).children().toggleClass("fa fa-angle-double-down");
                    $(this).children().toggleClass("fa fa-angle-double-up");
                    
                } 
           })
           }
        });

    })
</script>