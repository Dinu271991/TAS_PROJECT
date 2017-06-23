


<?php
/*echo '<html>
<head>
<style type="text/css">
div.columns { width: 50%; height: 70%; float: left; }
</style>
</head>
<body>

</body>
</html>'*/?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Programs</title>
<!--<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> -->
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<!--<link href="style.css" rel="stylesheet" media="screen">-->
<link href="StyleSheet/GenericStyleSheet.css" rel="stylesheet" type="text/css">
<link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<script type="text/javascript">
$(document).ready(function () {
    //Disable cut copy paste
    $('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });
   
    //Disable mouse right click
    $("body").on("contextmenu",function(e){
        //return false;
    });
	
	$("#Save").click(function(){
$.post("tempProg.php",$("#myFrm").serialize(),function(response,status){ // Required Callback Function
//alert("*----Received Data----*\n\nResponse : " + response+"\n\nStatus : " + status);//"response" receives - whatever written in echo of above PHP script.
alert("Your answers has been saved successfully!!");
//$("#form")[0].reset();
//return false;
});

});
	
});


</script>
</head>

<body>
<h3>You are under Programming Section!!</h3>
<form name="home" action="ProgSubmit.php" method="POST" id='myFrm'  onsubmit="return confirm('Do you really want to submit the form?');">


<div class="content">
     	<div class="container">
     		<div class="row">

<?php

$i = 0;
$j = 1; $k = 1;	

require_once 'dbconfig.php';
        
 $stmt = $db_con->prepare("SELECT * FROM tbl_programs ORDER BY RAND()");
 $stmt->execute();
 $count = $stmt->rowCount();
 
 $number_question =  $stmt->rowCount();
 $rowcount = $stmt->rowCount();
 $remainder = ($rowcount)/($number_question);
 
//echo "You are in Programming Section<br/><br/>";
    //echo "<br/>";

		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					    {		
							if ( $i == 0) echo "<div class='cont' id='question_splitter_$j'>"; ?>
							<div class="columns" id='Progam<?php echo $k;?>' >
									
							<?php  
								echo "<br/>".$k." ".$row['prog_desc']."<br/>"; ?>
								<textarea autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' rows='25' cols='100' id='prog<?php echo $row['program_id'];?>' name='prog<?php echo $row['program_id'];?>' style='resize: none;'></textarea>
								
								<br/><br/>							
								</div> 
							<?php 
								  $i++; 
								 if ( ( $remainder < 1 ) || ( $i == $number_question && $remainder == 1 ) ) {
									
									echo "<button id='Save' class='save' type='button' style=position:fixed;left:93%;>Save</button>";
								 	//echo "<button id='".$j."' class='submit' type='submit' style=position:fixed;right:60%;>Final Submit</button>";
								 	echo "</div>";
									
								 }  elseif ( $rowcount > $number_question  ) {
								 	if ( $j == 1 && $i == $number_question ) {
										
										echo "<button id='".$j."' class='next btn btn-primary' type='button' style=position:relative;top:70px>Next</button>";
										echo "</div>";
										
										$i = 0;
										$j++;           
									} elseif ( $k == $rowcount ) { 
									
									if(($rowcount%2)!=0)
									{
									
										echo " <button id='".$j."' class='previous btn btn-primary' type='button' style=position:relative;top:400px;right:490px;>Previous&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
													<button id='".$j."' class='next btn btn-primary' type='submit' style=position:relative;top:400px;right:470px;>Final Submit</button>";
										echo "</div>";	
									}
									else
									{
										
										/*echo " <button id='".$j."' class='previous btn btn-primary' type='button' style=position:relative;top:70px>Previous&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
													<button id='".$j."' class='next btn btn-primary' type='submit' style=position:relative;top:70px>Final Submit</button>";
										echo "</div>"; */
									}
										
										$i = 0;
										$j++;
									} elseif ( $j > 1 && $i == $number_question ) {
										
										echo "<button id='".$j."' class='previous btn btn-primary' type='button' style=position:relative;top:70px>Previous</button>
								                    <button id='".$j."' class='next btn btn-primary' type='button' style=position:relative;top:70px>Next</button>";
										echo "</div>";
										
										$i = 0;
										$j++;
									}
									
								 }
								  $k++;
						     } 
							 
						 ?>
 		
	</form>
	
	

    </div>
</div>

</div>
</div>
</div>

</div>
<?php

?>

<!--<button class="save" style="position:fixed;right:57%;" onclick="saveTemp()">Save</button>";	

<script type="text/javascript">
function saveTemp()
{
	alert("Clicked on Save!!");
}

</script> -->

<script src="bootstrap/js/bootstrap.min.js"></script>
<script>
		$('.cont').addClass('hide');
		$('#question_splitter_1').removeClass('hide');
		$(document).on('click','.next',function(){
		    last=parseInt($(this).attr('id'));  console.log( last );   
		    nex=last+1;
		    $('#question_splitter_'+last).addClass('hide');
		    
		    $('#question_splitter_'+nex).removeClass('hide');
		});
		
		$(document).on('click','.previous',function(){
		    last=parseInt($(this).attr('id'));     
		    pre=last-1;
		    $('#question_splitter_'+last).addClass('hide');
		    
		    $('#question_splitter_'+pre).removeClass('hide');
		});
</script>


</body>
</html>