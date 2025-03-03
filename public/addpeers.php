<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
     
	 //input validation  
	 
	
	$result = query("INSERT INTO peers(empid,peerid,sy,sem) VALUES(?,?,?,?)", $_POST["empid"], $_POST["peerid"], $_POST["sy"], $_POST["sem"]);
	if($result === false)
		{
			apologize("Save unsuccessful");
		}
		else //successful
		{
			redirect("./peers.php");
		}   
    }
    else
    {
		//get employees
        $emps = query("SELECT * FROM users");
        $sys = query("SELECT * FROM sy");
        
		renderwithsidebar("addpeers.php",["title" => "Assign Peers", "emps" => $emps, "sys" => $sys  ]);
    }

?>
