<?php
session_start();
$_SESSION["Aptitude"]=1;
/*if(!isset($_SESSION['user_session']))
{
	header("Location: index.php");
} */

include_once '../../dbconfig.php';

$stmt = $db_con->prepare("SELECT * FROM tbl_candidates WHERE user_id=2");
$stmt->execute();
$row=$stmt->fetch(PDO::FETCH_ASSOC);
$upOne = basename(__DIR__ );
$deptName=$_POST['deptName'];
?>

<html>
<head>

<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<link href="../../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<script type="text/javascript" src="../../jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="../../script2.js"></script>
<link href="../../style.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="../../script2.js"></script>
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



<?php

require_once '../../dbconfig.php';
        
$stmt = $db_con->prepare("SELECT * FROM tbl_".$deptName."_".$upOne);
$stmt->execute();

$i=1;
$id=2;
$finalScore=0;
$date = date('Y-m-d H:i:s');
$upOne = basename(__DIR__ );

$deptName=$_POST['deptName'];
 

while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
	
	$mcqQid=$row[$upOne."_id"];
	$mcqAnswer=$row["answer"];
	
	$selected=$_POST['ans'.$i];

	
	
	
	if(isset($_POST['ans'.$i]))
	{
	  
	  //echo "Answer is set";
		$selected=$_POST['ans'.$i];
	
		
		if($mcqAnswer==$selected)
		{
				$finalScore=$finalScore+1;
				echo "Selected Answer: ".$selected;
				echo "Correct Answer: ".$mcqAnswer;
		}	

		$stmt3 = $db_con->prepare("SELECT * FROM tbl_user_".$deptName."_".$upOne." where uid=$id and ".$upOne."_id=$mcqQid");
		$stmt3->execute();
		$count3=$stmt3->rowCount();
		
		//echo "Count of tbl_useranswers: ".$count3;
		
		if($count3==0)
		{		
			//echo "Inserting selected options..";
			$stmt2 = $db_con->prepare("insert into tbl_user_".$deptName."_".$upOne."(uid,".$upOne."_id,candidateAnswer) values($id,$mcqQid,$selected)");
			$stmt2->execute();
			//echo "Inserted";
		}
		else
		{
			//echo "Updating selected options..";
			$query2="UPDATE tbl_user_".$deptName."_".$upOne." SET candidateAnswer='$selected'  WHERE uid='$id' and ".$upOne."_id=$mcqQid";
			$stmt2 = $db_con->prepare($query2);
			$stmt2->execute();
			//echo "Updated";
			
		}

	
	}
	else
	{
		
		
		$stmt3 = $db_con->prepare("SELECT * FROM tbl_user_".$deptName."_".$upOne." where uid=$id and ".$upOne."_id=$mcqQid");
		$stmt3->execute();
		$count3=$stmt3->rowCount();
		
		if($count3==0)
		{
			//echo "Inserting Empty values..";
			$stmt2 = $db_con->prepare("insert into tbl_user_".$deptName."_".$upOne."(uid,".$upOne."_id,candidateAnswer) values($id,$mcqQid,0)");
			$stmt2->execute();
			//echo "Inserted";
		}
		else
		{
			//echo "Updating selected options..";
			$query2="UPDATE tbl_user_".$deptName."_".$upOne." SET candidateAnswer=0  WHERE uid='$id' and ".$upOne."_id=$mcqQid";
			$stmt2 = $db_con->prepare($query2);
			$stmt2->execute();
			//echo "Updated";
			
		}
		
	}
	$i=$i+1;
	
	
}
//echo "Final Score: ".$finalScore;
$stmt = $db_con->prepare("SELECT * FROM tbl_user_".$deptName."_".$upOne."_result where uid=$id");
$stmt->execute();
$count=$stmt->rowCount();

if($count==0)
{
		//echo "Inserting Final Score..";
		$stmt2 = $db_con->prepare("insert into tbl_user_".$deptName."_".$upOne."_result(uid,score) values('$id','$finalScore')");
		$stmt2->execute();
		//echo "Inserted";
		
		/*$query5="UPDATE tbl_".$deptName."_".$upOne."_finalscores SET score=$finalScore WHERE user_id=$id";
		$stmt5 = $db_con->prepare($query5);
		$stmt5->execute(); */
	
}
else
{
		//echo "Updating Final Score..";
		$query2="UPDATE tbl_user_".$deptName."_".$upOne."_result SET score=$finalScore WHERE uid='$id'";
		$stmt2 = $db_con->prepare($query2);
		$stmt2->execute();
		//echo "Updated";
		
		
		/*
		$query5="UPDATE tbl_".$deptName."_".$upOne."_finalscores SET score=$finalScore WHERE user_id=$id";
		$stmt5 = $db_con->prepare($query5);
		$stmt5->execute(); */
}



?>

<div class="container">
  <span style='font-family:arial;color:green;font-size:25px;'>Your answers for Aptitude Section has been submitted Successfully.</span>
</div>



</body>


</html>