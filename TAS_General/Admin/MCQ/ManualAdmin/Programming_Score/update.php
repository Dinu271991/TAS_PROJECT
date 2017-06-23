<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$program_id = $_POST['prog_id'];
		$prog_desc = $_POST['prog_desc'];
		$prgm_score=$_POST['prog_score'];
		
		
		
		$stmt = $db_con->prepare("UPDATE tbl_user_manual_program SET prog_score=:pscore WHERE uid=:id and prog_id=:pid");
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
					$stmt1=$db_con->prepare("INSERT into tbl_manual_progfinalscore (uid,final_prog_score) SELECT uid,SUM(prog_score) FROM tbl_user_manual_program where uid=:id");
					$stmt1->bindParam(":id", $id);
					$stmt1->execute();
					
				}
		
				catch(Exception $e)
				{
					echo "Update";
					$stmt1=$db_con->prepare("UPDATE tbl_manual_progfinalscore tf INNER JOIN ( SELECT uid u,SUM(prog_score) progscore FROM tbl_user_manual_program GROUP BY uid )th On tf.uid=th.u SET tf.final_prog_score = th.progscore;");
					$stmt1->bindParam(":id", $id);
					$stmt1->execute();
				}
	}

?>