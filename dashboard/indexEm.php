<!DOCTYPE html>
<html id="html">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Employee Dashboard</title>
  <!-- <link rel="stylesheet" type="text/css" href="http://cohennak.dev.fast.sheridanc.on.ca/Collision-Report/dashboard/css/style.css"> -->
  <link rel = "stylesheet" href ="http://cohennak.dev.fast.sheridanc.on.ca/Collision-Report/css/main.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<body id="body">
  <!-- <div id="wrapper"> -->
    <!-- Desktop Navigation -->
      <div class="nav flex-column nav-pills dash navBack" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <span class="navbar-brand mb-0"><h2 class="alignTitle">Collision Report</h2></span>
        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Accidents</a>
        <a class="nav-link nav-child" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Account</a>
        <a class="nav-link logout nav-child" id="#logout"  data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Logout</a>
      </div>

      <!-- Mobile Nav -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light" id="mobileNav">
      <h2>Collision Report</h2>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Accidents</a>
        <a class="nav-link nav-child" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Account</a>
        <a class="nav-link logout nav-child" id="#logout"  data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Logout</a>
        </div>
      </nav>
    <!-- End of Navigation -->



  <div class="tab-content content" id="v-pills-tabContent" role="tabpanel">

    <!-- Accidents Tab -->
    <!-- <h2 class="hTitle">Home</h2> -->
    <div class="tab-pane active table-responsive" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-settings-tab">
      <h1 class="hTitle">Accidents</h1>

      <ul class="nav nav-tabs d-flex justify-content-between">
        <li class="active"><a data-toggle="tab" href="#pendingReport">Pending Reports</a></li>
        <li><a data-toggle="tab" href="#menu1">Approved</a></li>
        <li><a data-toggle="tab" href="#menu2">Declined</a></li>
      </ul>

    <div class="tab-content">

      <!-- Pending Reports -->
      <div id="pendingReport" class="tab-pane fade in">
        <table class="table table-bordered tab-pane active tabHeadings">
          <thead>
            <tr>
              <th scope="col">Report ID</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Location</th>
              <th scope="col">Status</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>Upper Middle Road and Trafalgar Road, Oakville</td>
              <td>Pending</td>
              <td> <button type="button" class="btn btn-primary">View</button></td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Approved Reports -->
      <div id="menu1" class="tab-pane fade">
        <table class="table table-bordered tab-pane show tabHeadings">
          <thead>
            <tr>
              <th scope="col">Report ID</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Location</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>Upper Middle Road and Trafalgar Road, Oakville</td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Declined Reports -->
      <div id="menu2" class="tab-pane fade">
        <table class="table table-bordered tab-pane fade show tabHeadings">
          <thead>
            <tr>
              <th scope="col">Report ID</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Location</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>Upper Middle Road and Trafalgar Road, Oakville</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    </div>
    <!-- End of Accidents Tab -->

      <!-- Account Page -->
      <div class="tab-pane fade " id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
        <h1 class="hTitle">Account Settings</h1>

        <table id="" class="table tab-pane fade show ">

        <tbody class="acctInfo ">
          <!-- Name Column -->
          <tr>
            <th scope="row">Name</th>
            <!-- <td>Mark</td> -->
            <!-- <td>Otto</td> -->
            <td> Joanne Day</td>
            <td> <button type="button" class="btn btn-primary">Edit</button></td>
          </tr>

           <!-- Insurance Column -->
           <tr>
            <th scope="row">Insurance</th>
            <!-- <td>Mark</td> -->
            <!-- <td>Otto</td> -->
            <td>State Farm</td>
            <td> <button type="button" class="btn btn-primary">Edit</button></td>
          </tr>

           <!-- Email Column -->
           <tr>
            <th scope="row">Email</th>
            <!-- <td>Mark</td> -->
            <!-- <td>Otto</td> -->
            <td>jd@gmail.com</td>
            <td> <button type="button" class="btn btn-primary">Edit</button></td>
          </tr>

           <!-- Phone Number Column -->
           <tr>
            <th scope="row">Phone Number</th>
            <!-- <td>Mark</td> -->
            <!-- <td>Otto</td> -->
            <td>555-555-5555</td>
            <td> <button type="button" class="btn btn-primary">Edit</button></td>
          </tr>
        </tbody>
        </table>

      </div>

    </div>

  </div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="http://cohennak.dev.fast.sheridanc.on.ca/Collision-Report/dashboard/script/script.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>
