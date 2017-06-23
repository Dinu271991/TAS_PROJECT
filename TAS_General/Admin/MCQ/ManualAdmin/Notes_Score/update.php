<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$program_id = $_POST['notes_id'];
		$prog_desc = $_POST['notes_desc'];
		$prgm_score=$_POST['notes_score'];
		
		
		
		$stmt = $db_con->prepare("UPDATE tbl_user_notes SET notes_score=:pscore WHERE uid=:id and notes_id=:pid");
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
					$stmt1=$db_con->prepare("INSERT into tbl_manual_finalnotesscore (uid,final_notes_score) SELECT uid,SUM(notes_score) FROM tbl_user_notes where uid=:id");
					$stmt1->bindParam(":id", $id);
					$stmt1->execute();
					
				}
		
				catch(Exception $e)
				{
					echo "Update";
					$stmt1=$db_con->prepare("UPDATE tbl_manual_finalnotesscore tf INNER JOIN ( SELECT uid u,SUM(notes_score) notesscore FROM tbl_user_notes GROUP BY uid )th On tf.uid=th.u SET tf.final_notes_score = th.notesscore;");
					$stmt1->bindParam(":id", $id);
					$stmt1->execute();
				}
	}

?>