<?php
include_once 'dbconfig.php';

if($_GET['edit_id'] && $_GET['prog_id'])
{
	$id = $_GET['edit_id'];	
	$hid=$_GET['prog_id'];	
	$stmt=$db_con->prepare("SELECT * FROM tbl_userhtml WHERE uid=:id and html_id=:hid");
	$stmt->execute(array(':id'=>$id,':hid'=>$hid));	
	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
}


/*if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM tbl_userhtml WHERE uid=:id");
	$stmt->execute(array(':id'=>$id));	
	
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
}*/

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
            <td>HTML Id</td>
            <td><input type='text' name='html_id' class='form-control' value='<?php echo $row['html_id']; ?>' required readonly></td>
        </tr>
 
        <tr>
            <td>HTML Description</td>
			<td><textarea autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' rows='10' cols='50' name='html_desc' required readonly><?php echo $row['html_desc']; ?></textarea></td>
        </tr>
		
		<tr>
            <td>HTML Score</td>
            <td><input type='text' name='html_score' class='form-control' value='<?php echo $row['html_score']; ?>' required></td>
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
     
