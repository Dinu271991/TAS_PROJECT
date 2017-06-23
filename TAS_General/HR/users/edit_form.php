<?php
include_once 'dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM tbl_candidates WHERE user_id=:id");
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
            <td>User Id</td>
            <td><input type='text' name='id' class='form-control' value='<?php echo $row['user_id']; ?>' required></td>
        </tr>
		
        <tr>
            <td>User Name</td>
            <td><input type='text' name='user_name' class='form-control' value='<?php echo $row['user_name']; ?>' required></td>
        </tr>
 
       <!-- <tr>
            <td>Department</td>
            <td><input type='text' name='department' class='form-control' value='<?php echo $row['department']; ?>' required></td>
        </tr> -->
		
					
        		
		<tr>
		            <td>Password</td>
            <td><input type='text' name='user_password' class='form-control' value='<?php echo $row['user_password']; ?>' required></td>
        </tr>
		
		<tr>
            <td>City</td>
            <td><input type='text' name='city' class='form-control' value='<?php echo $row['city']; ?>' required></td>
        </tr>
		
		<tr>
            <td>Email</td>
            <td><input type='text' name='user_email' class='form-control' value='<?php echo $row['user_email']; ?>' required></td>
        </tr>
		
		<tr>
            <td>Phone</td>
            <td><input type='text' name='phone' class='form-control' value='<?php echo $row['phone']; ?>' required></td>
        </tr>
		
		<tr>
            <td>Department</td>
			
			<?php 
			
				echo "<td><select name='department' class='form-control'>";
				echo "<option value=''> </option>";
			
			    //include_once 'dbconfig2.php';
				$stmt2= $db_con->prepare("SELECT * FROM department");
				$stmt2->execute();
				$count=$stmt2->rowCount();
				
				$dept=$row['department'];
				
				while($row=$stmt2->fetch(PDO::FETCH_ASSOC))
				{
								
					if($row['DeptName']==$dept)
					{
						echo "<option value=$row[DeptName] selected=selected>$row[DeptName]</option>";
					}
					else
					{
						echo "<option value=$row[DeptName]>$row[DeptName]</option>";
					}
					
				} 
				echo "</select></td>"; 
				
			?>
        </tr> 
		
		
		
		
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update" id="btn-update">
    		<span class="glyphicon glyphicon-plus"></span> Save Updates
			</button>
            </td>
        </tr>
		
		
 
    </table>
</form>
     
