<?php
    // configuration
    require("../includes/config.php");
	 
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		//validation

		//test if duplicate
		 $result = query("SELECT * FROM pes_student WHERE sy=? and sem=? and studid=? and courseid=?", $_POST["sy"], $_POST["sem"],1,1);
		
            // if we found a record
            if (count($result) == 1)
            {
                apologize("Duplicate rating for ". $_POST["courseid"]);
            }


		
			$result = query("INSERT INTO pes_student(studid,courseid,sy,sem,fid,c1,c2,c3,c4,c5,c6,i1,i2,i3,i4,i5,i6,e1,e2,e3,e4,e5,e6,a1,a2,a3,a4,a5,a6,g1,com1,com2,com3,com4) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)", 1, $_POST["courseid"],$_POST["sy"],$_POST["sem"],31,$_POST["optradio1"],$_POST["optradio2"],$_POST["optradio3"],$_POST["optradio4"],$_POST["optradio5"],$_POST["optradio6"],$_POST["optradio7"],$_POST["optradio8"],$_POST["optradio9"],$_POST["optradio10"],$_POST["optradio11"],$_POST["optradio12"],$_POST["optradio13"],$_POST["optradio14"],$_POST["optradio15"],$_POST["optradio16"],$_POST["optradio17"],$_POST["optradio18"],$_POST["optradio19"],$_POST["optradio20"],$_POST["optradio21"],$_POST["optradio22"],$_POST["optradio23"],$_POST["optradio24"],$_POST["optradio25"],$_POST["com1"],$_POST["com2"],$_POST["com3"],$_POST["com4"]);
			
			
			if($result === false)
				{
					apologize("Data Not inserted.");
				}
				else
				{
					redirect("./pes_student.php");
					// apologize("inserted.");
				}
		


	}
	else
	{

		$cur = query("SELECT * From sy Where current='CUR'");
		$cur=$cur[0];
		$sy = query("SELECT * FROM sy");
        $facs = query("SELECT * FROM users");
		$courses = query("SELECT * FROM studentcourses Where sid=1");
		
		renderwithsidebar("pes_student.php", ["title" => "Student as Rater", "sy" => $sy, "cur" => $cur, "courses" => $courses]);
			
	}
        // else render form
       
?>
