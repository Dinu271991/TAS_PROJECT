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

$res_per_page=02;
$sql="SELECT * from mcq";
$rs =mysql_query("SELECT * FROM mcq");
$num=mysql_num_rows($rs)or die(mysql_error());
//echo $no_of_res;
$i=1;
while($i<=$num)
{
	/*$row= mysql_fetch_row($rs);
	echo $row[0].'	<br/>'.$row[1].'<br/>'.$row['2'].'<br/>'.$row['3'].'<br/>'.$row['4'].'<br/>'.'<br/>'.'<br/>'; */
	$i++; 
}

$number_of_pages=ceil($num/$res_per_page);


if(!(isset($_GET['page'])))
{
	
	$page=1;
	
}
else
{
	$page=$_GET['page'];
}

$this_page_first_result=($page-1)*$res_per_page;


//echo "Hello".$this_page_first_result."Hello";
$sql2="SELECT * from mcq LIMIT ".$this_page_first_result.','.$res_per_page;
$rs =mysql_query($sql2);
$num=mysql_num_rows($rs)or die(mysql_error());

$i=1;
while($i<=$num)
{
	$row= mysql_fetch_row($rs);
	
	//$true_ans=$row["ans1"];
$que_des=$row["0"]; 
$option1=$row["1"];
$option2=$row["2"]; 
$option3=$row["3"]; 
$option4=$row["4"]; 
$num=mysql_num_rows($rs)or die(mysql_error());

//for($i=1;$i<=$num; $i++)



//echo "<tr> <td >$i.$que_des </td> </tr> ";
/*echo "<tr><td class=style8><input type=radio name=ans$i value=1 checked='checked'>$option1 </td><td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
echo "<td class=style8> <input type=radio name=ans$i  value=2>$option2" ."</tr>";
echo "<tr><td class=style8><input type=radio name=ans$i   value=3>$option3 </td><td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
echo "<td class=style8><input type=radio name=ans$i  value=4>$option4</td></tr>";
echo "<tr><th colspan='6'><br/><hr width='100%'></th><tr>"; */
	
	
	
	echo $row['0'].'.'.$row['1'].'<br/>'.'<input type=radio name=ans$i value=1 checked="checked">'.$row['2'].'<input type=radio name=ans$i value=2>'.$row['3'].'<br/>'.'<input type=radio name=ans$i value=3>'.$row['4'].'<input type=radio name=ans$i value=4>'.$row['5'].'<br/>'.'<br/>'.'<br/>';
	$i++;
}


for($page=1;$page<=$number_of_pages;$page++)
{
		echo '<a href="paginate.php?page='.$page.'">' .$page.'    '   .'</a>';
	
}



?>
</body>
</html>