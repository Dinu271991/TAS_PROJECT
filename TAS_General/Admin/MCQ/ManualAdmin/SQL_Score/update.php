<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$program_id = $_POST['sql_id'];
		$prog_desc = $_POST['sql_desc'];
		$prgm_score=$_POST['sql_score'];
		
		
		
		$stmt = $db_con->prepare("UPDATE tbl_user_sql SET sql_score=:pscore WHERE uid=:id and sql_id=:pid");
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
					$stmt1=$db_con->prepare("INSERT into tbl_manual_finalsqlscore (uid,finalsqlscore) SELECT uid,SUM(sql_score) FROM tbl_user_sql where uid=:id");
					$stmt1->bindParam(":id", $id);
					$stmt1->execute();
					
				}
		
				catch(Exception $e)
				{
					echo "Update";
					$stmt1=$db_con->prepare("UPDATE tbl_manual_finalsqlscore tf INNER JOIN ( SELECT uid u,SUM(sql_score) sqlscore FROM tbl_user_sql GROUP BY uid )th On tf.uid=th.u SET tf.finalsqlscore = th.sqlscore;");
					$stmt1->bindParam(":id", $id);
					$stmt1->execute();
				}
	}

?>