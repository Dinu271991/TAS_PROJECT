<h3>You are under Aptitude Section!! </h3>
<HTML>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Aptitiude</title>
<!--<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> -->
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<!--<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" media="screen">-->
<link href="StyleSheet/GenericStyleSheet.css" rel="stylesheet" type="text/css">

<style>
	.cont {
			float:left;
			
}
#maxQuest {
	float:right;
	margin-right:250px;
}
.questions{
	font-size:18px;
}

</style>
<script type="text/javascript">
$(document).ready(function () {
    //Disable cut copy paste
    $('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });
   
    //Disable mouse right click
    $("body").on("contextmenu",function(e){
        return false;
    });
	
	$("#Save").click(function(){
$.post("tempApti.php",$("#quiz_form").serialize(),function(response,status){ // Required Callback Function
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

 <button id="Save" class="save" type="button" style="position:fixed;top:0%;left:93%;">Save</button>
<?php
require_once 'dbconfig.php';
	$i = 0;
	$j = 1;
	$k = 1;	
	
	$i++; 
	
	$stmt = $db_con->prepare("SELECT * FROM mcq ORDER BY RAND()");
    $stmt->execute();							//$number_question =  2;
	$number_question =  2;
	$rowcount = $stmt->rowCount();
	$remainder = ($rowcount)/($number_question);
	//echo "You are in Aptitude Section";	
	echo "<span id='maxQuest'><b>No of Questions:: ".$rowcount."</b></span>";
	
	
	//echo "<form name=myfm method=post action=mcqValidate.php>"; 
	echo "<table>"; 
	
	?>
	
	
	<form class="form-horizontal" role="form" id='quiz_form' name="home" method="post" action="AptiSubmit.php">
						<?php
						
							$number_question =  $stmt->rowCount();
							$rowcount =  $stmt->rowCount();
							$remainder = ($rowcount)/($number_question);
							//$number_question =  2;
							
							$i = 0;
							$j = 1; $k = 1;	
							//$user = new Cl_User();
							//$results = $user->getQuestions($_POST  );	
																		
						?>
						<?php
						while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					    {
							 if ( $i == 0) echo "<div class='cont' id='question_splitter_$j'>";?>
							 
							<div id='question<?php echo $k;?>' >
							<p class='questions' id="qname<?php echo $j;?>"> <?php echo $k?>.<?php echo $row['qdesc'];?></p>
							<input type="radio" value="1" id='radio1_<?php echo $row['qid'];?>' name="ans<?php echo $row['qid'];?>"/><?php echo $row['option1'];?>
							<br/>
							<input type="radio" value="2" id='radio1_<?php echo $row['qid'];?>' name="ans<?php echo $row['qid'];?>"/><?php echo $row['option2'];?>
							<br/>
							
							<?php if(isset( $row['option3'] ) && !empty( $row['option3'] )){ ?>
							<input type="radio" value="3" id='radio1_<?php echo $row['qid'];?>' name="ans<?php echo $row['qid'];?>"/><?php echo $row['option3'];?>
							<br/>
							<?php } ?>
							
							<?php if(isset( $row['option4'] ) && !empty( $row['option4'] )){ ?>
							<input type="radio" value="4" id='radio1_<?php echo $row['qid'];?>' name="ans<?php echo $row['qid'];?>"/><?php echo $row['option4'];?>
							<br/>
							<?php } ?>
							
							<?php if(isset( $row['option5'] ) && !empty( $row['option5'] )){ ?>
							<input type="radio" value="5" id='radio1_<?php echo $row['qid'];?>' name="ans<?php echo $row['qid'];?>"/><?php echo $row['option5'];?>
							<br/>
							<?php } ?>
							
							<?php if(isset( $row['option6'] ) && !empty( $row['option6'] )){ ?>
							<input type="radio" value="6" id='radio1_<?php echo $row['qid'];?>' name="ans<?php echo $row['qid'];?>"/><?php echo $row['option6'];?>
							<br/>
							<?php } ?>
							
							
							<input type="radio" checked='checked' style='display:none' value="smart_quiz" id='radio1_<?php echo $row['qid'];?>' name='<?php echo $row['qid'];?>'/>                                                                      
							<br/>
							</div>
							<?php 
								 $i++; 
								 if ( ( $remainder < 1 ) || ( $i == $number_question && $remainder == 1 ) ) {
									//echo "<button id='".$j."' class='save' style=position:fixed;top:0%;right:60%; onClick=saveTemp();>Save</button>";
								
								 	//echo "<button id='".$j."' class='submit' type='submit' style=position:fixed;top:0%;right:60%;>Final Submit</button>";
								 	echo "</div>";
								 }  elseif ( $rowcount > $number_question  ) {
								 	if ( $j == 1 && $i == $number_question ) {
										echo "<button id='".$j."' class='next btn btn-primary' type='button'>Next</button>";
										echo "</div>";
										$i = 0;
										$j++;           
									} elseif ( $k == $rowcount ) { 
										/*echo " <button id='".$j."' class='previous btn btn-primary' type='button'>Previous</button>
													<button id='".$j."' class='next btn btn-primary' type='submit'>Final Submit</button>";
										echo "</div>";*/
										$i = 0;
										$j++;
									} elseif ( $j > 1 && $i == $number_question ) {
										echo "<button id='".$j."' class='previous btn btn-primary' type='button'>Previous</button>
								                    <button id='".$j."' class='next btn btn-primary' type='button' >Next</button>";
										echo "</div>";
										$i = 0;
										$j++;
									}
									
								 }
								  $k++;
						     } 
						
						?>
						</form>
			

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
<script src="bootstrap/js/bootstrap.min.js"></script>
</html>












