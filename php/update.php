<?php
  include 'db.php';


  if(isset($_POST['selectedIdSend'])){
    $user_id = $_POST['selectedIdSend'];

    $sql = "select * from snack where id = $user_id";
    $result = mysqli_query($conn, $sql);

    // About to re-render the Form-Update Component
    $form= '<div class="card mt-5 w-75 my-3" id="updateform">
      <div class="alert alert-info" id="info">Update details</div>
      <form class="card-body" action="php/update.php" method="POST" id="updateform">';

    while($row=mysqli_fetch_assoc($result)){
      // $response=$row;
      $resID=$row['id'];
      $resH=$row['hobby'];
      $resC = $row['country'];

      $form.='<div class="form-group" id="country">
          <label for="">What Country?</label>
          <input class="form-control" type="text" value="'. $resC . '" id="updateq1">
        </div>
        <div class="form-group" id="country">
          <label for="">Your Hobby?</label>
          <input class="form-control" type="text"  value="' . $resH . '"  id="updateq2">
          </div>
          <input type="hidden" value="'. $resID .'" id="hiddenData">
          ';

    }

    $form .= '<div>
          <button class=" btn btn-primary mt-2" type="submit">Update</button>
        </div>
      </form>
    </div>
    <script>
          $("#updateform").submit(function (e) { 
          e.preventDefault();
           var updateq1 = $("#updateq1").val();
            var updateq2 = $("#updateq2").val();
            var hiddenData = $("#hiddenData").val();

            $.post("php/update.php", {
              updateq1Send : updateq1,
              updateq2Send : updateq2,
              hiddenDataSend:hiddenData,
            }, function(data, status){
                $("#formx").html(data);

                displayData();
                $("#info").html("<h3>Updated Record.</h3>")
                  }
            )
  
});

    </script>
    
    ';
    echo $form;


  }else{
    $response['status']=200;
    $response['message']="Invalid or Data not found!";
  }


  // Update Query

  if(isset($_POST['hiddenDataSend'])){

    // About to re-render the Form-Update Component
      $add_form = '<div class="card mt-5 w-75 my-3">
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
      </div>';


    $unique = $_POST['hiddenDataSend'];
    $country= $_POST['updateq1Send'];
    $hobby = $_POST['updateq2Send'];

    $sql2 = "update snack set country='$country', hobby='$hobby' where id=$unique";
    $result2 = mysqli_query($conn, $sql2);
    if (!$result2) {
      die("Error in connection");
    } else {
      echo $add_form;
      // $test['uniqueID']=$unique;
      // $test['country']=$country;
      // $test['hobby'] = $hobby;
      // echo json_encode($test);
    }
  }
?>