<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
     
	 //input validation  
	 if (empty($_POST["fname"]))
	 {
		 apologize("Invalid First Name.");
	 }
     else if (empty($_POST["mname"]))
	 {
		 apologize("Invalid Middle Name.");
	 }
     else if (empty($_POST["lname"]))
	 {
		 apologize("Invalid Last Name.");
	 }
	
	   
	 
	$result = query("INSERT INTO students(fname,mname,lname,program) VALUES(?,?,?,?)", $_POST["fname"], $_POST["mname"], $_POST["lname"], $_POST["program"]);
	if($result === false)
		{
			apologize("Save unsuccessful");
		}
		else
		{
			redirect("./students.php");
		}   
    }
    else
    {
		//get programs
        $programs = query("SELECT * FROM programs");

		renderwithsidebar("addstudent.php",["title" => "Add New Student", "programs" => $programs]);
    }

?>
