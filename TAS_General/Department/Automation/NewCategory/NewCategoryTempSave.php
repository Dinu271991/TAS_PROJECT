<?php
session_start();
/*
if(!isset($_SESSION['user_session']))
{
	header("Location: index.php");
} */
$upOne = basename(__DIR__ );
//$deptName='Automation';
$deptName=$_POST['deptName'];

include_once '../../dbconfig.php';
$id=2;
try
{

$stmt3 = $db_con->prepare("SELECT * FROM tbl_candidates WHERE user_id=$id");
$stmt3->execute();
$row3=$stmt3->fetch(PDO::FETCH_ASSOC);

        
 $stmt = $db_con->prepare("SELECT * FROM tbl_".$deptName."_".$upOne);
 $stmt->execute();
 $count = $stmt->rowCount();
}
catch(Exception $e)
{
	echo "Failed to retrieve Descriptive section Questions";
}


$i=1;

$count=0;
//$row= mysql_fetch_row($rs);
try
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
	  echo "Success";
	  }
	  	catch(Exception $e)
		{
			echo "Failed to update answers!!";
		}
		$n=1;


?>
