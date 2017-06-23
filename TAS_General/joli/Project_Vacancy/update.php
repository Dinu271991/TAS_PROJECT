<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		
			$postName=$_POST['postName'];
			$yearOfExp=$_POST['yearOfExp'];
			$NoOfPosition=$_POST['NoOfPosition'];
			$jobDesc=$_POST['jobDesc'];
			$status=$_POST['status'];
			$date = date('Y-m-d H:i:s');
			$id = $_POST['id'];
			$stmt = $db_con->prepare("UPDATE jobrequirement SET PostName=:postName,NoOfPosition=:NoOfPosition,YearOfExp=:yearOfExp,JobDesc=:jobDesc,JobStatus=:status,PostedDate=:date1,JobReminder=0 WHERE JobId=:id");
				$stmt->bindParam(":postName", $postName);	
				$stmt->bindParam(":yearOfExp", $yearOfExp);
				$stmt->bindParam(":NoOfPosition", $NoOfPosition);
				$stmt->bindParam(":jobDesc", $jobDesc);
				$stmt->bindParam(":status", $status);
				$stmt->bindParam(":date1", $date);
				$stmt->bindParam(":id", $id);				
				if($stmt->execute())
				{
					echo "Successfully updated";
				}
				else{
					echo "Query Problem";
				}
			
			
		/*$program_id = $_POST['program_id'];
		$prog_desc = $_POST['prog_desc'];
		$prgm_score=$_POST['prgm_score'];
		
		
		
		$stmt = $db_con->prepare("UPDATE tbl_userprogram SET prgm_score=:pscore WHERE uid=:id and program_id=:pid");
		$stmt->bindParam(":pid", $program_id);
		$stmt->bindParam(":pscore", $prgm_score);
		$stmt->bindParam(":id", $id);
		
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
		}
		
			try
				{
					$stmt1=$db_con->prepare("INSERT into tbl_finalprogscore (uid,final_prog_score) SELECT uid,SUM(prgm_score) FROM tbl_userprogram where uid=:id");
					$stmt1->bindParam(":id", $id);
					$stmt1->execute();
					
					$query5="UPDATE finalscores SET final_prog_score=:pscore WHERE user_id=:id";
					$stmt5 = $db_con->prepare($query5);
					$stmt5->execute();
					
				}
		
				catch(Exception $e)
				{
					echo "Update";
					$stmt1=$db_con->prepare("UPDATE tbl_finalprogscore tf INNER JOIN ( SELECT uid u,SUM(prgm_score) prgmscore FROM tbl_userprogram GROUP BY uid )th On tf.uid=th.u SET tf.final_prog_score = th.prgmscore;");
					$stmt1->bindParam(":id", $id);
					$stmt1->execute();
					
					$query5="UPDATE finalscores SET final_prog_score=10 WHERE user_id=3";
					$stmt5 = $db_con->prepare($query5);
					$stmt5->execute();
				} */
	}

?>





