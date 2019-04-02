<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="http://li96.dev.fast.sheridanc.on.ca/Collision-Report/css/paper-bootstrap-wizard/paper-bootstrap-wizard.css">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel = "stylesheet" href ="Collision-Report/css/main.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<body>
  <!-- Navigation -->
    <div class="nav flex-column nav-pills dash navBack" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <span class="navbar-brand mb-0"><h2 class="alignTitle">Collision Report</h2></span>
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
      <a class="nav-link nav-child" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Report Accident</a>
      <a class="nav-link nav-child" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Account</a>
      <a class="nav-link nav-child" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Contact</a>
      <a class="nav-link logout nav-child" id="#logout"  data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Logout</a>
  </div>
<!-- End of Navigation -->



<div class="tab-content content" id="v-pills-tabContent" role="tabpanel">

<!-- Home Page -->
<!-- <h2 class="hTitle">Home</h2> -->
<div class="tab-pane active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-settings-tab">
  <h1 class="hTitle">Home</h1>

  <table class="table table-bordered tab-pane fade show">
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
    </tbody>
  </table>
</div>

  <!-- Report Accident Page -->
  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>

  <!-- Account Page -->
  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
    <h1 class="hTitle">General Account Settings</h1>

    <table id="vertical-2 formCols">
               <div class="row">
                 <div class="col-6 col-sm-3"><label for="firstName">Name</label></div>
                 <div class="col-6 col-sm-3">Joanne Day</div>
                 <button type="button" class="btn btn-primary">Edit</button>

                 <!-- Force next columns to break to new line -->
                 <div class="w-100"></div>
                 <div class="col-6 col-sm-3"><label for="firstName">Insurance</label></div>
                 <div class="col-6 col-sm-3">State Farm</div>
                 <button type="button" class="btn btn-primary">Edit</button>

                 <div class="w-100"></div>
                 <div class="col-6 col-sm-3"><label for="firstName">Email</label></div>
                 <div class="col-6 col-sm-3">jd@gmail.com</div>
                 <button type="button" class="btn btn-primary">Edit</button>

                 <div class="w-100"></div>
                 <div class="col-6 col-sm-3"><label for="firstName">Phone Number</label></div>
                 <div class="col-6 col-sm-3">555555555</div>
                 <button type="button" class="btn btn-primary">Edit</button>
               </div>
        </table>

  </div>

  <!-- Contact Page -->
  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
    <!-- <div  id = "contact" class="bg"> -->
            <div class = "d-flex flex-wrap">
                <div class = "col-lg-6 col-sm-12 contact-bkg" >
                    <h1>Contact</h1>
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
                        <button type="submit" class="btn-primary btn-lg">Send Message</button>
                    </form>
                </div>
        </div>
    <!-- </div> -->
  </div>
</div>


</body>
<script src="script/script.js"></script>
</html>
