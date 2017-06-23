<?php
include_once 'dbconfig.php';
$count=$_POST['count'];
echo "Refresh Count is: ".$refCount;
$stmt = $db_con->prepare("update tbl_candidateFinalStatus set refresh_count=:count where user_id=2");
$stmt->bindParam(":count",$count);
$stmt->execute();



?>