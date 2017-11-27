<?php

	include('../../phpScript/connection.php');
	include('../../phpScript/startSession.php');
    include('../../phpScript/endSession.php');
    $target_dir= "uploads/"

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
            <b>Adding a new files</b>
        </p>
       </div>

    <div>
        <a>
            <div class="w3-btn w3-black w3-text-white w3-hover-white toggler "  id="blackButton">Expand All</div>
        </a>
    </div>
		
		<div id="divLegend">
        <form method="get" action="addActivity.php" style="margin-right: 20px;">
            <fieldset>

                <legend>
                    <div class="w3-button w3-medium w3-border w3-border-theme w3-black  w3-hover-theme toggler collapse " >
                        General
                        <i class="fa fa-angle-double-down"></i>
                    </div>
                </legend>
                <div class="w3-hide w3-container collapse">
                    <span id="fieldName"> Name * </span>
                    <input type="text" size="30" id="inputField1">
                    <br>
                    <br>Description
                    <textarea type="text" rows="4" size="30" id="inputField2"> </textarea>
                </div>

						</fieldset>
						<br>
						<fieldset >
					<legend>
						<div class="w3-button w3-black w3-text-white toggler collapse1">Availability <i class="fa fa-angle-double-down" aria-hidden="true"></i></div>
					</legend>
                    <div class="w3-container w3-hide collapse">
						<table>
                       
                            <tr>
                                    <td  style="text-align:center;" ><label class="">Allow submission from <i class="fa fa-question-circle" aria-hidden="true"></i></label></td>
                                    <td>	<input type="date" class="form-control" id="" ></td>
                                    <td><input type="checkbox" name="" value="">Enable</td>
                                </tr>
                                <tr>
                                    <td style="text-align:center;" ><label class="">Due date <i class="fa fa-question-circle" aria-hidden="true"></i></label></td>
                                    <td>	<input type="date" class="form-control" id="" >	</td>
                                    <td><input type="checkbox" name="" value="">Enable</td>
                                </tr>
                        </div>
						
								
							
						
						</table>

				 </fieldset>
						<br>
          <fieldset>
                <legend>
                    <div class="w3-button w3-medium w3-border w3-border-theme w3-black  w3-hover-theme toggler collapse ">
                        Content
                        <i class="fa fa-angle-double-down"></i>
                    </div>
                </legend>

                <span class="w3-container w3-hide collapse">Select files <input type="file" name="pic" accept="image/*">
                    <i class="fa fa-question-circle" aria-hidden="true"></i>
                </span>
            </fieldset>
        </form>
    </div>
		<br>
		<br>
    <div>
        <button class="w3-btn" id="confirmButton1"> CANCEL </button>
        <button class="w3-btn" id="confirmButton2"> SAVE AND RETURN TO COURSE </button>
		</div>
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