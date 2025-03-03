<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
     
	 //input validation  
	 if (empty($_POST["code"]))
	 {
		 apologize("Invalid Code.");
	 }
     else if (empty($_POST["title"]))
	 {
		 apologize("Invalid Title.");
	 }
	
	   
	 
	$result = query("INSERT INTO courses(code,title) VALUES(?,?)", $_POST["code"], $_POST["title"]);
	if($result === false)
		{
			apologize("Save unsuccessful");
		}
		else
		{
			redirect("./courses.php");
		}   
    }
    else
    {
		
		renderwithsidebar("addcourse.php",["title" => "Add New Course"]);
    }

?>
