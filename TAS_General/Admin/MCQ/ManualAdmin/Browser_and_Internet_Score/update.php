<?php
require_once '../dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$program_id = $_POST['browser_internet_id'];
		$prog_desc = $_POST['browser_internet_desc'];
		$prgm_score=$_POST['browser_internet_score'];
		
		
		
		$stmt = $db_con->prepare("UPDATE tbl_user_browserinternet SET browser_internet_score=:pscore WHERE uid=:id and browser_internet_id=:pid");
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
					$stmt1=$db_con->prepare("INSERT into tbl_manual_finalBrowsIntScore (uid,finalBrowsIntScore) SELECT uid,SUM(browser_internet_score) FROM tbl_user_browserinternet where uid=:id");
					$stmt1->bindParam(":id", $id);
					$stmt1->execute();
					
				}
		
				catch(Exception $e)
				{
					echo "Update";
					$stmt1=$db_con->prepare("UPDATE tbl_manual_finalBrowsIntScore tf INNER JOIN ( SELECT uid u,SUM(browser_internet_score) browsintscore FROM tbl_user_browserinternet GROUP BY uid )th On tf.uid=th.u SET tf.finalBrowsIntScore = th.browsintscore;");
					$stmt1->bindParam(":id", $id);
					$stmt1->execute();
				}
	}

?>