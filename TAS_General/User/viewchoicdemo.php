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
<HTML>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Form using jQuery Ajax and PHP MySQL</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
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
        <!--  <a class="navbar-brand" href="http://www.codingcage.com">Coding Cage</a> -->
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
<table>
<?php

$cn=mysql_connect("localhost","root","")or die("Could not Connect My Sql");
mysql_select_db("login",$cn)or die("Could connect to Database");
$rs =mysql_query("SELECT * FROM mcq");





$i=1;


				
echo "<form name=myfm method=post action=Retrieve.php>"; 
echo "<table>";
while($row=mysql_fetch_array($rs)) {
	

//$true_ans=$row["ans1"];
$que_des=$row["qdesc"]; 
$option1=$row["option1"];
$option2=$row["option2"]; 
$option3=$row["option3"]; 
$option4=$row["option4"]; 
$num=mysql_num_rows($rs)or die(mysql_error());

//for($i=1;$i<=$num; $i++)



echo "<tr> <td >$i.$que_des </td> </tr> ";
echo "<tr><td class=style8><input type=radio name=ans$i value=1 checked='checked'>$option1 </td><td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
echo "<td class=style8> <input type=radio name=ans$i  value=2>$option2" ."</tr>";
echo "<tr><td class=style8><input type=radio name=ans$i   value=3>$option3 </td><td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
echo "<td class=style8><input type=radio name=ans$i  value=4>$option4</td></tr>";
echo "<tr><th colspan='6'><br/><hr width='100%'></th><tr>";

//mysql_query("INSERT INTO `mst_question` (`act_answer') VALUES ('ans$i');");

//if($true_ans==$option1)
//mysql_query("INSERT INTO `mst_question`( `que_desc`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`, `act_answer`) VALUES ('$que_des','$option1','$option2','$option3','$option4','$true_ans','$option1')");
//else if($true_ans==option1


$i++;


}

echo "<tr><td><input type=submit name=submit value='Save & Next' id='submit_button'/></td></tr>";

echo "<br/>";
echo "<div align='right'>No of Questions ".$num."</div>";

echo "</form>";


echo "\n\n";		 



?>

<?php

$_SESSION['ans'.$i]=$_POST['ans'.$i];

?>


<script type="text/javascript">

</script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</html>












