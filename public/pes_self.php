<?php
    // configuration
    require("../includes/config.php");
	 
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		//validation

		//test if duplicate
		$result = query("SELECT * FROM pes_self WHERE sy=? and sem=? and empid=?", $_POST["sy"], $_POST["sem"],$_SESSION["id"]);
		
            // if we found a record
            if (count($result) == 1)
            {
                apologize("Duplicate rating for ". $_POST["sem"]." semester, ".$_POST["sy"] );
            }


		
			$result = query("INSERT INTO pes_self(sy,sem,empid,s1,s2,s3,s4,s5,s6,s7,s8,s9,p1,p2,p3,p4,p5,p6,c1,c2,c3,c4) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)", $_POST["sy"], $_POST["sem"], $_SESSION["id"],$_POST["optradio1"],$_POST["optradio2"],$_POST["optradio3"],$_POST["optradio4"],$_POST["optradio5"],$_POST["optradio6"],$_POST["optradio7"],$_POST["optradio8"],$_POST["optradio9"],$_POST["optradio10"],$_POST["optradio11"],$_POST["optradio12"],$_POST["optradio13"],$_POST["optradio14"],$_POST["optradio15"],$_POST["optradio16"],$_POST["optradio17"],$_POST["optradio18"],$_POST["optradio19"]);
					
			if($result === false)
				{
					apologize("Data Not inserted.");
				}
				else
				{
					redirect("./pes_self.php");
				}
		


	}
	else
	{

		$cur = query("SELECT * From sy Where current='CUR'");
		$cur=$cur[0];
		$sy = query("SELECT * FROM sy");
		
		renderwithsidebar("pes_self.php", ["title" => "Self as Rater", "sy" => $sy, "cur" => $cur]);
			
	}
        // else render form
       
?>
