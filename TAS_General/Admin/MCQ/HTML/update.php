<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$html_desc = $_POST['html_desc'];
				
		$stmt = $db_con->prepare("UPDATE tbl_html SET html_id=:id,html_desc=:pd WHERE html_id=:id");
		$stmt->bindParam(":pd", $html_desc);
		$stmt->bindParam(":id", $id);
		
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
		}
	}

?>