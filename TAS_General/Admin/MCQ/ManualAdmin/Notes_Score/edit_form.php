<?php
include_once '../dbconfig.php';

if($_GET['edit_id'] && $_GET['prog_id'])
{
	$id = $_GET['edit_id'];	
	$notes_id=$_GET['prog_id'];	
	$stmt=$db_con->prepare("SELECT * FROM tbl_user_notes WHERE uid=:id AND notes_id=:pid");
	$stmt->execute(array(':id'=>$id,':pid'=>$notes_id));	
	
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
            <td>Notes Id</td>
            <td><input type='text' name='notes_id' class='form-control' value='<?php echo $row['notes_id']; ?>' required readonly></td>
        </tr>
 
        <tr>
            <td>Notes Description</td>
			<td><textarea autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' rows='10' cols='50' name='notes_desc' required readonly><?php echo $row['notes_desc']; ?></textarea></td>
        </tr>
		
		  <tr>
            <td>Notes Score</td>
            <td><input type='text' name='notes_score' class='form-control' value='<?php echo $row['notes_score']; ?>' required></td>
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
     
