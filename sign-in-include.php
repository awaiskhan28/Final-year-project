<?php
// include the database connection file
include("db.php");

if(isset($_POST['submit'])) {
  // get the email and password from the form
  $em = $_POST['email'];
  $password = $_POST['password'];

  // check for empty fields
  if(empty($em) || empty($password)) {
    echo "<script>alert('Error: All fields are required. Please try again.'); window.location.href='sign-in.html';</script>";
    exit();
  }

  // check for valid email format
  if (!filter_var($em, FILTER_VALIDATE_EMAIL)) {
    echo "<script>alert('Error: Invalid email format. Please try again.'); window.location.href='sign-in.html';</script>";
    exit();
  }



  // query the database for the user with the given email
  $query = "SELECT * FROM students WHERE email = '$em'";
  $result = mysqli_query($conn, $query);

  // check if the query was successful
  if(!$result) {
    echo "<script>alert('Error: An error occurred while signing in. Please try again later.'); window.location.href='sign-in.html';</script>";
    exit();
  }

  // check if the user was found
  if(mysqli_num_rows($result) > 0) {
    // get the user's data from the database
    $user = mysqli_fetch_assoc($result);

    // check if the password is correct
    if(password_verify($password, $user['password'])) {
      // the password is correct, so sign the user in
      session_start();
      $_SESSION['user_id'] = $user['s_id'];
      $_SESSION['name'] = $user['fname'];
      $_SESSION['username'] = $user['email'];
      header("Location:home2.php");
      exit();
    } else {
      // the password is incorrect
      echo "<script>alert('Error: Incorrect password. Please try again.'); window.location.href='sign-in.html';</script>";
      exit();
    }
  } else {
    // the user was not found
    echo "<script>alert('Error: Email address not found. Please try again.'); window.location.href='sign-in.html';</script>";
    exit();
  }
} else {
  // the form was not submitted
  echo "<script>alert('Error: An error occurred. Please try again.'); window.location.href='sign-in.html';</script>";
  exit();
}
?>
