<?php
  $conn = mysqli_connect("localhost", "root", "", "api_form");
  if (!$conn){
    die("Error in connection" . mysqli_connect_error());
  }else
  {
    // echo "success";
  }
?>