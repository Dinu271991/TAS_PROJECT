<?php
	session_start();
	require_once 'dbconfig.php';

	if(isset($_POST['btn-login']))
	{
		//$user_name = $_POST['user_name'];
		$admin_emailId = trim($_POST['admin_emailId']);
		$admin_password = trim($_POST['admin_password']);
		
		$password = md5($admin_password);
		
		try
		{	
		
			$stmt = $db_con->prepare("SELECT * FROM tbl_admin WHERE admin_emailId=:email");
			$stmt->execute(array(":email"=>$admin_emailId));
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			$count = $stmt->rowCount();
			
			if($row['admin_password']==$admin_password){
				
				echo "ok"; // log in
				$_SESSION['admin_session'] = $row['admin_id'];
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