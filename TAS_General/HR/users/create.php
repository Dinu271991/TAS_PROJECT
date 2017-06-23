<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$id=$_POST['user_id'];
		$user_name = $_POST['user_name'];
		$department = $_POST['department'];
		$user_password = $_POST['user_password'];
		$confPassword=$_POST['confPassword'];
		$city = $_POST['city'];
		$user_email = $_POST['user_email'];
		$phone = $_POST['phone'];
		
		try{
			
			
			
			if($_POST['user_password']==$_POST['confPassword'])
			{
			
				$stmt = $db_con->prepare("INSERT INTO tbl_candidates(user_id,user_name,department,user_password,city,user_email,phone) VALUES(:uid, :uname, :udept, :upwd,:ucity,:uemail,:uphone)");
				$stmt->bindParam(":uid", $id);
				$stmt->bindParam(":uname", $user_name);
				$stmt->bindParam(":udept", $department);
				$stmt->bindParam(":upwd", $user_password);
				$stmt->bindParam(":ucity", $city);
				$stmt->bindParam(":uemail", $user_email);
				$stmt->bindParam(":uphone", $phone);
				
				if($stmt->execute())
				{
					echo "Successfully Added";
				}
				else{
					echo "Query Problem";
				}	
			}
			else{
				echo "Password and Confirm Password does not match!!";
			}
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>