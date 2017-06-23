<html>

<head>
<title>Requirement Form</title>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link href="../assets/datatables.min.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="../assets/jquery-1.11.3-jquery.min.js"></script>
</head>
<body>
<h2 align="center">Requirement Form</h2>
<br/><br/><br/>
<form  name="positions" method="post" action="jobDetails.php" align="center" id="jobPost">
<div class="form-group"> <!-- Full Name -->
		<label for="job_id" class="control-label col-sm-2">Job Id</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="jobId" name="jobId" placeholder="102"/>
		</div>  
		<br/><br/><br/>
		<label for="positionName" class="control-label col-sm-2">Job Position</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="positionName" name="positionName" placeholder="Associate Test Engineer">
		</div>  
		<br/><br/><br/>
		<label for="yearOfExp" class="control-label col-sm-2">Year Of Exp</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="yearOfExp" name="yearOfExp" placeholder="1y - 2y">
		</div>  
		<br/><br/><br/>
		
		<label for="positionNo" class="control-label col-sm-2">No of Position</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="positionNo" name="positionNo" placeholder="8">
		</div>  
		<br/><br/><br/>	

		<div class="form-group"> <!-- job Status !-->
		<label class="control-label col-sm-2" for="status">Job Status</label>
		<div class="col-sm-10">
		<select class="form-control" id="status" name="status">
			<option value="Open">Open</option>
				<option value="Close">Close</option>
		</select>
		</div> 
		</div>		
		<br/><br/><br/>
		
		<label for="jobDesc" class="control-label col-sm-2">Job Description</label>
		<div class="col-sm-10">
			<textarea class='form-control' autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' rows='8' cols='8' name='jobDesc' style='resize: none;' required></textarea>
		</div>  
		<br/><br/><br/>
		
		
		
</div>


<br/><br/><br/><br/><br/><br/><br/>
	<div class="form-group"> <!-- Submit button !-->
		<button class="btn btn-primary " name="jobPositionSubmit" type="submit">Submit</button>
	</div>

		
		



</form>

	<script>
  var b;
$(document).ready(function(){
	
	function load_unseen_notification(view = '')
	{
		$.ajax({
			url:"fetch.php",
			method:"POST",
			data:{view:view},
			dataType:"json",
			success:function(data)
			{
				$('#menu1').html(data.notification);
				b=data.unseen_notification;
				
				if(data.unseen_notification > 0)
				{
					$('.count1').html(data.unseen_notification);
					
					
				}
			}
			
		});
	}
	
	
	
	
	load_unseen_notification();
	
	$('#jobPost').on('submit', function(event){
		event.preventDefault();
		if($('#jobId').val() != '' && $('#positionName').val() != '' && $('#positionNo').val() != '')
		{
			var form_data = $(this).serialize();
			$.ajax({
				url:"insert.php",
				method:"POST",
				data:form_data,
				success:function(data)
				{
					$('#jobPost')[0].reset();
					load_unseen_notification();
				}
			});
		}
		else
		{
			alert("Both Fields are Required");
		}
	});
	
	$(document).on('click', '#menu', function(){
		$('.count1').html('');
		load_unseen_notification('yes');
	});
	
	setInterval(function(){ 
		load_unseen_notification();; 
	}, 2000);
	
});
  </script>



</body>
</html>