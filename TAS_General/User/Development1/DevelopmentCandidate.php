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
<style>
td{
	padding-bottom: 10px;
}
</style>

<table>
<tr><td>Candidate ID<td>&nbsp;::&nbsp;</td></td><td><?php echo "$row[user_id]";?></td></tr>
<tr><td> Name<td>&nbsp;::&nbsp;</td></td><td><?php echo "$row[user_name]";?></td></tr> 
<tr><td>Email ID<td>&nbsp;::&nbsp;</td></td><td><?php echo "$row[user_email]";?></td></tr> 
<tr><td>Phone<td>&nbsp;::&nbsp;</td></td><td><?php echo "$row[phone]";?></td></tr>
<tr><td>Department<td>&nbsp;::&nbsp;</td></td><td><?php echo "$row[department]";?></td></tr>
<tr><td>Location<td>&nbsp;::&nbsp;</td></td><td><?php echo "$row[city]";?></td></tr> 
</table>