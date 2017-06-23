<?php
require_once 'dbconfig.php';

	
	if($_POST)
	{
		$id=$_POST['emp_id'];
		$emp_name = $_POST['emp_name'];
		$emp_dept = $_POST['emp_dept'];
		$emp_email = $_POST['emp_email'];
		$emp_pwd = $_POST['emp_pwd'];
		$emp_confpwd=$_POST['emp_confpwd'];
		
		try{
			
			if($_POST['emp_pwd']==$_POST['emp_confpwd'])
			{
			
				$stmt = $db_con->prepare("INSERT INTO tbl_employees(emp_id,emp_name,emp_dept,emp_email,emp_pwd) VALUES(:eid, :ename, :edept, :eemail,:epwd)");
				$stmt->bindParam(":eid", $id);
				$stmt->bindParam(":ename", $emp_name);
				$stmt->bindParam(":edept", $emp_dept);
				$stmt->bindParam(":eemail", $emp_email);
				$stmt->bindParam(":epwd", $emp_pwd);
				
				if($stmt->execute())
				{
					echo "Successfully Added";
				}
				else{
					echo "Query Problem";
				}	
			}
			else{
				echo "Password and Confirm Password does not match";
			}
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>