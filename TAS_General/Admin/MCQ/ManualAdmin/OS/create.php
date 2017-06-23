<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		$id=$_POST['os_id'];
		$prog_desc = $_POST['os_desc'];
				
		try{
						
				$stmt = $db_con->prepare("INSERT INTO tbl_manual_os(os_id,os_desc) VALUES(:pid, :pdesc)");
				$stmt->bindParam(":pid", $id);
				$stmt->bindParam(":pdesc", $prog_desc);
								
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