<?php
    // configuration
    require("../../includes/config.php");
	
	if(!file_exists($_SESSION['login_view_folder']."index.php")){
		echo $_SESSION['login_view_folder'].'index.php';
	}
	

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{

	}
	else
	{
		// $emp = query("SELECT * FROM users WHERE id = ?", $_SESSION["id"]);
		// 	if(count($emp) == 1){
		// 		$emp = $emp[0];
		// 		renderwithsidebar("main.php", ["title" => "User", "emp" => $emp]);
		// 	}
	}
        // else render form
       
?>
