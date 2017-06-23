<?php
include_once 'dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM tbl_employees WHERE emp_id=:id");
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
            <td>Employee Id</td>
            <td><input type='text' name='id' class='form-control' value='<?php echo $row['emp_id']; ?>' required></td>
        </tr>
		
        <tr>
            <td>Employee Name</td>
            <td><input type='text' name='emp_name' class='form-control' value='<?php echo $row['emp_name']; ?>' required></td>
        </tr>
 
        <!--<tr>
            <td>Employee Department</td>
            <td><input type='text' name='emp_dept' class='form-control' value='<?php echo $row['emp_dept']; ?>' required></td>
        </tr> -->
 
        		
		<tr>
            <td>Employee Email</td>
            <td><input type='text' name='emp_email' class='form-control' value='<?php echo $row['emp_email']; ?>' required></td>
        </tr>
		
		<tr>
            <td>Employee Password</td>
            <td><input type='text' name='emp_pwd' class='form-control' value='<?php echo $row['emp_pwd']; ?>' required></td>
        </tr>
		
			<tr>
            <td>Employee Department</td>
			
			<?php 
			
				echo "<td><select name='emp_dept' class='form-control'>";
				echo "<option value=''> </option>";
			
			    //include_once 'dbconfig2.php';
				$stmt2= $db_con->prepare("SELECT * FROM department");
				$stmt2->execute();
				$count=$stmt2->rowCount();
				
				$dept=$row['emp_dept'];
				
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
     
