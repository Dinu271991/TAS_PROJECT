<?php
	session_start();
	require_once 'dbconfig.php';

	if(isset($_POST['btn-login']))
	{
		//$user_name = $_POST['user_name'];
		$hr_emailId = trim($_POST['hr_emailId']);
		$hr_password = trim($_POST['hr_password']);
		
		$password = md5($hr_password);
		
		try
		{	
		
			$stmt = $db_con->prepare("SELECT * FROM tbl_hr WHERE hr_emailId=:email");
			$stmt->execute(array(":email"=>$hr_emailId));
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			$count = $stmt->rowCount();
			
			if($row['hr_password']==$hr_password){
				
				echo "ok"; // log in
				$_SESSION['hr_session'] = $row['hr_id'];
			}
			else{
				
				echo "email or password does not exist."; // wrong details 
			}
				
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>