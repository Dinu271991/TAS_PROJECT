<html>



<script>


function answ(answer,qId) {
document.getElementById("ansval"+qId).value = answer;
}

</script>
<body>
<?php

	$db_host = "localhost";
	$db_name = "login";
	$db_user = "root";
	$db_pass = "";
	
	try{
		
		$db_con = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
		$db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}

$rs =mysql_query("SELECT * FROM mcq");

//$row= mysql_fetch_row($rs);


while($row=mysql_fetch_array($rs)) 
  {
  $questionId = $row['qid']; //primary key of question table
  $na= $row['qdesc'];
  $opa= $row['option1'];
   $opb= $row['option2'];
  $opc= $row['option3'];
    $opd= $row['option4'];

 echo "<div class='pr3'>";

echo "<div id='question'>";
echo $na;
echo "</div>";
echo "<br/>";
echo "<form name='cart' method='post'>";
echo "<input type='radio' name='ans<?php echo $questionId; ?>' value='" . $opa. "' onclick='answ(this.value,'<?php echo $questionId; ?>')' >";
echo $opa;
echo "<br/>";
echo "<input type='radio' name='ans<?php echo $questionId; ?>' value='" . $opb. "' onclick='answ(this.value,'<?php echo $questionId; ?>')'>";
echo $opb;
echo "<br/>";
    echo "<input type='radio' name='ans<?php echo $questionId; ?>' value='" . $opc. "' onclick='answ(this.value,'<?php echo $questionId; ?>')'>";
echo $opc;
echo "<br/>";
echo "<input type='radio' name='ans<?php echo $questionId; ?>' value='" . $opd. "' onclick='answ(this.value,'<?php echo $questionId; ?>')'>";
echo $opd;
echo "<br/>";
echo "<input type='text' id='ansval<?php echo $questionId; ?>' name='ansval<?php echo $questionId; ?>' >";
    echo "</form>";

 echo " </div>";

  } 



?>


</body>

</html>