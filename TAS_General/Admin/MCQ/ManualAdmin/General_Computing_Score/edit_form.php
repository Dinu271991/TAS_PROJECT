<?php
include_once '../dbconfig.php';

if($_GET['edit_id'] && $_GET['prog_id'])
{
	$id = $_GET['edit_id'];	
	$gc_id=$_GET['prog_id'];	
	$stmt=$db_con->prepare("SELECT * FROM tbl_user_gc WHERE uid=:id AND gc_id=:pid");
	$stmt->execute(array(':id'=>$id,':pid'=>$gc_id));	
	
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
            <td><input type='text' name='id' class='form-control' value='<?php echo $row['uid']; ?>' required readonly></td>
        </tr>
		
        <tr>
            <td>General Computing Id</td>
            <td><input type='text' name='gc_id' class='form-control' value='<?php echo $row['gc_id']; ?>' required readonly></td>
        </tr>
 
        <tr>
            <td>General Computing Description</td>
			<td><textarea autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' rows='10' cols='50' name='gc_desc' required readonly><?php echo $row['gc_desc']; ?></textarea></td>
        </tr>
		
		  <tr>
            <td>General Computing Score</td>
            <td><input type='text' name='gc_score' class='form-control' value='<?php echo $row['gc_score']; ?>' required></td>
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
     
