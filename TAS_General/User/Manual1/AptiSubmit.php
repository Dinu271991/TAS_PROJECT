<?php
session_start();

if(!isset($_SESSION['user_session']))
{
	header("Location: ../index.php");
}

include_once '../dbconfig.php';

$stmt = $db_con->prepare("SELECT * FROM tbl_candidates WHERE user_id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);

?>

<html>
<head>

<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<script type="text/javascript" src="../jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="script2.js"></script>
<link href="../assets/datatables.min.css" rel="stylesheet" type="text/css">
<link href="../style.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="../script2.js"></script>
<style>
	table {
			float:left;
			margin-left:150px;
}
.container {
  height: 100%;
  width: 100%;
  display: flex;
  position: fixed;
  align-items: center;
  justify-content: center;
}
</style>
</head>

<body>


<table>

<label><?php //echo $row['user_id']; ?></label>

<?php

require_once '../dbconfig.php';
        
$stmt = $db_con->prepare("SELECT * FROM tbl_manual_aptitude");
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

		$stmt3 = $db_con->prepare("SELECT * FROM tbl_useranswers where uid=$id and qid=$mcqQid");
		$stmt3->execute();
		$count3=$stmt3->rowCount();
		
		//echo "Count of tbl_useranswers: ".$count3;
		
		if($count3==0)
		{		
			//echo "Inserting selected options..";
			$stmt2 = $db_con->prepare("insert into tbl_useranswers(uid,qid,yourans) values($id,$mcqQid,$selected)");
			$stmt2->execute();
			//echo "Inserted";
		}
		else
		{
			//echo "Updating selected options..";
			$query2="UPDATE tbl_useranswers SET yourans='$selected'  WHERE uid='$id' and qid=$mcqQid";
			$stmt2 = $db_con->prepare($query2);
			$stmt2->execute();
			//echo "Updated";
			
		}

	
	}
	else
	{
		//echo "Answer not Set!!";
		
		$stmt3 = $db_con->prepare("SELECT * FROM tbl_useranswers where uid=$id and qid=$mcqQid");
		$stmt3->execute();
		$count3=$stmt3->rowCount();
		
		if($count3==0)
		{
			//echo "Inserting Empty values..";
			$stmt2 = $db_con->prepare("insert into tbl_useranswers(uid,qid,yourans) values($id,$mcqQid,0)");
			$stmt2->execute();
			//echo "Inserted";
		}
		else
		{
			//echo "Updating selected options..";
			$query2="UPDATE tbl_useranswers SET yourans=0  WHERE uid='$id' and qid=$mcqQid";
			$stmt2 = $db_con->prepare($query2);
			$stmt2->execute();
			//echo "Updated";
			
		}
		
	}
	$i=$i+1;
	
	
}
//echo "Final Score: ".$finalScore;
$stmt = $db_con->prepare("SELECT * FROM tbl_result where user_id=$id");
$stmt->execute();
$count=$stmt->rowCount();

if($count==0)
{
		//echo "Inserting Final Score..";
		$stmt2 = $db_con->prepare("insert into tbl_result(user_id,test_date,score) values('$id','$date','$finalScore')");
		$stmt2->execute();
		//echo "Inserted";
		
		$query5="UPDATE finalscores SET score=$finalScore WHERE user_id=$id";
		$stmt5 = $db_con->prepare($query5);
		$stmt5->execute();
	
}
else
{
		//echo "Updating Final Score..";
		$query2="UPDATE tbl_result SET  test_date='$date', score=$finalScore WHERE user_id='$id'";
		$stmt2 = $db_con->prepare($query2);
		$stmt2->execute();
		//echo "Updated";
		
		$query5="UPDATE finalscores SET score=$finalScore WHERE user_id=$id";
		$stmt5 = $db_con->prepare($query5);
		$stmt5->execute();
}



?>


<div class="container">
  <span style='font-family:arial;color:green;font-size:25px;'>Your answers for Aptitude Section has been submitted Successfully.</span>
</div>
</body>


</html>