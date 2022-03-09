<?php
  require 'db.php';

  extract($_POST);

  if(isset($_POST['cadd']) && ($_POST['hadd'])){
    $sql = "insert into snack (country,hobby) values ('$cadd','$hadd')";
    $result=mysqli_query($conn,$sql);
    if (!$result) {
      die('Error in Query');
    } else{
      // $js['hobby']=$hadd;
      // $js['country']=$cadd;
      // $js_json=json_encode($js);
      // echo ($js_json);
      // echo 'Dear Frontender the Hobby: '.$hadd.' has been added to the database, so this API is working!';
    }

  }

?>