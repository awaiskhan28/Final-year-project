<?php
include("db.php");

if(isset($_POST['submit'])) {
  $caption = $_POST['caption'];
  $user = $_POST['user'];
  $course = $_POST['course'];

  // Retrieve file information
  $file_name = $_FILES['file']['name'];
  $file_tmp = $_FILES['file']['tmp_name'];
  $file_size = $_FILES['file']['size'];
  $file_type = $_FILES['file']['type'];

  // Check if file type is accepted
  $allowed_types = array('pdf', 'jpeg', 'jpg', 'png', 'mp4', 'doc', 'docx', 'gif', 'bmp', 'tiff');
  $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
  if(!in_array(strtolower($file_ext), $allowed_types)) {
    echo "<script>alert('Error: File type not accepted.');</script>";
    exit();
  }

  // Generate unique file name
  $new_file_name = uniqid('', true) . '.' . $file_ext;

  // Save file to folder
  $upload_dir = "AcademicRecords/";
  move_uploaded_file($file_tmp, $upload_dir . $new_file_name);

  // Insert data into database
  $sql = "INSERT INTO academic_record (caption,filename,course,s_id)
  VALUES ('$caption','$new_file_name','$course', '$user')";

  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('File was uploaded successfully.'); window.location.href='serverRecords.php';</script>";
    exit();
  } 
  else {
    echo "<script>alert('Error: File failed to save.'); window.location.href='serverRecords.php';</script>";
    exit();
  }
  mysqli_close($conn);
} 
else {
  echo "<script>alert('Error: An error occurred.'); window.location.href='serverRecords.php';</script>";
  exit();
}

?>
