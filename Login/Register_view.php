<!DOCTYPE html>
<html lang ="en">

<head>
	<meta charset = "UTF-8">
	<meta name = "viewport",
	content = "width = device-width,
	initial-scale = 1.0">

	<title> Register </title>
	<link rel = "stylesheet" href = "../css/registerViewCSS.css">
</head>

<body>
<div class="box">
        <div class="image">
            <img src="../images/Chore Management System Logo.png" alt="Tranquility Tribe Logo">
        </div>

<div class="form">      
	<h2>Register Page</h2>
    
    <!--Form (required attributes- action, method, name, id) -->
    
    <form action="../action/register_user_action.php" method="post" name ="registerForm" id = "formID">

      <!--First name input (required attributes- placeholder, type, name, id and any form of validation attribute) --> 
      <!-- This pattern will match first names that consist of alphabetical characters, spaces, hyphens, and/or apostrophes, and are at least two characters long.-->
      <label for="fname">First name:</label><br>
      <input type="text" pattern = "[A-Za-z -']{2,}$"  id="fname" name="fname"placeholder="Enter your first name" required> <br>
       <br> 
         
      <!--Last name input (required attributes- placeholder, type, name, id and any form of validation attribute) --> 
      <label for="lname">Last name:</label><br>
      <input type="text" pattern = "[A-Za-z -']{2,}$" id="lname" name="lname"placeholder="Enter your last name" required> <br>
       <br> 
      
      <!--Radio BUtton for gender (required attributes- name and id) (0-Male, 1- Female)--> 
      <p>Please select your gender (0-Male, 1- Female)</p>
      <input type = "radio" id="male" name="gender">
      <label for="male">Male</label><br>
       
      <input type = "radio"id="female" name="gender">
      <label for="female">Female</label><br>
      <br>
        
      <!--Drop down for Family Role (required attributes- name and id) (0-Select, 1-Father, 2-Mother, 3-Son, 4-Daughter)-->  
      <label for="familyRole">Select your family role:</label>
      <?php 
      
      /*
      Include the select_role_fxn.php
      Use the select_role_fxn file to complete the family role dropdown
      Point form action to action/register_user_action.php
      Ensure all validation is working on the form
      */

      // Include the select_role_fxn.php
      
      include '../functions/select_role_fxn.php'; ?>
      
      
      <br>
      <br>
       
       <!--Date of Birth Input (required attributes- placeholder, type, name, id and any form of validation attribute) --> 
       <!--This would enforce a date format of MM/DD/YYYY.-->
      <label for="dob">Date of Birth:</label><br>
      <input type="date" id="dob" pattern="\d{1,2}/\d{1,2}/\d{4}" name="dob" placeholder="Select your  date of birth" required>
      <br>
      <br>   
         
      <!--Phone Number Input (required attributes- placeholder, type, name, id and any form of validation attribute) --> 
      <!--This enforces a phone number format of 123-456-7890-->
      <label for="phoneNumber">Enter your phone number:</label><br>
      <input type="tel" id="phoneNumber" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="phoneNumber" placeholder="Enter your phone number" required>
       <br>
       <br>

       <!--Email input (required attributes- placeholder, type, name, id and any form of validation attribute) --> 
        <!--An <input> element with type="email" that must be in the following order: characters@characters.domain (characters followed by an @ sign, followed by more characters, and then a "."
       After the "." sign, add at least 2 letters from a to z:-->
      <label for="email">Enter your email:</label><br>
      <input type="email" id="email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" name="email" placeholder="example@example.com" required><br>
       <br> 
         
       <!--Password (required attributes- placeholder, type, name, id and any form of validation attribute) -->
       <!--An <input> element with type="password" that must contain 8 or more characters that are of at least one number, and one uppercase and lowercase letter:-->
      <label for="password">Enter your password:</label><br>
      <input type="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="password" placeholder="Enter your password" required><br><br>  
      
      <!--Password retype input (required attributes- placeholder, type, name, id and any form of validation attribute) -->
      <label for="passwordRetype">Retype your password:</label><br>
      <input type="password" id="passwordRetype" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="passwordRetype" placeholder="Retype your password" required> <br><br>
        
      <!--Register Button (required attributes-type, name, id ) -->
      <button type="submit" id="registerButton" name="registerButton">Register</button>
      <br>
      <br> 
      
</div>

      <!--Login link to redirect to login page -->
      <div>
        <a href="login.htm">Log-in</a>
      </div>

    </form>  

</body>

</html>













