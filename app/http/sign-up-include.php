<?php
include("../../db.php");

if(isset($_POST['submit'])) { 

  $fullname = $_POST['fname'];
  $email = $_POST['email'];
  $studentid = $_POST['studentid'];
  $major = $_POST['major'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];
  
  // Check for empty fields
  if(empty($fullname) || empty($email) || empty($studentid) || empty($major) || empty($password) || empty($confirm_password)) {
    echo "<script>alert('Error: All fields are required. Please try again.'); window.location.href='../../sign-up.html';</script>";
    exit();
  }
  
  // Check for valid email format
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>alert('Error: Invalid email format. Please try again.'); window.location.href='../../sign-up.html';</script>";
    exit();
  }

  // Check if password matches confirm password
  if ($password !== $confirm_password) {
    echo "<script>alert('Error: Passwords do not match. Please try again.'); window.location.href='../../sign-up.html';</script>";
    exit();
  }

  // Hash the password
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);


  // Insert data into database
  $sql = "INSERT INTO students (fname,email,studentid,major,password)
  VALUES ('$fullname', '$email', '$studentid', '$major', '$hashed_password')";

  if (mysqli_query($conn, $sql)) {
    
    echo "<script>alert('Signup was successful.'); window.location.href='../../sign-in.html';</script>";
    exit();

  } else {

    echo "<script>alert('Error: signup failed.'); window.location.href='../../sign-up.html';</script>";
    exit();
  }
  mysqli_close($conn);
} else {

  echo "<script>alert('Error: An error occured.'); window.location.href='../../sign-up.html';</script>";
  exit();
}
?>
