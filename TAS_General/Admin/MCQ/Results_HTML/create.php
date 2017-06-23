<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$id=$_POST['uid'];
		$html_id = $_POST['html_id'];
		$html_desc = $_POST['html_desc'];
		
		try{
			
				$stmt = $db_con->prepare("INSERT INTO tbl_userhtml(uid,html_id,html_desc) VALUES(:eid, :hid, :hdesc)");
				$stmt->bindParam(":eid", $id);
				$stmt->bindParam(":hid", $html_id);
				$stmt->bindParam(":hdesc", $html_desc);
							
				if($stmt->execute())
				{
					echo "Successfully Added";
				}
				else{
					echo "Query Problem";
				}	
				
			}
		
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>