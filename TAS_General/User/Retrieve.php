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
        
$stmt = $db_con->prepare("SELECT * FROM mcq");
$stmt->execute();



$i=1;
$id=$row['user_id'];
$count=0;
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
	
	$mcqQid=$row[qid];
	$mcqAnswer=$row["answer"];
if(isset($_POST['ans'.$i]))
{
	  
		$selected=$_POST['ans'.$i];
		echo($i.". Selected value is: ".$selected."<br/>");
		$query="Select * from tbl_useranswers where userid='$id' and qid=$qid";
		$stmt2=$db_con->prepare($query);
		$stmt2->execute();
		if($row=$stmt2->fetch(PDO::FETCH_ASSOC))
		{
			$count = $stmt2->rowCount();
			$qid=$row["qid"];
			$option1=$row["option1"];
			$option2=$row["option2"];
			$option3=$row["option3"];
			$option4=$row["option4"];
			$trueans=row["trueans"];
			
			if($count >0)
			{
				echo "Updating..";
				$query3="UPDATE tbl_useranswers SET userid='$id', option1=$option1, option2=$option2,option3= $option3,option4=$option4,trueans=$trueans,yourans='$selected'  WHERE qid=$qid and userid='$id' ";
				$stmt3=$db_con->prepare($query3);
				$stmt3->execute();
				echo "Updated";
			}
		
			else
			{
				echo "Inserting...";
				$query4="insert into tbl_useranswers(userid,qid,option1,option2,option3,option4,trueans,yourans) values ('$id',$qid,$option1,$option2,$option3,$option4, $trueans,'$selected')";
				$stmt4=$db_con->prepare($query4);
				$stmt4->execute();
				echo "Inserted";
			}
		}
		if($selected==$row['yourans'])
		{
					//echo "Valid Answer";
					$count=$count+1;
					//echo "count=".$count;
					
		}
		else
		{
					//echo "Invalid Answer";
		}
		
		/*$query2="Select * from tbl_result where userid='$id'";
		$date = date('Y-m-d H:i:s');
		if($chkres=mysql_query($query))
		{
			if(mysql_num_rows($chkres) >0)
			{
				  //echo "Update count=".$count;
					mysql_query("UPDATE tbl_result SET  test_date='$date', score='$count' WHERE user_id='$id';");
					
			}
		}
		else
		{
				 // echo "Insert count=".$count;
					mysql_query("insert into tbl_result(user_id,test_date,score) values('$id','$date','$count')") or die(mysql_error());
				
		} */
			
$n=1;
	$i++;
/*echo "<table>";
echo "<tR><td><span class=style2>Que ".  $n .": $row[1] </style>";
echo "<tr><td class=style8><input type=radio name=ans value=1>$row[2]";
echo "<tr><td class=style8> <input type=radio name=ans value=2>$row[3]";
echo "<tr><td class=style8><input type=radio name=ans value=3>$row[4]";
echo "<tr><td class=style8><input type=radio name=ans value=4>$row[5]";
echo "</table>";
$n++;*/

}
}



		


?>


Thank you for attempting Aptitude Questions.
<a href="Demo.php">Back to Select section</a>

</body>


</html>