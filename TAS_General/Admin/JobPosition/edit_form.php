<?php
include_once 'dbconfig.php';

if($_GET['edit_id'] && $_GET['job_id'])
{
	$id = $_GET['edit_id'];	
	$job_id=$_GET['job_id'];	
	$stmt=$db_con->prepare("SELECT * FROM jobrequirement WHERE JobId=:id");
	$stmt->execute(array(':id'=>$id));	
	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
}

?>
<style type="text/css">
#dis{
	display:none;
}
</style>


	
    
    <div id="dis">
    
	</div>
        
 	
	 <form method='post' id='emp-UpdateForm' action='#'>
 
    <table class='table table-bordered'>
 		<!-- <input type='hidden' name='id' value='' /> -->
		<tr>
            <td>Job Id</td>
            <td><input type='text' name='id' class='form-control' value='<?php echo $row['JobId']; ?>' required readonly></td>
        </tr>
		
        <tr>
            <td>Admin Id</td>
            <td><input type='text' name='admin_id' class='form-control' value='<?php echo $row['AdminId']; ?>' required readonly></td>
        </tr>
		
		 <tr>
            <td>Designation</td>
            <td><input type='text' name='postName' class='form-control' value='<?php echo $row['PostName']; ?>'</td>
        </tr>
		
		 <tr>
            <td>Number of Position</td>
            <td><input type='text' name='NoOfPosition' class='form-control' value='<?php echo $row['NoOfPosition']; ?>'</td>
        </tr>
		
		 <tr>
            <td>Year of Experience</td>
            <td><input type='text' name='yearOfExp' class='form-control' value='<?php echo $row['YearOfExp']; ?>'</td>
        </tr>
 
        <tr>
            <td>Job Description</td>
			<td><textarea autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' rows='10' cols='50' name='jobDesc'><?php echo $row['JobDesc']; ?></textarea></td>
        </tr>
		
		  <tr>
            <td>Job Status</td>
			
			<td><select class="form-control" id="status" name="status">
			
			<?php
			
					if($row['JobStatus']=='Open')
					{
						echo "<option value=$row[JobStatus] selected=selected>$row[JobStatus]</option>";
						echo "<option value=Close>Close</option>";
					}
					else
					{
						echo "<option value=$row[JobStatus] selected=selected>$row[JobStatus]</option>";
						echo "<option value=Open>Open</option>";
						
					}
			?>
			</tr>
        	 
      <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update" id="btn-update">
    		<span class="glyphicon glyphicon-plus"></span> Update Job Details
			</button>
            </td>
        </tr>
 
    </table>
</form>
     
