<?php
include "php/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <!-- <meta http-equiv="refresh" content="2"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
  <title>My First API</title>
</head>

<body>

  <div class="container">
    <div id="formx">
      <div class="card mt-5 w-75 my-3">
        <div class="alert alert-info" id="info">Cheap Questions Right!</div>
        <form class="card-body" action="php/first.php" method="POST" id="card">
          <div class="form-group" id="country">
            <label for="">What Country?</label>
            <input class="form-control" type="text" id="q1">
          </div>
          <div class="form-group" id="country">
            <label for="">Your Hobby?</label>
            <input class="form-control" type="text" id="q2">
          </div>
          <div>
            <button class="form-group btn btn-primary mt-2" type="button" id="submit" onclick="adduser()">Submit</button>
          </div>
        </form>
      </div>
    </div>
    <div id="tableData"></div>
  </div>

</body>
<script src="assets/js_cdn/jquery-3.6.0.js"></script>
<script src="assets/main.js"></script>
<script src="assets/js_cdn/js/bootstrap.min.js"></script>

</html>