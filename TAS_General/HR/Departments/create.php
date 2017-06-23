<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$id=$_POST['DeptId'];
		$DeptName = $_POST['DeptName'];
		
		
		try{
			
				$stmt = $db_con->prepare("INSERT INTO department(DeptId,DeptName) VALUES(:did, :dname)");
				$stmt->bindParam(":did", $id);
				$stmt->bindParam(":dname", $DeptName);
								
				if($stmt->execute())
				{
					echo "Successfully Added";
					
					mkdir("../../../UpdatedProject/".$DeptName,0777,true);
					mkdir("../../../UpdatedProject/".$DeptName."/Candidate",0777,true);
					mkdir("../../../UpdatedProject/".$DeptName."/Candidate/MCQ",0777,true);
					mkdir("../../../UpdatedProject/".$DeptName."/Candidate/Descriptive",0777,true);
					
					mkdir("../../../UpdatedProject/".$DeptName."/Admin",0777,true);
					mkdir("../../../UpdatedProject/".$DeptName."/Admin/MCQ",0777,true);
					mkdir("../../../UpdatedProject/".$DeptName."/Admin/Descriptive",0777,true);
					
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