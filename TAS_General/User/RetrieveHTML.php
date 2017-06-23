<?php
session_start();

if(!isset($_SESSION['user_session']))
{
	header("Location: index.php");
}

include_once 'dbconfig.php';

$stmt = $db_con->prepare("SELECT * FROM tbl_candidates WHERE user_id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);

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
}</style>
</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <!-- <a class="navbar-brand" href="http://www.codingcage.com">Coding Cage</a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
         <!-- <ul class="nav navbar-nav">
            <li class="active"><a href="http://www.codingcage.com/2015/11/ajax-login-script-with-jquery-php-mysql.html">Back to Article</a></li>
            <li><a href="http://www.codingcage.com/search/label/jQuery">jQuery</a></li>
            <li><a href="http://www.codingcage.com/search/label/jQuery">jQuery</a></li>
            <li><a href="http://www.codingcage.com/search/label/PHP">PHP</a></li>
          </ul> -->
          <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			  <span class="glyphicon glyphicon-user"></span>&nbsp;Hi' <?php echo $row['user_name']; ?>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;View Profile</a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    
<div class="body-container">

<div class="container">
    <div class='alert alert-success'>
		<button class='close' data-dismiss='alert'>&times;</button>
			<strong>Hello '<?php echo $row['user_name']; ?></strong>  Welcome to Sun Technologies.
    </div>
</div>
<table>

<label>'<?php //echo $row['user_id']; ?></label>

<?php

require_once 'dbconfig.php';
        
 $stmt = $db_con->prepare("SELECT * FROM tbl_html");
 $stmt->execute();
 $count = $stmt->rowCount();

$i=1;
$id=$row['user_id'];
$count=0;
//$row= mysql_fetch_row($rs);

if(isset($_POST['html'.$i]))
{
	  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	  {
		  
			$html_id=$row["html_id"];
		  	$selected=$_POST['html'.$i];
			//echo($i.". Selected value is: ".$selected."<br/>");
			echo "Text is: ".$selected."<br/>";
		
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
		
}
		


?>


Thank you for attempting Html Questions.
<a href="Demo.php">Back to Select section</a>

</body>


</html>