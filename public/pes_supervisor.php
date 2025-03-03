<?php
    // configuration
    require("../includes/config.php");
	 
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		//validation

		//test if duplicate
		 $result = query("SELECT * FROM pes_super WHERE sy=? and sem=? and fid=? and superid=?", $_POST["sy"], $_POST["sem"], $_POST["fid"], $_SESSION["id"]);
		
            // if we found a record
            if (count($result) == 1)
            {
                apologize("Duplicate rating.");
            }


		
			$result = query("INSERT INTO pes_super(sy,sem,fid,superid,i1,i2,i3,i4,i5,i6,i7,i8,i9,i10,i11,i12,i13,i14,i15,i16,i17,i18,i19,i20,i21) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)", $_POST["sy"],$_POST["sem"],$_POST["fid"],$_SESSION["id"],$_POST["optradio1"],$_POST["optradio2"],$_POST["optradio3"],$_POST["optradio4"],$_POST["optradio5"],$_POST["optradio6"],$_POST["optradio7"],$_POST["optradio8"],$_POST["optradio9"],$_POST["optradio10"],$_POST["optradio11"],$_POST["optradio12"],$_POST["optradio13"],$_POST["optradio14"],$_POST["optradio15"],$_POST["optradio16"],$_POST["optradio17"],$_POST["optradio18"],$_POST["optradio19"],$_POST["optradio20"],$_POST["optradio21"]);
			
			
			if($result === false)
				{
					apologize("Data Not inserted.");
				}
				else
				{
					redirect("./pes_supervisor.php");
					// apologize("inserted.");
				}
		


	}
	else
	{

		$cur = query("SELECT * From sy Where current='CUR'");
		$cur=$cur[0];
		$sy = query("SELECT * FROM sy");
        $facs = query("SELECT * FROM users");
		
		
		renderwithsidebar("pes_super.php", ["title" => "Supervisor as Rater", "sy" => $sy, "cur" => $cur, "facs" => $facs]);
			
	}
        // else render form
       
?>
