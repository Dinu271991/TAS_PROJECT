<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$program_id = $_POST['gc_id'];
		$prog_desc = $_POST['gc_desc'];
		$prgm_score=$_POST['gc_score'];
		
		
		
		$stmt = $db_con->prepare("UPDATE tbl_user_gc SET gc_score=:pscore WHERE uid=:id and gc_id=:pid");
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
					$stmt1=$db_con->prepare("INSERT into tbl_manual_finalgcscore (uid,finalgcscore) SELECT uid,SUM(gc_score) FROM tbl_user_gc where uid=:id");
					$stmt1->bindParam(":id", $id);
					$stmt1->execute();
					
				}
		
				catch(Exception $e)
				{
					echo "Update";
					$stmt1=$db_con->prepare("UPDATE tbl_manual_finalgcscore tf INNER JOIN ( SELECT uid u,SUM(gc_score) gcscore FROM tbl_user_gc GROUP BY uid )th On tf.uid=th.u SET tf.finalgcscore= th.gcscore;");
					$stmt1->bindParam(":id", $id);
					$stmt1->execute();
				}
	}

?>