<?php
require 'db.php';

if (isset($_POST['dataSend'])) {
  $table = '<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">S/N</th>
        <th scope="col">Country</th>
        <th scope="col">Hobby</th>
        <th scope="col">Operations</th>
      </tr>
    </thead>';
  $sql = "select * from snack order by id desc";
  $result = mysqli_query($conn, $sql);
  $sn = 1;
  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $country = $row['country'];
    $hobby = $row['hobby'];
    $table .= '<tr>
        <td scope="row">' . $sn . '</td>
        <td>' . $country . '</td>
        <td>' . $hobby . '</td>
        <td>
          <button class="btn btn-warning" onclick="updateData(' . $id . ')">Update</button>
          <button class="btn btn-danger" onclick="deleteData('.$id.')">Delete</button>
        </td>
      </tr>';
    $sn++;
  }
  $table .= '</table>';
  echo $table;
}

?>
