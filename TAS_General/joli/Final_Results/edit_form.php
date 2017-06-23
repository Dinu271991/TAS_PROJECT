<?php
include_once 'dbconfig.php';

if($_GET['edit_id'] && $_GET['prog_id'])
{
	$id = $_GET['edit_id'];	
	$esid=$_GET['prog_id'];	
	$stmt=$db_con->prepare("SELECT * FROM tbl_useressays WHERE uid=:id and essay_id=:esid");
	$stmt->execute(array(':id'=>$id,'esid'=>$esid));	
	
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
            <td>User Id</td>
            <td><input type='text' name='id' class='form-control' value='<?php echo $row['uid']; ?>' required readonly></td>
        </tr>
		
        <tr>
            <td>Program Id</td>
            <td><input type='text' name='essay_id' class='form-control' value='<?php echo $row['essay_id']; ?>' required readonly></td>
        </tr>
 
        <tr>
            <td>Program Description</td>
			<td><textarea autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' rows='10' cols='50' name='essay_desc' required readonly><?php echo $row['essay_desc']; ?></textarea></td>
        </tr>
 
        <tr>
            <td>Essay Score</td>
            <td><input type='text' name='essay_score' class='form-control' value='<?php echo $row['essay_score']; ?>' required></td>
        </tr> 
			 
			 
      
 
    </table>
</form>
     
