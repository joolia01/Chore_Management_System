<?php

//Start session using the php session method
session_start();

//Include the connection file
include '../settings/connection.php';

/*Check if the login button was clicked
    If the above fails, stop processing and provide appropriate message or redirection
    Else continue processing from the next step below
*/
if (isset($_POST['myButton']))
{

    // Collect form data and store in variables (use appropriate method- GET/POST)
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Write a query to SELECT a record from the people table using the email
    $sql = "SELECT * FROM People WHERE email ='$email';";

    //Execute a query using the connection file
    $result = mysqli_query($con, $sql);

    // Check if any row was return 
        // If no record found, provide appropriate response(user not registered, incorrect userame or password)
        // If a record is found continue with processing below
    if (mysqli_num_rows($result) > 0)
    {

        //Fetch the record
        $row = mysqli_fetch_array($result);

        //Verify password user provided against database record using the php method passowrd-verify()
            // If verification fails, provide appropriate response
            //If it's a match, contibue with the processing below
        if(password_verify($password, $data["password"]))
        {
            // Create a session for user id and role id
            $_SESSION['user_id'] = $data['pid'];
            $_SESSION['user_role'] = $data['rid'];

            // Redirect to home page
            header('Location: ../admin/home.php');
        }

        else
        {
            echo "Incorrect username or password";
        }

    }

    else
    {
        echo "User not registered"; 
    }
    


}

else
{
    echo "Login button not clicked"; 
}



