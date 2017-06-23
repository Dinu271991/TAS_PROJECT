<?php

require_once 'dbconfig.php';
        
 $stmt = $db_con->prepare("SELECT * FROM tbl_general_computing");
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

if(isset($_POST['gc'.$i]))
{
	//echo "program session set!!";
	  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	  {
		 // echo "Entered into while...";
		  //$row= mysql_fetch_row($rs);
			$selected=$_POST['gc'.$i];
			//echo($i.". Selected value is: ".$selected."<br/>");
			//echo "Text is: ".$selected."<br/>";
		
			$pid=$row['gc_id'];
			//echo $pid;
			$query="Select * from tbl_user_gc where uid=$id and gc_id=$pid";
			$stmt2 = $db_con->prepare($query);
			$stmt2->execute();
			$count2 = $stmt2->rowCount();
			
			
						
			
				 if($count2 >0)
				{
					//echo "Updating...";
					$query3="UPDATE tbl_user_gc SET uid='$id',gc_id=$pid,gc_desc='$selected'  WHERE gc_id=$pid and uid='$id'";
					$stmt3=$db_con->prepare($query3);
					$stmt3->execute();
					
					//mysql_query("UPDATE tbl_userprogram SET uid='$id', program_id=$pid, prog_desc='$selected'  WHERE program_id=$pid and uid='$id'");
					//echo "Updated";
				}
			
				else
				{
					//echo "Inserting...";
					$query3="insert into tbl_user_gc(uid,gc_id,gc_desc) values ('$id',$pid,'$selected')";
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