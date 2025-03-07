<?php  


define('USERNAME', 'golap');  
define('PASSWORD', 'mondol22');  

  
$username_attempt = $_POST['username'] ?? '';  
$password_attempt = $_POST['password'] ?? '';  

// Check if the credentials match  
if ($username_attempt == USERNAME && $password_attempt == PASSWORD) {  
  echo "Login successful!";  
} else {  
  echo "Login failed. Incorrect username or password.";  
}  

?>  

<!-- Basic HTML form to simulate user input -->  
<form method="post">  
  <label for="username">Username:</label><br>  
  <input type="text" id="username" name="username"><br><br>  

  <label for="password">Password:</label><br>  
  <input type="password" id="password" name="password"><br><br>  

  <input type="submit" value="Login">  
</form>  