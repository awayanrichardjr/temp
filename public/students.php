<?php
    // configuration
    require("../includes/config.php");
	 
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{

	}
	else
	{
		$students = query("SELECT * FROM students");
        renderwithsidebar("students.php", ["title" => "Students", "students" => $students]);
	}
        // else render form
       
?>
