<?php
	session_start();
	require_once 'dbconfig.php';

	if(isset($_POST['btn-login']))
	{
		$user_role=$_POST['role'];
		//$user_name = $_POST['user_name'];
		$user_email = trim($_POST['user_email']);
		$user_password = trim($_POST['password']);
		
		$password = md5($user_password);
		
		try
		{	
		
			if($user_role=='Candidate')
			{
				$stmt = $db_con->prepare("SELECT * FROM tbl_candidates WHERE user_email=:email");
				$stmt->execute(array(":email"=>$user_email));
				$row = $stmt->fetch(PDO::FETCH_ASSOC);
				$count = $stmt->rowCount();
			
				if($row['user_password']==$user_password){
				
					echo "ok"; // log in
					$_SESSION['user_session'] = $row['user_id'];
			}
			else{
				
				echo "<span style='position:absolute;top:75%;left:44%;color:black;'>Email or password does not exist.</span>"; // wrong details 
			}
			}
			else if($user_role=='DeptMgr')
			{
				
				$stmt = $db_con->prepare("SELECT * FROM tbl_admin WHERE admin_emailId=:email");
				$stmt->execute(array(":email"=>$user_email));
				$row = $stmt->fetch(PDO::FETCH_ASSOC);
				$count = $stmt->rowCount();
			
				if($row['admin_password']==$user_password){
				
					echo "Manager ok"; // log in
					$_SESSION['admin_session'] = $row['admin_id'];
				}
				else{
				
					echo "email or password does not exist."; // wrong details 
				}
			}
			else if($user_role=='HR')
			{
				$stmt = $db_con->prepare("SELECT * FROM tbl_hr WHERE hr_emailId=:email");
				$stmt->execute(array(":email"=>$user_email));
				$row = $stmt->fetch(PDO::FETCH_ASSOC);
				$count = $stmt->rowCount();
					
				if($row['hr_password']==$user_password){
				
					echo "HR ok"; // log in
					$_SESSION['hr_session'] = $row['hr_id'];
				}
				else{
				
				echo "email or password does not exist."; // wrong details 
				}
			}
			else
			{
				echo "Please select a role";
			}
			
			
				
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>