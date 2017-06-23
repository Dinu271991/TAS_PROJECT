<html>
<head>
<style>

.save{

	font-weight: 600;
	font-family:Comic Sans MS;
	position:absolute;
	top:2%;
	margin-right:-47%;
		 padding: 8px 25px;
  font-size: 15px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: white;
  background-color: #5bc0de;
  border-color: #46b8da;
  border: thin;
  border-radius: 15px;
 
}

</style>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="mynewstyle.css">
<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="crud.js"></script>


</head>

<?php


include_once 'dbconfig.php'; 
$id=$_GET['edit_id'];
 $stmt = $db_con->prepare("SELECT program_id,prog_desc,prgm_score from tbl_userprogram where uid=:id");
 $stmt->bindParam(":id", $id);
$stmt->execute();
   
   
  
 echo "<form method=post name=prgmScore id=prgmScore>";
 while($row=$stmt->fetch(PDO::FETCH_ASSOC))
 {
	    echo "<fieldset>";
		echo "<legend>Program $row[program_id]</legend>";
		echo "<table>";
		echo "<tr><td>Programming Id :</td><td><input type=text value=$row[program_id] readonly/></td></tr>"; 
		echo "<tr><td>Program Description:</td><td> <textarea autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' rows='10' cols='50' name='$row[program_id]' required readonly>$row[prog_desc]</textarea></td></tr>";
		echo "<tr><td>Programming Score: </td><td><input type=text value=$row[prgm_score] name='Program$row[program_id]' id='Program$row[program_id]'/></td></tr>";
		echo "</table>";
		echo "</fieldset>";
		echo "<br/><br/>";
		
 }
 echo "</form>";
 echo "<button type=button id='save' class='save' style='position:relative;left:40%;'>Save Score</button>";


?>