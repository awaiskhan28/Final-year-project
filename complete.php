<?php
// Connect to the database
include("db.php");

// Get the objective ID from the URL parameter
$ob = $_GET['idl'];

// Get the current date and time
$date = date('Y-m-d H:i:s');

// Update the database to mark the objective as complete
$query = "UPDATE objective SET completed = 1, completed_date='$date' WHERE obj_id = $ob";
mysqli_query($conn, $query);

// Redirect back to the previous page
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
