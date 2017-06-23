<?php
require_once '../RequiredFiles/dbconfig.php';
$upOne = basename(__DIR__ ); 
$dept="Automation";

	
	if($_POST)
	{
		$id=$_POST[$upOne.'_id'];
		$prog_desc = $_POST[$upOne.'_desc'];
				
		try{
			
			
						
				$stmt = $db_con->prepare("INSERT INTO tbl_".$dept."_".$upOne."(".$upOne."_id,".$upOne."_desc) VALUES(:pid, :pdesc)");
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