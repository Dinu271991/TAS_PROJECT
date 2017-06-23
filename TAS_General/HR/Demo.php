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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Form using jQuery Ajax and PHP MySQL</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<link href="style.css" rel="stylesheet" media="screen">

</head>

<body>

<form name="home" action="ViewChoice.php" method="POST">
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
        <!--<div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://www.codingcage.com/2015/11/ajax-login-script-with-jquery-php-mysql.html">Back to Article</a></li>
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

<div class="container">





<?php

$cn=mysql_connect("localhost","root","")or die("Could not Connect My Sql");
mysql_select_db("login",$cn)or die("Could connect to Database");


$rs =mysql_query("SELECT category_name FROM tbl_mcq_category");
$i=1;
$num=mysql_num_rows($rs)or die(mysql_error());

if($num<1)
{
	echo "<br><br><h2 class=head1> No Questions for this Section </h2>";
	exit;
}
else
{
	echo "<h3 class=head1> Select Category </h2><br/>";
	echo "<div align=center>";
	while($i<=$num)
	{
		$row= mysql_fetch_row($rs);
		//echo "<h4><a href='ViewChoice.php'>$row[0]</a></h4><br/>";
		$i++;
	}
	
	echo "<h4><a href='ViewChoice.php'>Aptitude</a></h4><br/>";
	echo "<h4><a href='Program.php'>Programs</a></h4><br/>";
	echo "<h4><a href='Essay.php'>Essay</a></h4><br/>";
	echo "<h4><a href='HTML.php'>HTML</a></h4><br/>";
	
	echo "</div>";
	
	
	
	
	
	
}





?>

		
	</form>

    </div>
</div>

</div>
</div>
</div>

</div>
<script src="bootstrap/js/bootstrap.min.js"></script>


</body>
</html>