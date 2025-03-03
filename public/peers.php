<?php
    // configuration
    require("../includes/config.php");
	 
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{

	}
	else
	{
		$peers = query("SELECT
                        p.id AS peer_id,
                        p.empid,
                        p.peerid,
                        p.sy,
                        p.sem,
                        ue.fname AS emp_fname,
                        ue.lname AS emp_lname,
                        up.fname AS peer_fname,
                        up.lname AS peer_lname
                    FROM
                        peers p
                    LEFT JOIN
                        users ue ON p.empid = ue.id
                    LEFT JOIN
                        users up ON p.peerid = up.id;
                    ");
        renderwithsidebar("peers.php", ["title" => "Peers", "peers" => $peers]);
	}
        // else render form
       
?>
