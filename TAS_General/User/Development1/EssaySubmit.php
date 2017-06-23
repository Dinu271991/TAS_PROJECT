<?php
session_start();

if(!isset($_SESSION['user_session']))
{
	header("Location: index.php");
}

include_once '../dbconfig.php';

$stmt = $db_con->prepare("SELECT * FROM tbl_candidates WHERE user_id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$row1=$stmt->fetch(PDO::FETCH_ASSOC);

?>

<html>
<head>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="script2.js"></script>
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="script2.js"></script>
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

require_once '../dbconfig.php';
        
 $stmt = $db_con->prepare("SELECT * FROM tbl_development_essay");
 $stmt->execute();
 $count = $stmt->rowCount();

/*$cn=mysql_connect("localhost","root","")or die("Could not Connect My Sql");
mysql_select_db("login",$cn)or die("Could connect to Database");
$rs =mysql_query("SELECT * FROM tbl_programs");
$num=mysql_num_rows($rs)or die(mysql_error());*/


//echo "count of user program: ".$count;

$i=1;
$id=$row1['user_id'];
//echo "user id selected: ".$id;
//$count=0;
//$row= mysql_fetch_row($rs);

if(isset($_POST['essay'.$i]))
{
	//echo "program session set!!";
	  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	  {
		 // echo "Entered into while...";
		  //$row= mysql_fetch_row($rs);
			$selected=$_POST['essay'.$i];
			//echo($i.". Selected value is: ".$selected."<br/>");
			echo "Text is: ".$selected."<br/>";
		
			$pid=$row['essay_id'];
			echo $pid;
			$query="Select * from tbl_dev_user_essay where uid=$id and essay_id=$pid";
			$stmt2 = $db_con->prepare($query);
			$stmt2->execute();
			$count2 = $stmt2->rowCount();
			
			
						
			
				 if($count2 >0)
				{
					//echo "Updating...";
					$query3="UPDATE tbl_dev_user_essay SET uid='$id',essay_id=$pid,essay_desc='$selected'  WHERE essay_id=$pid and uid='$id'";
					$stmt3=$db_con->prepare($query3);
					$stmt3->execute();
					
					//mysql_query("UPDATE tbl_userprogram SET uid='$id', program_id=$pid, prog_desc='$selected'  WHERE program_id=$pid and uid='$id'");
					//echo "Updated";
				}
			
				else
				{
					//echo "Inserting...";
					$query3="insert into tbl_dev_user_essay(uid,essay_id,essay_desc) values ('$id',$pid,'$selected')";
					//mysql_query("insert into tbl_userprogram(uid,program_id,prog_desc) values ('$id',$pid,'$selected')") or die(mysql_error());
					$stmt3=$db_con->prepare($query3);
					$stmt3->execute();
					//echo "Inserted";
				} 
			
			$i++;
	  }
		$n=1;
		
}
		


?>

<div class="container">
  <span style='font-family:arial;color:green;font-size:25px;'>Your answers for Essay Section has been submitted Successfully.</span>
</div>


</body>


</html>