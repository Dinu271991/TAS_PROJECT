<?php
	session_start();
	unset($_SESSION['hr_session']);
	
	if(session_destroy())
	{
		header("Location: ../../index.php");
	}
?>