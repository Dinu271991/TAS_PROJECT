<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$program_id = $_POST['mc_id'];
		$prog_desc = $_POST['mc_desc'];
		$prgm_score=$_POST['mc_score'];
		
		
		
		$stmt = $db_con->prepare("UPDATE tbl_user_mobile_computing SET mc_score=:pscore WHERE uid=:id and mc_id=:pid");
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
					$stmt1=$db_con->prepare("INSERT into tbl_manual_finalmcscore (uid,final_mc_score) SELECT uid,SUM(mc_score) FROM tbl_user_mobile_computing where uid=:id");
					$stmt1->bindParam(":id", $id);
					$stmt1->execute();
					
				}
		
				catch(Exception $e)
				{
					echo "Update";
					$stmt1=$db_con->prepare("UPDATE tbl_manual_finalmcscore tf INNER JOIN ( SELECT uid u,SUM(mc_score) mcscore FROM tbl_user_mobile_computing GROUP BY uid )th On tf.uid=th.u SET tf.final_mc_score = th.mcscore;");
					$stmt1->bindParam(":id", $id);
					$stmt1->execute();
				}
	}

?>