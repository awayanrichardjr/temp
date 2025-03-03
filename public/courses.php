<?php
    // configuration
    require("../includes/config.php");
	 
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{

	}
	else
	{
		$courses = query("SELECT * FROM courses");
        renderwithsidebar("courses.php", ["title" => "Courses", "courses" => $courses]);
	}
        // else render form
       
?>
