
<h3>You are under Essay Section!!</h3>

<?php

$upOne = basename(__DIR__ );
echo "Department Name: ".$_SESSION['DeptName'];
$deptName=$_SESSION['DeptName'];
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Form using jQuery Ajax and PHP MySQL</title>
<!--<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> -->
<script type="text/javascript" src="../../jquery-1.11.3-jquery.min.js"></script>
<!--<link href="style.css" rel="stylesheet" media="screen">-->
<link href="../../StyleSheet/GenericStyleSheet.css" rel="stylesheet" type="text/css">
<link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<script type="text/javascript">
$(document).ready(function () {
	
	var path = document.location.pathname;
	var dir = path.substring(path.indexOf('/', 1)+1, path.lastIndexOf('/'));
	alert("Current Directory: "+dir);
	
    $('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });
   
    //Disable mouse right click
    $("body").on("contextmenu",function(e){
        return false;
    });
	
	$("#Save").click(function(){

$.post(dir+"TempSave.php", $("#myFrm").serialize(),function(response,status){ // Required Callback Function
//alert("*----Received Data----*\n\nResponse : " + response+"\n\nStatus : " + status);//"response" receives - whatever written in echo of above PHP script.
alert("Your answers has been saved successfully!!");
//$("#form")[0].reset();
//return false;
});

});
	
});

</script>

<style>
#maxQuest {
	font-family:  Verdana,sans-serif;
	font-size:16px;
	position:fixed;
	top:2%;
	left:75%;
}
.questions{
	 font-family:  Verdana,sans-serif;
	font-size:18px;
}
.essays
{
	font-family: Verdana,sans-serif;
	font-size:16px;
	font-family:bold;
	
}
</style>
</head>

<body style="font-family:none;">

<form name="home" action="<?php echo $upOne; ?>Submit.php" id="myFrm" method="POST">


<div class="container">





<?php

$i = 0;
$j = 1; $k = 1;	

require_once 'dbconfig.php';
        
 $stmt = $db_con->prepare("SELECT * FROM tbl_$deptName_$upOne ORDER BY RAND() ");
 $stmt->execute();
 $count = $stmt->rowCount();
 echo "<span id='maxQuest'><b>No of Questions:: ".$count ."</b></span>";
 $number_question =  $stmt->rowCount();
 $rowcount = $stmt->rowCount();
 $remainder = ($rowcount)/($number_question);
//echo "You are in Essay Section<br/><br/>";	
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					    {		
							if ( $i == 0) echo "<div class='cont' id='question_splitter_$j'>"; ?>
							<div class="columns" id='<?php echo $upOne.$k;?>' >
									
							<?php  
								echo "<br/><span class='questions'>".$k." ".$row[$upOne.'_desc']."</span><br/>"; ?>
								<textarea autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' rows='15' cols='100' id='<?php echo $upOne.$row[$upOne.'_id'];?>' name='<?php echo $upOne.$row[$upOne.'_id'];?>' class="<?php echo $upOne;?>" style='resize: none;'></textarea>
								<br/><br/>							
								</div> 
						<?php 
								  $i++; 
								 if ( ( $remainder < 1 ) || ( $i == $number_question && $remainder == 1 ) ) {
									echo "<button id='Save' class='save' type='button' style=position:fixed;left:93%;>Save <i class='fa fa-floppy-o' aria-hidden='true'></i></button>";
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
										echo "</div>";*/
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
<script src="../../bootstrap/js/bootstrap.min.js"></script>
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