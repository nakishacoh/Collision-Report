<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="nav flex-column nav-pills dash navBack" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <span class="navbar-brand mb-0"><h3 class="alignTitle">Collision-Report</h3></span>
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Report Accident</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Account</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Contact</a>
      <a class="nav-link logout" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Logout</a>
  </div>



<!-- Home Page -->
<div class="tab-content content rounded" id="v-pills-tabContent ">

  <table class="table table-bordered tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
    <thead>
      <tr>
        <th scope="col">Report ID</th>
        <!-- <th scope="col">First</th> -->
        <!-- <th scope="col">Last</th> -->
        <th scope="col">Location</th>
        <th scope="col">Status</th>
        <th scope="col">Edit</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <!-- <td>Mark</td> -->
        <!-- <td>Otto</td> -->
        <td>Upper Middle Road and Trafalgar Road, Oakville</td>
        <td>Pending</td>
        <td> <button type="button" class="btn btn-primary">Edit</button></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <!-- <td>Jacob</td> -->
        <!-- <td>Thornton</td> -->
        <td>Upper Middle Road and Trafalgar Road, Oakville</td>
        <td>Pending</td>
        <td> <button type="button" class="btn btn-primary">Edit</button></td>
      </tr>
    </tbody>
  </table>

  <!-- Report Accident Page -->
  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>

  <!-- Account Page -->
  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
    <h3>General Account Settings</h3>

    <table id="vertical-2">
               <thead>
                   <tr>
                       <th colspan="3">Name</th>
                   </tr>
                   <tr>
                       <th colspan="3">Insurance</th>
                   </tr>
                   <tr>
                       <th colspan="3">Email</th>
                   </tr>
                   <tr>
                       <th colspan="3">Phone Number</th>
                   </tr>
               </thead>
               <tbody>
                   <tr>
                       <td>row 1</td>
                       <td><button type="button" class="btn btn-primary">Edit</button></td>
                   </tr>
                   <tr>
                       <td>PDF</td>
                       <td><button type="button" class="btn btn-primary">Edit</button></td>

                   </tr>
                   <tr>
                       <td>data</td>
                       <td><button type="button" class="btn btn-primary">Edit</button></td>
                   </tr>
                   <tr>
                       <td>data</td>
                       <td><button type="button" class="btn btn-primary">Edit</button></td>
                   </tr>
                   <tr>
                       <td>data</td>
                       <td><button type="button" class="btn btn-primary">Edit</button></td>
                   </tr>
               </tbody>
  </div>

  <!-- Contact Page -->
  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
</div>


</body>
<script src="script/script.js"></script>
</html>
