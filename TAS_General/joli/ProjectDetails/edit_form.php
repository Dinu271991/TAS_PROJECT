<?php
include_once 'dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM tbl_qaprojects WHERE Project_Id=:id");
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
    		<span class="glyphicon glyphicon-plus"></span> Save Updates
			</button>
            </td>
        </tr>
		<tr>
            <td>Project Id</td>
            <td><input type='text' name='id' class='form-control' value='<?php echo $row['Project_Id']; ?>' required readonly></td>
        </tr>
		
		<tr>
            <td>Project Name</td>
            <td><input type='text' name='projectName' class='form-control' value='<?php echo $row['Project_Name']; ?>' required></td>
        </tr>
		
		<tr>
            <td>Project Description</td>
            <td><input type='text' name='projectDesc' class='form-control' value='<?php echo $row['Project_Desc']; ?>' required></td>
        </tr>
		
        <tr>
            <td>Project Status</td>
			<td><select name="projectStatus" id="projectStatus" class='form-control' >
			<?php
				if($row["Project_Status"]==0)
				{
					echo "<option value='1'>Existing</option>";
					echo "<option value='0' selected>Pipeline</option>";
				}
				else
				{
					echo "<option value='1' selected>Existing</option>";
					echo "<option value='0'>Pipeline</option>";
				}
				
			
			?>
			</select></td>
            
        </tr>
 
       
      
 
    </table>
</form>
     
