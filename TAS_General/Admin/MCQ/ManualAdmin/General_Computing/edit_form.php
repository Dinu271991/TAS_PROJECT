<?php
include_once '../dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM tbl_general_computing WHERE gc_id=:id");
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
            <td>General Computing Id</td>
            <td><input type='text' name='id' class='form-control' value='<?php echo $row['gc_id']; ?>' required></td>
        </tr>
		
        <tr>
            <td>General Computing Description</td>
            <td><input type='text' name='gc_desc' class='form-control' value='<?php echo $row['gc_desc']; ?>' required></td>
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
     
