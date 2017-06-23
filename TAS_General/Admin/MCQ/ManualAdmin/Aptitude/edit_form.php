<?php
include_once '../dbconfig.php';

if($_GET['edit_id'])
{
	$id = $_GET['edit_id'];	
	$stmt=$db_con->prepare("SELECT * FROM tbl_manual_aptitude WHERE qid=:id");
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
            <td>Question Id</td>
            <td><input type='text' name='id' class='form-control' value='<?php echo $row['qid']; ?>' required></td>
        </tr>
		
        <tr>
            <td>Question Description</td>
            <td><input type='text' name='qdesc' class='form-control' value='<?php echo $row['qdesc']; ?>' required></td>
        </tr>
 
        <tr>
            <td>Option 1</td>
            <td><input type='text' name='option1' class='form-control' value='<?php echo $row['option1']; ?>' required></td>
        </tr>
 
        		
		<tr>
            <td>Option 2</td>
            <td><input type='text' name='option2' class='form-control' value='<?php echo $row['option2']; ?>' required></td>
        </tr>
		
		<tr>
            <td>Option 3</td>
            <td><input type='text' name='option3' class='form-control' value='<?php echo $row['option3']; ?>' required></td>
        </tr>
		
		<tr>
            <td>Option 4</td>
            <td><input type='text' name='option4' class='form-control' value='<?php echo $row['option4']; ?>' required></td>
        </tr>
		
		<tr>
            <td>Answer</td>
            <td><input type='text' name='answer' class='form-control' value='<?php echo $row['answer']; ?>' required></td>
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
     
