
<style type="text/css">
#dis{
	display:none;
}
</style>


	
    
    <div id="dis">
    <!-- here message will be displayed -->
	</div>
        
 	
	 <form method='post' id='emp-SaveForm' action="#">
 
    <table class='table table-bordered'>
	
	    <tr>
            <td>Employee Id</td>
            <td><input type='text' name='emp_id' class='form-control' placeholder='EX : 2219' required /></td>
        </tr>
 
        <tr>
            <td>Employee Name</td>
            <td><input type='text' name='emp_name' class='form-control' placeholder='EX : john doe' required /></td>
        </tr>
 
       <!-- <tr>
            <td>Employee Department</td>
            <td><input type='text' name='emp_dept' class='form-control' placeholder='EX : Web Design, App Design' required></td>
        </tr> -->
		
			<tr>
            <td>Employee Department</td>
			<td><select name='emp_dept' class='form-control'>
			<option value=""> </option>
			           
			<?php 
			
				include_once 'dbconfig.php';
				$stmt = $db_con->prepare("SELECT * FROM department");
				$stmt->execute();
				$count=$stmt->rowCount();
				
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
					echo "<option value=$row[DeptName]>$row[DeptName]</option>";
					
				}
				echo "</select></td>";
			?>
        </tr>
 
       		
		  <tr>
            <td>Employee Email</td>
            <td><input type='text' name='emp_email' class='form-control' placeholder='EX : 180000' required></td>
        </tr>
		
		  <tr>
            <td>Employee Password</td>
            <td><input type='text' name='emp_pwd' class='form-control' placeholder='EX : 180000' required></td>
        </tr>
		
		  <tr>
            <td>Employee Confirm Password</td>
            <td><input type='text' name='emp_confpwd' class='form-control' placeholder='EX : 180000' required></td>
        </tr>
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Save this Record
			</button>  
            </td>
        </tr>
 
    </table>
</form>
     
