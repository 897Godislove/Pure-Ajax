<?php
  require 'db.php';
  if(isset($_POST['deleteSend'])){
    $unique = $_POST['deleteSend'];

    $query = "delete from snack where id=$unique";
    $result = mysqli_query($conn,$query);
    if(!$result){
      die("Error in connection");
    }else{
      echo "success";
    }
  }

?>