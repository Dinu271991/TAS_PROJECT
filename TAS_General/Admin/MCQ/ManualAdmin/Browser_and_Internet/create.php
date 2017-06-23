<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		$id=$_POST['browser_internet_id'];
		$prog_desc = $_POST['browser_internet_desc'];
				
		try{
						
				$stmt = $db_con->prepare("INSERT INTO tbl_browser_and_internet(browser_internet_id,browser_internet_desc) VALUES(:pid, :pdesc)");
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