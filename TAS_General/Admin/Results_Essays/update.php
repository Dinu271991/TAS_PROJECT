<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$essay_id = $_POST['essay_id'];
		$essay_desc = $_POST['essay_desc'];
		$essay_score=$_POST['essay_score'];
		
		$stmt = $db_con->prepare("UPDATE tbl_useressays SET essay_score=:escore WHERE uid=:id and essay_id=:esid");
		$stmt->bindParam(":esid", $essay_id);
		$stmt->bindParam(":escore", $essay_score);
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
			$stmt1=$db_con->prepare("INSERT into tbl_finalessayscore (uid,final_essay_score) SELECT uid,SUM(essay_score) FROM tbl_useressays where uid=:id");
			$stmt1->bindParam(":id", $id);
			$stmt1->execute();
			
		}

		catch(Exception $e)
		{
			echo "Update";
			$stmt1=$db_con->prepare("UPDATE tbl_finalessayscore tf INNER JOIN ( SELECT uid u,SUM(essay_score) essayscore FROM tbl_useressays GROUP BY uid )th On tf.uid=th.u SET tf.final_essay_score = th.essayscore;");
			$stmt1->bindParam(":id", $id);
			$stmt1->execute();
		}
	}

?>