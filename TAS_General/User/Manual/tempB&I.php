<?php

require_once 'dbconfig.php';
        
 $stmt = $db_con->prepare("SELECT * FROM tbl_browser_and_internet");
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

if(isset($_POST['browsint'.$i]))
{
	//echo "program session set!!";
	  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	  {
		 // echo "Entered into while...";
		  //$row= mysql_fetch_row($rs);
			$selected=$_POST['browsint'.$i];
			//echo($i.". Selected value is: ".$selected."<br/>");
			//echo "Text is: ".$selected."<br/>";
		
			$pid=$row["browser_internet_id"];
			//echo $pid;
			$query="Select * from tbl_user_BrowserInternet where uid=$id and browser_internet_id=$pid";
			$stmt2 = $db_con->prepare($query);
			$stmt2->execute();
			$count2 = $stmt2->rowCount();
			
			
						
			
				 if($count2 >0)
				{
					//echo "Updating...";
					$query3="UPDATE tbl_user_BrowserInternet SET uid='$id',browser_internet_id=$pid,browser_internet_desc='$selected'  WHERE browser_internet_id=$pid and uid='$id'";
					$stmt3=$db_con->prepare($query3);
					$stmt3->execute();
					
					//mysql_query("UPDATE tbl_userprogram SET uid='$id', program_id=$pid, prog_desc='$selected'  WHERE program_id=$pid and uid='$id'");
					//echo "Updated";
				}
			
				else
				{
					//echo "Inserting...";
					$query3="insert into tbl_user_BrowserInternet(uid,browser_internet_id,browser_internet_desc) values ('$id',$pid,'$selected')";
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