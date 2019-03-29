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
  <!-- Navigation -->
    <div class="nav flex-column nav-pills dash navBack" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <span class="navbar-brand mb-0"><h3 class="alignTitle">Collision-Report</h3></span>
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Report Accident</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Account</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Contact</a>
      <a class="nav-link logout"  data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Logout</a>
  </div>
<!-- End of Navigation -->


<!-- Home Page -->
<div class="tab-content content" id="v-pills-tabContent">

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
        </table>
  </div>

  <!-- Contact Page -->
  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
    <div  id = "contact" class="bg">
        <!-- <div class="container"> -->
            <div class = "d-flex flex-wrap">
                <div class = "col-lg-6 col-sm-12 contact-bkg" >
                    <h2>Contact</h2>
                    <p>Get in touch by sending a message or calling us at the location closest to you </p>
                    <a href="#location"><button class = "btn-primary btn-lg">Find Location</button></a>
                </div>

                <div class= "col-lg-6 col-sm-12 formCol">
                    <form action="processes/processing-contact.php" method="POST">
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control"  name="firstname" id="firstname" placeholder="ie.John">
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control"  name="lastname" id="lastname" placeholder="ie.Doe">
                            </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" name= "email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" name= "message" id="message" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Send Message</button>
                    </form>
                </div>
            <!-- </div>  -->
        </div>
    </div>
  </div>
</div>


</body>
<script src="script/script.js"></script>
</html>
