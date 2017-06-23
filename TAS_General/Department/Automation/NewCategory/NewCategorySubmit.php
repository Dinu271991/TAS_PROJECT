<?php
session_start();
$_SESSION['Essay']=1;
if(!isset($_SESSION['user_session']))
{
	header("Location: index.php");
}

include_once '../../dbconfig.php';

$stmt = $db_con->prepare("SELECT * FROM tbl_candidates WHERE user_id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);

?>
<?php

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


<?php

 require_once '../../dbconfig.php';
        
 $stmt = $db_con->prepare("SELECT * FROM tbl_".$deptName."_".$upOne);
 $stmt->execute();
 $count = $stmt->rowCount();


$i=1;
$id=$row['user_id'];
$count=0;
//$row= mysql_fetch_row($rs);

if(isset($_POST[$upOne.$i]))
{
	  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	  {
		  $quest_id=$row[$upOne."_id"];
		  
		 	$selected=$_POST[$upOne.$i];
			//echo($i.". Selected value is: ".$selected."<br/>");
			//echo "Text is: ".$selected."<br/>";
		
			$query2="Select * from tbl_user_".$deptName."_".$upOne." where uid='$id' and $upOne"."_id=$quest_id";
			$stmt2 = $db_con->prepare($query2);
			$stmt2->execute();
			$count = $stmt2->rowCount();
			
			if($count >0)
			{
					//echo "Updating....";
					$query3="UPDATE tbl_user_".$deptName."_".$upOne." SET ".$upOne."_desc='$selected'  WHERE ".$upOne."_id=".$quest_id." and uid='$id'";
					$stmt3 = $db_con->prepare($query3);
					$stmt3->execute();
					//mysql_query("UPDATE tbl_useressays SET uid='$id', essay_id=$essay_id, essay_desc='$selected'  WHERE program_id='$row[0]' and uid='$id';");
					//echo "Updated";
			}
			
			else
			{
				//echo "Inserting....";
				$query3="insert into tbl_user_".$deptName."_".$upOne."(uid,".$upOne."_id,".$upOne."_desc) values ('$id','$quest_id','$selected')";
				$stmt3 = $db_con->prepare($query3);
				$stmt3->execute();
				//mysql_query("insert into tbl_useressays(uid,essay_id,essay_desc) values ('$id','$row[0]','$selected')") or die(mysql_error());
				//echo "Inserted";
			} 
		
		$i++;
	  }
		$n=1;
		
}
		


?>


<!--<center><span style='font-family:arial;color:green;font-size:25px; top: 50%;left: 50%; margin-left: -50px; margin-top: -25px'> Your answers for Essay Section has been submitted Successfully.</span></center>-->
<div class="container">
  <span style='font-family:arial;color:green;font-size:25px;'>Your answers for Essay Section has been submitted Successfully.</span>
</div>

</body>


</html>