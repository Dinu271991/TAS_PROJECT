<?php
session_start();

if(!isset($_SESSION['user_session']))
{
	header("Location: index.php");
}

include_once 'dbconfig.php';

$stmt3 = $db_con->prepare("SELECT * FROM tbl_candidates WHERE user_id=:uid");
$stmt3->execute(array(":uid"=>$_SESSION['user_session']));
$row3=$stmt3->fetch(PDO::FETCH_ASSOC);
$id=$row3['user_id'];
        
 $stmt = $db_con->prepare("SELECT * FROM tbl_essays");
 $stmt->execute();
 $count = $stmt->rowCount();


$i=1;

$count=0;
//$row= mysql_fetch_row($rs);
  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	  {
		  $essay_id=$row["essay_id"];
		  
		 	$selected=$_POST['essay'.$i];
			//echo($i.". Selected value is: ".$selected."<br/>");
			//echo "Text is: ".$selected."<br/>";
		
			$query2="Select * from tbl_useressays where uid='$id' and essay_id=$essay_id";
			$stmt2 = $db_con->prepare($query2);
			$stmt2->execute();
			$count = $stmt2->rowCount();
			
			if($count >0)
			{
					//echo "Updating....";
					$query3="UPDATE tbl_useressays SET uid='$id', essay_id=$essay_id, essay_desc='$selected'  WHERE essay_id=$essay_id and uid='$id'";
					$stmt3 = $db_con->prepare($query3);
					$stmt3->execute();
					//mysql_query("UPDATE tbl_useressays SET uid='$id', essay_id=$essay_id, essay_desc='$selected'  WHERE program_id='$row[0]' and uid='$id';");
					//echo "Updated";
			}
			
			else
			{
				//echo "Inserting....";
				$query3="insert into tbl_useressays(uid,essay_id,essay_desc) values ('$id',$essay_id,'$selected')";
				$stmt3 = $db_con->prepare($query3);
				$stmt3->execute();
				//mysql_query("insert into tbl_useressays(uid,essay_id,essay_desc) values ('$id','$row[0]','$selected')") or die(mysql_error());
				//echo "Inserted";
			} 
		
		$i++;
	  }
		$n=1;


?>



</body>


</html>