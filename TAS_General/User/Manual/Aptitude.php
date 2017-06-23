<h3>You are under Aptitude Section!!</h3>
<HTML>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Manual Aptitiude</title>
<!--<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">--> 
<script type="text/javascript" src="../jquery-1.11.3-jquery.min.js"></script>

<!--<link href="../assets/datatables.min.css" rel="stylesheet" type="text/css">
<link href="../style.css" rel="stylesheet" media="screen">--> 

<link href="../StyleSheet/GenericStyleSheet.css" rel="stylesheet" type="text/css">
<style>
	.cont {
			float:left;
			<!--margin-left:220px;--> 
}
#maxQuest {
	float:right;
	margin-right:230px;
}
</style>
<script type="text/javascript">
$(document).ready(function () {
   	
	$("#Save").click(function(){
$.post("tempapti.php",$("#quiz_form").serialize(),function(response,status){ // Required Callback Function
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

 

<?php
		require_once '../dbconfig.php';
        
       /* $stmt = $db_con->prepare("SELECT * FROM mcq");
        $stmt->execute();
		$i=1;
		echo "<form name=myfm method=post action=mcqValidate.php>"; 
		echo "<table>";
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			?>
			<?php 
			$que_des=$row["qdesc"]; 
			$option1=$row["option1"];
			$option2=$row["option2"]; 
			$option3=$row["option3"]; 
			$option4=$row["option4"]; 
			
			
			echo "<tr> <td padding='15px'>$i.$que_des </td> </tr> ";
			echo "<tr><td class=style8><input type=radio name=ans$i value=1>$option1 </td><td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
			echo "<td class=style8> <input type=radio name=ans$i  value=2>$option2" ."</tr>";
			echo "<tr><td class=style8><input type=radio name=ans$i   value=3>$option3 </td><td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
			echo "<td class=style8><input type=radio name=ans$i  value=4>$option4</td></tr>";
			echo "<tr><th colspan='6'><br/><hr width='100%'></th><tr>";
			$i++;
					
		}
		echo "</div>";
		echo "<tr><td><input type=submit name=submit value='Save & Next' id='submit_button'/></td></tr>";

		echo "<br/>";
		$num=$i-1;
		echo "<div align='right'>No of Questions ".$num."</div>";
		echo "</table>";
		echo "</form>";


		echo "\n\n";	*/

?>

<?php

	$i = 0;
	$j = 1;
	$k = 1;	
	
	$i++; 
	
	$stmt = $db_con->prepare("SELECT * FROM tbl_manual_aptitude ORDER BY rand()");
    $stmt->execute();							//$number_question =  2;
	$number_question =  3;
	$rowcount = $stmt->rowCount();
	$remainder = ($rowcount)/($number_question);
	//echo "You are in Aptitude Section";	
	echo "<span id='maxQuest' ><b>No of Quest:: ".$rowcount."</b></span>";
	
	
	//echo "<form name=myfm method=post action=mcqValidate.php>"; 
	echo "<table>"; ?>
	
	
	<form class="form-horizontal" role="form" id='quiz_form' name="home" method="post" action="AptiSubmit.php">
						<?php
						
							
							$rowcount = $stmt->rowCount();
							$number_question =  $rowcount;
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
								 	echo "<button id='Save' class='save' type='button' style=position:fixed;left:93%;>Save</button>";
								 	//echo "<button id='".$j."' class='submit' type='submit' style=position:fixed;right:60%;>Final Submit</button>";
								 	echo "</div>";
								 }  elseif ( $rowcount > $number_question  ) {
								 	if ( $j == 1 && $i == $number_question ) {
										echo "<button id='".$j."' class='next btn btn-primary' type='button'>Next</button>";
										echo "</div>";
										$i = 0;
										$j++;           
									} elseif ( $k == $rowcount ) { 
										echo " <button id='".$j."' class='previous btn btn-primary' type='button'>Previous</button>
													<button id='".$j."' class='next btn btn-primary' type='submit'>Final Submit</button>";
										echo "</div>";
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
<script src="../bootstrap/js/bootstrap.min.js"></script>
</html>












