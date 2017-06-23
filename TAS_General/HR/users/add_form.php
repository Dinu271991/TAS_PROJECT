
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
            <td>User Id</td>
            <td><input type='text' name='user_id' class='form-control' placeholder='EX : 2219' required /></td>
        </tr>
 
        <tr>
            <td>User Name</td>
            <td><input type='text' name='user_name' class='form-control' placeholder='EX : john doe' required /></td>
        </tr>
		
		<tr>
            <td>Department</td>
			<td><select name='department' class='form-control'>
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
 
        <!-- <tr>
            <td>Department</td>
            <td><input type='text' name='department' class='form-control' placeholder='EX : Web Design, App Design' required></td>
        </tr> -->
 
       		
		  <tr>
            <td>User Password</td>
            <td><input type='text' name='user_password' class='form-control' placeholder='EX : 1256' required></td>
        </tr>
		
		<tr>
            <td>Confirm Password</td>
            <td><input type='text' name='confPassword' class='form-control' placeholder='EX : 1256' required></td>
        </tr>
		
		  <tr>
            <td>City</td>
            <td><input type='text' name='city' class='form-control' placeholder='EX : Bangalore' required></td>
        </tr>
		
		  <tr>
            <td>Email</td>
            <td><input type='text' name='user_email' class='form-control' placeholder='EX : name@domain.com' required></td>
        </tr>
		
		  <tr>
            <td>Phone</td>
            <td><input type='text' name='phone' class='form-control' placeholder='EX : 7771112221' required></td>
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
     
