$(document).ready(function () {
  displayData()
  $('#updateform').show();
});

function displayData(){
  var displayData = "true";
  $.ajax({
    type: "post",
    url: "php/display.php",
    data: {
      dataSend:displayData,
    },
    success: function (res) {
      $('#tableData').html(res);
    }
  });
}

function adduser(){
  var countryAdd = $("#q1").val();
  var hobbyAdd = $("#q2").val();

  $.ajax({
    type: "post",
    url: "php/first.php",
    data: {
      cadd:countryAdd,
      hadd:hobbyAdd,
    },
    success: function (res) {
      $('#info').html('<h3>Answers added to record successfully</h3>')
      // $('#submit').submit(function (e) { 
      //   e.preventDefault()
      //   setTimeout(function() {window.location.reload()},0)
      //   this.submit();

      // })
      displayData()
    }
  });
}

// Delete record
function deleteData(deleteRecord){
  $.ajax({
    type: "post",
    url: "php/delete.php",
    data: {
      deleteSend : deleteRecord
    },
    success: function (data,status) {
      displayData();
      $('#info').html('<h3>Record Deleted!</h3>')
    }
  });
}


// Update record
function updateData(selectedId){
  $('#formx').html('');
  // alert('onefoe')
  
  $('#hiddenData').val(selectedId);
    console.log("are you there again?")
    console.log('This is the selected ID: '+selectedId)

  $.post("php/update.php", {selectedIdSend:selectedId},
    function (data, status) {
      // var jsonData = JSON.parse(data)
      // $('#updateq1').val(jsonData.country);
      // $('#updateq2').val(jsonData.hobby);
      $('#formx').html(data);
    }
  );

  // $('#update').show();
  console.log("are you there?")
}

// Update function Handler
// function updateDetails(){
//   var updateq1 = $('#update1').val();
//   var updateq2 = $('#update2').val();
//   alert(updateq1)
//   alert(updateq2)
//   var hiddenData = $('#hiddenData').val();

//   $.post("php/update.php", {
//     updateq1Send : updateq1,
//     updateq2Send : updateq2,
//     hiddenDataSend:hiddenData,
//   }, function(data, status){
//       $('#updateform').hide();
//       displayData();
//     }
//   )

// }




// $(document).ready(function () {


//   $("#card").submit(function (e) { 
//     e.preventDefault();
//     setTimeout(function() {window.location.reload();},0);
//     this.submit();
//     url=$(this).attr('action');
//     data=$(this).serialize();
//     $('#card').each(function(){
//     this.reset();
//     });
//     console.log(data);

//     $.ajax({
//       type: "POST",
//       url: url,
//       data: data,
//       success: function (ans) {
//         // console.log(ans)
//         // converting the backend response to json(object)
//         // ans=JSON.parse(ans);
//         // selecting an item in the object from the backend
//         $("#info").text(ans.firstQ);
//         $("#sn").html(htmlString);
//         $("#question1").html(htmlString);
//         $("#question2").html(htmlString);
//       },
//     });
//   });
  
// });