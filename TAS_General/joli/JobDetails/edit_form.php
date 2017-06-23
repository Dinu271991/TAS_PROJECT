<?php
include_once 'dbconfig.php';

if($_GET['edit_id'] && $_GET['job_id'])
{
	$id = $_GET['edit_id'];	
	$job_id=$_GET['job_id'];	
	$stmt=$db_con->prepare("SELECT * FROM tbl_qajobs WHERE Jobs_Id=:id");
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
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update" id="btn-update">
    		<span class="glyphicon glyphicon-plus"></span> Update Job Details
			</button>
            </td>
        </tr>
		
		<tr>
            <td>Job Id</td>
            <td><input type='text' name='id' class='form-control' value='<?php echo $row['Jobs_Id']; ?>' required readonly /></td>
        </tr>
		
        <tr>
            <td>Job Title</td>
            <td><input type='text' name='jobTitle' class='form-control' value='<?php echo $row['Job_Title']; ?>' required /></td>
        </tr>
		
		 <tr>
            <td>Project Name</td>
			<td><select class="form-control select" name="projectName" id="projectName">
				
				<?php
	
					include_once 'dbconfig.php';
					$stmt4 = $db_con->prepare("SELECT Project_Id,Project_Name FROM tbl_qaprojects");
					$stmt4->execute();
					$countUsers=$stmt4->rowCount();
					while($row1=$stmt4->fetch(PDO::FETCH_ASSOC))
					{
						$projId=$row1["Project_Id"];
						$projName=$row1["Project_Name"];
						if($row["Project_Name"]==$projName)
						{
							echo "<option value=$projName selected>$projName</option>";
						}
						else
						{
							echo "<option value=$projName>$projName</option>";
						}
					}
				?>                                                
            </select></td>
			
			
        
        </tr>
		
		 <tr>
            <td>Designation</td>
            <td><input type='text' name='designation' class='form-control' value='<?php echo $row['Designation']; ?>' /></td>
        </tr>
		
		 <tr>
            <td>No of Vacancy</td>
            <td><input type='text' name='noOfVacancy' class='form-control' value='<?php echo $row['No_Of_Vacancy']; ?>' /></td>
        </tr>
		
		<tr>
            <td>Skills</td>
            <td><input type='text' name='skills' class='form-control' value='<?php echo $row['Skills']; ?>' /></td>
        </tr>
		
		
		
		<tr>
            <td>Year of Experience</td>
            <td><input type='text' name='yearOfExp' class='form-control' value='<?php echo $row['Year_Of_Exp']; ?>' /></td>
        </tr>
 
        <tr>
            <td>Job Description</td>
			<td><textarea autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' rows='10' cols='50' name='jobDesc'><?php echo $row['Job_Desc']; ?></textarea></td>
        </tr>
		
		  <tr>
            <td>Job Status</td>
			
			<td><select class="form-control" id="projectStatus" name="projectStatus">
			
			<?php
			
					if($row['Project_Status']==0)
					{
						echo "<option value=Open selected>Open</option>";
						echo "<option value=Close>Close</option>";
					}
					else
					{
						echo "<option value=Close selected>Close</option>";
						echo "<option value=Open>Open</option>";
						
					}
			?>
			</tr>
			
			<tr>
				<td>Opened On</td>
				<td><input type='text' name='postedDate' class='form-control' value='<?php echo $row['Opened_On']; ?>' readonly /></td>
			</tr>
			
			
			<tr>
				<td>Closing On</td>
				<td><input type="text" class="form-control datepicker" value="<?php echo $row['Closing_On']; ?>" name="closingDate" id="closingDate"/></td>
				
			</tr>
			
			<tr>
				<td>Posted By</td>
				<td><input type='text' name='postedBy' class='form-control' value='<?php echo $row['PostedBy']; ?>' readonly /></td>
			</tr>
			
			
        	 
    
 
    </table>
</form>
     
