<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$program_id = $_POST['program_id'];
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
					
				}
		
				catch(Exception $e)
				{
					echo "Update";
					$stmt1=$db_con->prepare("UPDATE tbl_finalprogscore tf INNER JOIN ( SELECT uid u,SUM(prgm_score) prgmscore FROM tbl_userprogram GROUP BY uid )th On tf.uid=th.u SET tf.final_prog_score = th.prgmscore;");
					$stmt1->bindParam(":id", $id);
					$stmt1->execute();
				}
	}

?>