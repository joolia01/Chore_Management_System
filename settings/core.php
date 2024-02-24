<?php
/*This involves how the website handles the process of making sure someone is logged in before 
allowing them to access certain pages. If they're not logged in, it sends them back to the login page, and 
then stops everything to make sure they can't do anything else until they log in again.*/


/* Create a function for login using user id session created at login. This means that we're going to make a special "function" (a set of instructions) for when someone logs into the website. 
    The function checks if the user id session exist. This explains what the function does. It checks if that special key (the user id session) exists. 
    If it does't exist, redirect to login_view page. If the special key (the user id session) isn't there, it means the user isn't logged in. 
    Don't forget to use the die() function here. Else the instrutions will continue execution after redirection
*/


// Start session here. It indicates that we are starting a session.
session_start();

// Create a function for login using user id session created at login. This means that we're going to make a special "function" (a set of instructions) for when someone logs into the website. 
function checkLogin()
{
    // The function checks if the user id session exist. 
    if (isset($_SESSION["user_id"]))
    {
        echo "User id session exists";
        return true;
    }
    

    else
    {
        echo "User id session does not exists";
        // If it does't exist, redirect to login_view page. If the special key (the user id session) isn't there, it means the user isn't logged in. 
        header("Location: ../Login/Login_view.php");
        
        // Don't forget to use the die() function here. Else the instrutions will contiinue execution after redirection
        die();
    }

}

