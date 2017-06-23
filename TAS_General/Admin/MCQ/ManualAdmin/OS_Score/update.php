<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$program_id = $_POST['os_id'];
		$prog_desc = $_POST['os_desc'];
		$prgm_score=$_POST['os_score'];
		
		
		
		$stmt = $db_con->prepare("UPDATE tbl_user_os SET os_score=:pscore WHERE uid=:id and os_id=:pid");
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
					$stmt1=$db_con->prepare("INSERT into tbl_manual_finalosscore (uid,finalosscore) SELECT uid,SUM(os_score) FROM tbl_user_os where uid=:id");
					$stmt1->bindParam(":id", $id);
					$stmt1->execute();
					
				}
		
				catch(Exception $e)
				{
					echo "Update";
					$stmt1=$db_con->prepare("UPDATE tbl_manual_finalosscore tf INNER JOIN ( SELECT uid u,SUM(os_score) osscore FROM tbl_user_os GROUP BY uid )th On tf.uid=th.u SET tf.finalosscore = th.osscore;");
					$stmt1->bindParam(":id", $id);
					$stmt1->execute();
				}
	}

?>