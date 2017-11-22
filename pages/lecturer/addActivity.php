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
            <b>Adding a new files</b>
        </p>
       </div>
    <div>
        <a href="">
            <button class="w3-btn w3-black w3-text-white w3-hover-white" id="blackButton">Collapse All</button>
        </a>
    </div>
		
		<div id="divLegend">
        <form style="margin-right: 20px;">
            <fieldset>

                <legend>
                    <button class="w3-button w3-medium w3-border w3-border-theme w3-black  w3-hover-theme " >
                        General
                        <i class="fa fa-angle-double-down"></i>
                    </button>
                </legend>
                <div class=" w3-container">
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
						<button class="w3-button w3-black w3-text-white">Availability <i class="fa fa-angle-double-down" aria-hidden="true"></i></button>
					</legend>
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
								
							
						
						</table>

				 </fieldset>
						<br>
          <fieldset>
                <legend>
                    <button class="w3-button w3-medium w3-border w3-border-theme w3-black  w3-hover-theme ">
                        Content
                        <i class="fa fa-angle-double-down"></i>
                    </button>
                </legend>
                <span>Select files
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
            $("w3-container").toggleClass("w3-hide");
            $("i")("fa fa-angle-double-down");
            $("i")("fa fa-angle-double-up");
        });

    })
</script>