<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport",
    content = "width = device-width,
    initial-scale = 1.0">
    <title> Chore Management System </title>
    <link rel = "stylesheet" href = "../css/loginViewCSS.css">
</head>
<body>

<div class="box">
        <div class="image">
            <img src="../images/Chore Management System Logo.png" alt="Tranquility Tribe Logo">
        </div>

<div class="form">      
    <h2>Log-in Page</h2>
    <!--Resources from w3schools.com helped me with this back-end assignment-->
    
    <!--Form (required attributes- action, method, name, id) -->
    <!-- Point form action to action/login_user_action.php -->
    <form action="../action/login_user_action.php" method="post" name ="loginForm" id = "loginForm">
      <!--Email input (required attributes- placeholder, type, name, id and any form of validation attribute) -->
      <!--An <input> element with type="email" that must be in the following order: characters@characters.domain (characters followed by an @ sign, followed by more characters, and then a "."
       After the "." sign, add at least 2 letters from a to z:-->  
      <label for="email">Enter your email:</label><br>
      <input type="email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" id="email" name="email" placeholder="example@example.com" required><br>
        
       <!--Password (required attributes- placeholder, type, name, id and any form of validation attribute) --> 
       <!--An <input> element with type="password" that must contain 8 or more characters that are of at least one number, and one uppercase and lowercase letter:-->
      <label for="password">Enter your password:</label><br>
      <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="password" name="password" placeholder="Enter your password" required><br><br>
      
      <!--Sign-in Button (required attributes- type, name, id) -->
      <button type="submit" name="myButton" id="buttonClick">Sign-in</button> 
       </form><br> 
</div>
    <!--Register link to redirect to register page -->
    <div>
        <a href="register.htm">Register Now</a>
    </div>
</body>
</html>



