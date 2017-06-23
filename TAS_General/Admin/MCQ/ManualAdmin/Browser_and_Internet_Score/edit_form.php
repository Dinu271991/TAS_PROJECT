<?php
include_once '../dbconfig.php';

if($_GET['edit_id'] && $_GET['prog_id'])
{
	$id = $_GET['edit_id'];	
	$browser_and_internet_id=$_GET['prog_id'];	
	$stmt=$db_con->prepare("SELECT * FROM tbl_user_browserinternet WHERE uid=:id AND browser_internet_id=:pid");
	$stmt->execute(array(':id'=>$id,':pid'=>$browser_and_internet_id));	
	
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
            <td>Browser and Internet Id</td>
            <td><input type='text' name='browser_internet_id' class='form-control' value='<?php echo $row['browser_internet_id']; ?>' required readonly></td>
        </tr>
 
        <tr>
            <td>Browser and Internet Description</td>
			<td><textarea autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' rows='10' cols='50' name='browser_internet_desc' required readonly><?php echo $row['browser_internet_desc']; ?></textarea></td>
        </tr>
		
		  <tr>
            <td>Browser and Internet Score</td>
            <td><input type='text' name='browser_internet_score' class='form-control' value='<?php echo $row['browser_internet_score']; ?>' required></td>
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
     
