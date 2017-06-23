<?php
include_once '../dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM tbl_datastructure WHERE ds_id=:id");
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
            <td>DataStructure Id</td>
            <td><input type='text' name='id' class='form-control' value='<?php echo $row['ds_id']; ?>' required></td>
        </tr>
		
        <tr>
            <td>DataStructure Description</td>
            <td><input type='text' name='ds_desc' class='form-control' value='<?php echo $row['ds_desc']; ?>' required></td>
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
     
