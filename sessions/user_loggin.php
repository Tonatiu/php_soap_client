<?php
if(!isset($_SESSION))
	session_start();

if($_POST){
	$pass = $_POST['user_pasw'];
	$true_pass = "2413Warrior777";
	$user_id = $_POST['user_name'];
	$true_id = "2012630537";
	
	if($pass == $true_pass && $user_id == $true_id){
		$_SESSION["user"] = $user_id;
		echo '<script languaje="javascript">
				self.location = "../views/home.php";
			</script>';
	}
	else{
		echo '<script languaje="javascript">
				alert("Datos no válidos");
				self.location = "../index.php"
			</script>';
	}
}
?>