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

        
 $stmt = $db_con->prepare("SELECT * FROM tbl_programs");
 $stmt->execute();
 $count = $stmt->rowCount();

/*$cn=mysql_connect("localhost","root","")or die("Could not Connect My Sql");
mysql_select_db("login",$cn)or die("Could connect to Database");
$rs =mysql_query("SELECT * FROM tbl_programs");
$num=mysql_num_rows($rs)or die(mysql_error());*/


//echo "count of user program: ".$count;


//echo "user id selected: ".$id;
//$count=0;
//$row= mysql_fetch_row($rs);


$i=1;
	  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	  {
		 // echo "Entered into while...";
		  //$row= mysql_fetch_row($rs);
			$selected=$_POST['prog'.$i];
			//echo($i.". Selected value is: ".$selected."<br/>");
			//echo "Text is: ".$selected."<br/>";
		
			$pid=$row["program_id"];
			//echo $pid;
			$query="Select * from tbl_userprogram where uid=$id and program_id=$pid";
			$stmt2 = $db_con->prepare($query);
			$stmt2->execute();
			$count2 = $stmt2->rowCount();
			
			
						
			
				 if($count2 >0)
				{
					//echo "Updating...";
					$query3="UPDATE tbl_userprogram SET uid='$id', program_id=$pid, prog_desc='$selected'  WHERE program_id=$pid and uid='$id'";
					$stmt3=$db_con->prepare($query3);
					$stmt3->execute();
					
					//mysql_query("UPDATE tbl_userprogram SET uid='$id', program_id=$pid, prog_desc='$selected'  WHERE program_id=$pid and uid='$id'");
					//echo "Updated";
				}
			
				else
				{
					//echo "Inserting...";
					$query3="insert into tbl_userprogram(uid,program_id,prog_desc) values ('$id',$pid,'$selected')";
					//mysql_query("insert into tbl_userprogram(uid,program_id,prog_desc) values ('$id',$pid,'$selected')") or die(mysql_error());
					$stmt3=$db_con->prepare($query3);
					$stmt3->execute();
					//echo "Inserted";
				} 
			
			$i++;
	  }

		
		
echo "Was in temp page";


?>

