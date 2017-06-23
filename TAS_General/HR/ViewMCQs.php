<?php
session_start();

if(!isset($_SESSION['user_session']))
{
	header("Location: index.php");
}

include_once 'dbconfig.php';

$stmt = $db_con->prepare("SELECT * FROM tbl_users WHERE user_id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);

?>
<HTML>

<head>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="script2.js"></script>
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" media="screen">
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
          <a class="navbar-brand" href="http://www.codingcage.com">Coding Cage</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://www.codingcage.com/2015/11/ajax-login-script-with-jquery-php-mysql.html">Back to Article</a></li>
            <li><a href="http://www.codingcage.com/search/label/jQuery">jQuery</a></li>
            <li><a href="http://www.codingcage.com/search/label/PHP">PHP</a></li>
          </ul>
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


<?php

extract($_POST);
extract($_GET);
extract($_SESSION);
$cn=mysql_connect("localhost","root","")or die("Could not Connect My Sql");
mysql_select_db("login",$cn)or die("Could connect to Database");
$query="select * from mcq";
$rs=mysql_query("select * from mcq",$cn) or die(mysql_error());
if(!isset($_SESSION[qn]))
{
	$_SESSION[qn]=0;
	//mysql_query("delete from mst_useranswer where sess_id='" . session_id() ."'") or die(mysql_error());
	$_SESSION[trueans]=0;
	
}
else
{	
	
	 $submit=$_POST['submit'];
		
		if($submit=='Next Question' && isset($ans))
		{
				//mysql_data_seek($rs,$_SESSION[qn]);
				$row= mysql_fetch_row($rs);	
				mysql_query("insert into tbl_useranswer(user_id,qid,qdesc, option1, option2, option3, option4,trueans,yourans) values (' 1', '$qid','$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysql_error());
				if($ans==$row[7])
				{
							$_SESSION[trueans]=$_SESSION[trueans]+1;
				}
				$_SESSION[qn]=$_SESSION[qn]+1;
		}
		else if($submit=='Get Result' && isset($ans))
		{
				mysql_data_seek($rs,$_SESSION[qn]);
				$row= mysql_fetch_row($rs);	
				mysql_query("insert into tbl_useranswer(user_id,qid,qdesc, option1, option2, option3, option4,trueans,yourans) values (' 1', '$qid','$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysql_error());
				if($ans==$row[8])
				{
							$_SESSION[trueans]=$_SESSION[trueans]+1;
				}
				echo "<h1 class=head1> Result</h1>";
				$_SESSION[qn]=$_SESSION[qn]+1;
				echo "<Table align=center><tr class=tot><td>Total Question<td> $_SESSION[qn]";
				echo "<tr class=tans><td>True Answer<td>".$_SESSION[trueans];
				$w=$_SESSION[qn]-$_SESSION[trueans];
				echo "<tr class=fans><td>Wrong Answer<td> ". $w;
				echo "</table>";
				mysql_query("insert into tbl_result(user_id,test_date,score) values('1','$qid','".date("d/m/Y")."',$_SESSION[trueans])") or die(mysql_error());
				echo "<h1 align=center><a href=review.php> Review Question</a> </h1>";
				unset($_SESSION[qn]);
				unset($_SESSION[trueans]);
				exit;
		}
}
$rs=mysql_query("select * from mcq",$cn) or die(mysql_error());
/*if($_SESSION[qn]>mysql_num_rows($rs)-1)
{
unset($_SESSION[qn]);
echo "<h1 class=head1>Some Error  Occured</h1>";
session_destroy();
echo "Please <a href=index.php> Start Again</a>";

exit;
}*/
//mysql_data_seek($rs,$_SESSION[qn]);
$row= mysql_fetch_row($rs);
echo "<form name=myfm method=post action=quiz.php>";
echo "<table width=100%> <tr> <td width=30>&nbsp;<td> <table border=0>";
$n=$_SESSION[qn]+1;
echo "<tR><td><span class=style2>Que ".  $n .": $row[1]</style>";
echo "<tr><td class=style8><input type=radio name=ans value=1>$row[2]";
echo "<tr><td class=style8> <input type=radio name=ans value=2>$row[3]";
echo "<tr><td class=style8><input type=radio name=ans value=3>$row[4]";
echo "<tr><td class=style8><input type=radio name=ans value=4>$row[5]";

//if($_SESSION[qn]<mysql_num_rows($rs)-1)
echo "<tr><td><input type=submit name=submit value='Next Question'></form>";
//else
echo "</table></table>";
?>











<?PHP
/*extract($_POST);
extract($_GET);

$cn=mysql_connect("localhost","root","")or die("Could not Connect My Sql");
mysql_select_db("login",$cn)or die("Could connect to Database");
$rs =mysql_query("SELECT * FROM mcq");





$i=1;


				

echo "<table>";
while($row=mysql_fetch_array($rs)) {
	
//$true_ans=$row["ans1"];
$que_des=$row["qdesc"]; 
$option1=$row["option1"];
$option2=$row["option2"]; 
$option3=$row["option3"]; 
$option4=$row["option4"]; 
$num=mysql_num_rows($rs)or die(mysql_error());

//for($i=1;$i<=$num; $i++){

echo "<form name=myfm method=post action=ViewMCQs.php>"; 

echo "<tr> <td >$i.$que_des </td> </tr> <tr></tr>";
echo "<tr><td class=style8><input type=radio name=ans value=1/>$option1 </td><td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
echo "<td class=style8> <input type=radio name=ans  value=2/>$option2";
echo "<tr><td class=style8><input type=radio name=ans   value=3/>$option3 </td><td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
echo "<td class=style8><input type=radio name=ans  value=4/>$option4</td></tr>";
echo "<hr/>";
        
echo "<tr><td></td></tr><tr><td></td></tr>";

$truans =mysql_query("SELECT * FROM mcq ") ;

//mysql_query("INSERT INTO `mst_question` (`act_answer') VALUES ('ans$i');");

//if($true_ans==$option1)
//mysql_query("INSERT INTO `mst_question`( `que_desc`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`, `act_answer`) VALUES ('$que_des','$option1','$option2','$option3','$option4','$true_ans','$option1')");
//else if($true_ans==option1


$i++;

}
echo "</table>";
echo "<br/>";


echo "<tr><td><input type=submit name=submit value='Get Result'></form>";


echo "\n\n";		 

?>
<?php
	if($submit=='Get Result' && isset($ans )) 
		{
			//	mysql_data_seek($rs,$_SESSION[qn]);
			//	$row= mysql_fetch_row($rs);	
			
			
			
			
				mysql_query("insert into mst_useranswer( `que_desc`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`, `act_answer`) VALUES ('$que_des','$option1','$option2','$option3','$option4','$true_ans','$ans')");
		} */

?>





</body>
<script src="bootstrap/js/bootstrap.min.js"></script>
</html>