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
        
 $stmt = $db_con->prepare("SELECT * FROM tbl_html");
 $stmt->execute();
 $count = $stmt->rowCount();

$i=1;
$count=0;
//$row= mysql_fetch_row($rs);

	  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	  {
		  	$html_id=$row["html_id"];
		  	$selected=$_POST['html'.$i];
			//echo($i.". Selected value is: ".$selected."<br/>");
			//echo "Text is: ".$selected."<br/>";
		
			$query2="Select * from tbl_userhtml where uid='$id' and html_id=$html_id";
			$stmt2 = $db_con->prepare($query2);
			$stmt2->execute();
			$count2 = $stmt2->rowCount();
			
			if($count2 >0)
			{
				//echo "Updating...";
				$query3="UPDATE tbl_userhtml SET uid='$id', html_id=$html_id, html_desc='$selected'  WHERE html_id=$html_id and uid='$id'";
				$stmt3 = $db_con->prepare($query3);
				$stmt3->execute();	
				//echo "Updated";
				//mysql_query("UPDATE tbl_userhtml SET uid='$id', html_id='$row[0]', html_desc='$selected'  WHERE html_id='$row[0]' and uid='$id';");
			}
			
			else
			{
				//echo "Inserting...";
				$query3="insert into tbl_userhtml(uid,html_id,html_desc) values ('$id',$html_id,'$selected')";
				$stmt3 = $db_con->prepare($query3);
				$stmt3->execute();	
				//echo "Inserted";
				//mysql_query("insert into tbl_userhtml(uid,html_id,html_desc) values ('$id',$html_id,'$selected')") or die(mysql_error());
				
			} 
		$i++;
	  }
		$n=1;
		


?>

</body>


</html>