<?php $upOne = basename(__DIR__ );
$dept="Automation";
 ?>
<style type="text/css">
#dis{
	display:none;
}
</style>

<?php
require_once '../RequiredFiles/dbconfig.php';
$stmt5 = $db_con->prepare("SELECT max(".$upOne."_id) FROM tbl_".$dept."_".$upOne);
$stmt5->execute();
$row=$stmt5->fetch(PDO::FETCH_ASSOC);
$autoCount=$row['max('.$upOne.'_id)']+1;


?>
	
    
    <div id="dis">
    <!-- here message will be displayed -->
	</div>
        
 	
	 <form method='post' id='emp-SaveForm' action="#">
 
    <table class='table table-bordered'>
	
	 <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Save this Record
			</button>  
            </td>
        </tr>
	
	    <tr>
            <td><?php echo $upOne;?> Id</td>
            <td><input type='text' name='<?php echo $upOne;?>_id' class='form-control' value="<?php echo $autoCount;?>" required readonly /></td>
        </tr>
 
        <tr>
            <td><?php echo $upOne;?> Description</td>
            <td><input type='text' name='<?php echo $upOne;?>_desc' class='form-control' placeholder='EX : WAP to find vowels in a string' required /></td>
        </tr>
 
       
 
    </table>
</form>
     
