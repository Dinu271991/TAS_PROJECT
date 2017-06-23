<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$html_id = $_POST['html_id'];
		$html_desc = $_POST['html_desc'];
		$html_score=$_POST['html_score'];
		
		
		$stmt = $db_con->prepare("UPDATE tbl_userhtml SET html_score=:hscore WHERE uid=:id and html_id=:hid");
		$stmt->bindParam(":hid", $html_id);
		$stmt->bindParam(":hscore", $html_score);
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
					$stmt1=$db_con->prepare("INSERT into tbl_finalhtmlscore (uid,final_html_score) SELECT uid,SUM(html_score) FROM tbl_userhtml where uid=:id");
					$stmt1->bindParam(":id", $id);
					$stmt1->execute();
					
				}
		
				catch(Exception $e)
				{
					echo "Update";
					$stmt1=$db_con->prepare("UPDATE tbl_finalhtmlscore tf INNER JOIN ( SELECT uid u,SUM(html_score) htmscore FROM tbl_userhtml GROUP BY uid )th On tf.uid=th.u SET tf.final_html_score = th.htmscore;");
					$stmt1->bindParam(":id", $id);
					$stmt1->execute();
				}
		
		
		
				/* echo "Insert";
				$stmt1=$db_con->prepare("INSERT into tbl_finaltechscore (uid,tech_score) SELECT uid,SUM(html_score) FROM tbl_userhtml where uid=:id");
				$stmt1->bindParam(":id", $id);
				$stmt1->execute(); */
		
			
		
			
		
		
		/*$stmt1=$db_con->prepare("INSERT into tbl_finaltechscore (uid,tech_score) SELECT uid,SUM(html_score) FROM tbl_userhtml where uid=:id");
		$stmt1->bindParam(":id", $id);
		
		if($stmt1->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
		}*/
		
		
		
	}

?>