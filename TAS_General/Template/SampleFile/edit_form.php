<?php 
$upOne = basename(__DIR__ ); 
$dept="Automation";
?>


<?php
include_once '../RequiredFiles/dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM tbl_".$dept."_".$upOne." WHERE ".$upOne."_id=:id");
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
            <td><?php echo $upOne;?> Id</td>
            <td><input type='text' name='id' class='form-control' value='<?php echo $row[$upOne.'_id']; ?>' required readonly></td>
        </tr>
		
        <tr>
            <td><?php echo $upOne;?> Description</td>
            <td><input type='text' name='<?php echo $upOne;?>_desc' class='form-control' value='<?php echo $row[$upOne.'_desc']; ?>' required></td>
        </tr>
 
       
      
 
    </table>
</form>
     
