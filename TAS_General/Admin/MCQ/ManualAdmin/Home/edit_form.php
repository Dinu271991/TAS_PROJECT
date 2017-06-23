<?php
include_once '../dbconfig.php';

if($_GET['edit_id'] && $_GET['prog_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM tbl_dept_cutoff WHERE DeptId=:id");
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
            <td>Dept Id</td>
            <td><input type='text' name='id' class='form-control' value='<?php echo $row['DeptId']; ?>' required readonly></td>
        </tr>
		
        <tr>
            <td>Dept Name</td>
            <td><input type='text' name='deptName' class='form-control' value='<?php echo $row['DeptName']; ?>' required readonly></td>
        </tr>
 		
		  <tr>
            <td>Cutoff Score</td>
			<?php
				if($row['DeptId']==1)
				{
					echo "<td><input type='text' name='CutOff' class='form-control' value=$row[CutOff] required></td>";
				}
				else
				{
					echo "<td><input type='text' name='CutOff' class='form-control' value=$row[CutOff] required readonly></td>";
				}
			
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
     
