<?php

/*
Include the connection file. This means we're bringing in a special file that helps our website talk to the database.
Write a SELECT query on the family_name table
Execute the query using the connection
Check if execution worked
Fetch the results
Use the results to build the family role drop down on the register page
*/

// Include the connection file. This means we're bringing in a special file that helps our website talk to the database.
include '../settings/connection.php';

// Write a SELECT query on the family_name table
$sql = "SELECT fid, fam_name FROM Family_name";

// Execute the query using the connection
$result = $con->query($sql); 

if ($result) //Checking if the result is not null or if the execution worked
{
    // Check if execution worked

    if ($result->num_rows > 0) 
    { 
        echo '<select id="familyRoleDropdown" name="familyRole">';
        foreach ($result as $role)
        {
            echo '<option value="'. $role["fid"] . '">' . $role['fam_name']. '</option>';
        }
        echo '</select>'; 
    }  
    else 
    { 
        echo "No records has been found"; 
    } 
}


