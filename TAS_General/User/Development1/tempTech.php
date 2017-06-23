<?php

require_once '../dbconfig.php';
        
$stmt = $db_con->prepare("SELECT * FROM tbl_development_technical");
$stmt->execute();

$i=1;
$id=$row['user_id'];
$finalScore=0;
$date = date('Y-m-d H:i:s');


while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
	
	$mcqQid=$row["qid"];
	$mcqAnswer=$row["answer"];
	
	
	
	if(isset($_POST['ans'.$i]))
	{
	  
	  //echo "Answer is set";
		$selected=$_POST['ans'.$i];
	
		
		if($mcqAnswer==$selected)
		{
				$finalScore=$finalScore+1;
				//echo "Selected Answer: ".$selected;
				//echo "Correct Answer: ".$mcqAnswer;
		}	

		$stmt3 = $db_con->prepare("SELECT * FROM tbl_user_technical_answer where uid=$id and qid=$mcqQid");
		$stmt3->execute();
		$count3=$stmt3->rowCount();
		
		//echo "Count of tbl_useranswers: ".$count3;
		
		if($count3==0)
		{		
			//echo "Inserting selected options..";
			$stmt2 = $db_con->prepare("insert into tbl_user_technical_answer(uid,qid,yourans) values($id,$mcqQid,$selected)");
			$stmt2->execute();
			//echo "Inserted";
		}
		else
		{
			//echo "Updating selected options..";
			$query2="UPDATE tbl_user_technical_answer SET yourans='$selected'  WHERE uid='$id' and qid=$mcqQid";
			$stmt2 = $db_con->prepare($query2);
			$stmt2->execute();
			//echo "Updated";
			
		}

	
	}
	else
	{
		//echo "Answer not Set!!";
		
		$stmt3 = $db_con->prepare("SELECT * FROM tbl_user_technical_answer where uid=$id and qid=$mcqQid");
		$stmt3->execute();
		$count3=$stmt3->rowCount();
		
		if($count3==0)
		{
			//echo "Inserting Empty values..";
			$stmt2 = $db_con->prepare("insert into tbl_user_technical_answer(uid,qid,yourans) values($id,$mcqQid,0)");
			$stmt2->execute();
			//echo "Inserted";
		}
		else
		{
			//echo "Updating selected options..";
			$query2="UPDATE tbl_user_technical_answer SET yourans=0  WHERE uid='$id' and qid=$mcqQid";
			$stmt2 = $db_con->prepare($query2);
			$stmt2->execute();
			//echo "Updated";
			
		}
		
	}
	$i=$i+1;
	
	
}
echo "Final Score: ".$finalScore;
$stmt = $db_con->prepare("SELECT * FROM tbl_technical_result where user_id=$id");
$stmt->execute();
$count=$stmt->rowCount();

if($count==0)
{
		//echo "Inserting Final Score..";
		$stmt2 = $db_con->prepare("insert into tbl_technical_result(user_id,test_date,score) values('$id','$date','$finalScore')");
		$stmt2->execute();
		//echo "Inserted";
		
		/*$query5="UPDATE finalscores SET score=$finalScore WHERE user_id=$id";
		$stmt5 = $db_con->prepare($query5);
		$stmt5->execute(); */
	
}
else
{
		//echo "Updating Final Score..";
		$query2="UPDATE tbl_technical_result SET  test_date='$date', score=$finalScore WHERE user_id='$id'";
		$stmt2 = $db_con->prepare($query2);
		$stmt2->execute();
		//echo "Updated";
		
		/*$query5="UPDATE finalscores SET score=$finalScore WHERE user_id=$id";
		$stmt5 = $db_con->prepare($query5);
		$stmt5->execute();*/
}



?>