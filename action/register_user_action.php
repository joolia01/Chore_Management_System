<?php

/*
Include the connection file
Retrieve form data
    Check if the form is submitted
    Collect form data and assign each to a variable
    Encrypt the password using the php method password_hash() and store the encrypted version in a varaible 

Write your INSERT QUERY using the variables above
Use a default number of 3 for the rid/field column in the People table. Meaning the query above should have a default number 3 for the rid field
Execute the query using the connection from the connection file
Check if execution worked
Redirect to login_view page if execution is successful, esle take appropriate action (display error on register_view page)

*/


// Include the connection file
include '../settings/connection.php';


// Check if the form is submitted
if(isset($_POST['registerButton']))
{
    // Collect form data and assign each to a variable
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $role = mysqli_real_escape_string($con, $_POST['familyRole']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $phone = mysqli_real_escape_string($con, $_POST['phoneNumber']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    echo $fname;
    echo $lname;
    echo $gender;



    // Encrypt the password using the php method password_hash() and store the encrypted version in a varaible
    $hash_password = password_hash($password, PASSWORD_DEFAULT);

    //Write your INSERT QUERY using the variables above. Use a default number of 3 for the rid/field column in the People table
    // 3 is for standard users
    $sql = "INSERT INTO People (rid, fid, fname, lname, gender, dob, tel, email, passwd) VALUES (3, '$role','$fname','$lname',' $gender','$dob','$phone','$email','$hash_password')";

    // Check if execution worked
    if(mysqli_query($con, $sql))
    {
        // Redirect to login_view page if execution is successful
        header("Location: ../Login/Login_view.php");
    }

    else
    {
        //Else take appropriate action (display error on register_view page)
        echo "Error: " . $sql . "<br>" . $con->error;
    }

}



