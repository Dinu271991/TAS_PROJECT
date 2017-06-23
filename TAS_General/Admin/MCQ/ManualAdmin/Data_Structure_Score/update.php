<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$program_id = $_POST['ds_id'];
		$prog_desc = $_POST['ds_desc'];
		$prgm_score=$_POST['ds_score'];
		
		
		
		$stmt = $db_con->prepare("UPDATE tbl_user_ds SET ds_score=:pscore WHERE uid=:id and ds_id=:pid");
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
					$stmt1=$db_con->prepare("INSERT into tbl_manual_finaldsscore (uid,final_ds_score) SELECT uid,SUM(ds_score) FROM tbl_user_ds where uid=:id");
					$stmt1->bindParam(":id", $id);
					$stmt1->execute();
					
				}
		
				catch(Exception $e)
				{
					echo "Update";
					$stmt1=$db_con->prepare("UPDATE tbl_manual_finaldsscore tf INNER JOIN ( SELECT uid u,SUM(ds_score) dsscore FROM tbl_user_ds GROUP BY uid )th On tf.uid=th.u SET tf.final_ds_score = th.dsscore;");
					$stmt1->bindParam(":id", $id);
					$stmt1->execute();
				}
	}

?>