<?php
// define variables and set to empty values
$nameErr = $firstnameErr = $emailErr = $commentErr = "";
$name = $firstname = $email  = $comment = "";

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Checking the name  
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]{2,255}$/",$name)) {
        $nameErr = "Only letters and white space allowed";
      }
  }
  
  // Checking the firstname 
  if (empty($_POST["firstname"])) {
    $firstnameErr = "Firstname is required";
  } else {
    $firstname = test_input($_POST["firstName"]);
    // check if firstname only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]{2,255}/",$firstname)) {
        $firstnameErr = "Only letters and white space allowed";
      }
  }
  
  // Checking the email 
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
  }
  
  // Checking the comment 
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
    if (!preg_match("/^.{255,1000}$/", $string))
        $commentErr = "Minimum 250 characters is required";
    }
  }
  
  function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }?>
