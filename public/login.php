<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {       
        
        // validate submission
        if (empty($_POST["username"]))
        {
            apologize("You must provide your username.");
        }
        else if (empty($_POST["pswd"]))
        {
            apologize("You must provide your password.");
        }

        // query database for user
        $rows = query("SELECT * FROM users WHERE username = ?", $_POST["username"]);

        // if we found user, check password
        if (count($rows) == 1)
        {
            // first (and only) row
            $row = $rows[0];

            // compare hash of user's input against hash that's in database
            if (crypt($_POST["pswd"], $row["hash"]) == $row["hash"])
            {
                // remember that user's now logged in by storing user's ID in session
                $_SESSION["id"] = $row["id"];
                $_SESSION["fname"] = $row["fname"];
                $_SESSION["lname"] = $row["lname"];
                $_SESSION["mname"] = $row["mname"];
                $_SESSION["employeenum"] = $row["employeenum"];

                // redirect to portfolio
               // redirect("/index.php");
               $_SESSION["role"] = "admin";
               redirect("./index.php");
            }
        }

        // else apologize
        apologize("Invalid username and/or password.");

    }
    else
    {
        // else render form
        render("login_form.php", ["title" => "Log In"]);
    }

?>
