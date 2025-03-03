<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
     
	 //input validation  
	 if (empty($_POST["sy"]))
	 {
		 apologize("Invalid SY.");
	 }
	
	
    if($_POST["current"]=="CURRENT")
    {
        //update prev sy
        $result = query("UPDATE sy SET current = ?", "");
    }
	 
	$result = query("INSERT INTO sy(sy,current) VALUES(?,?)", $_POST["sy"], $_POST["current"]);
	if($result === false)
		{
			apologize("Save unsuccessful");
		}
		else
		{
			redirect("./sy.php");
		}   
    }
    else
    {
		
		renderwithsidebar("addsy.php",["title" => "Add New SY"]);
    }

?>
