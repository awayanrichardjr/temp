<?php
    // configuration
    require("../includes/config.php");
	 
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{

	}
	else
	{
		$sy = query("SELECT * FROM sy");
        renderwithsidebar("peers.php", ["title" => "School Year", "sy" => $sy]);
	}
        // else render form
       
?>
