<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$id=$_POST['uid'];
		$essay_id = $_POST['essay_id'];
		$essay_desc = $_POST['essay_desc'];
		
		try{
			
				$stmt = $db_con->prepare("INSERT INTO tbl_useressays(uid,essay_id,essay_desc) VALUES(:eid, :esid, :esdesc)");
				$stmt->bindParam(":eid", $id);
				$stmt->bindParam(":esid", $essay_id);
				$stmt->bindParam(":esdesc", $essay_desc);
							
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