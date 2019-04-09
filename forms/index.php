<?php
$page_title = "Form";
$page = "form";
include '../header.php';
?>

<div class="formContent">

    <!-- pagination for forms -->
    <nav id="pagination-forms" aria-label="Report Accident Forms">
    <ul class="pagination justify-content-center">
        <!-- <li class="page-item disabled">
            <a class="page-link" id="page-prev" href="#" tabindex="-1" aria-disabled="true">Previous</a>
        </li> -->
        <li class="page-item">
            <a class="page-link" id="page-prev" href="#">
                <i class="fas fa-chevron-left form-i"></i>
            </a>
        </li>
        <li class="page-item active">
            <a class="page-link" id="page-location" href="http://localhost/collision-report/form/">Location</a>
        </li>
        <li class="page-item">
            <a class="page-link" id="page-driver" href="http://localhost/collision-report/forms/#driverForm">Other Driver</a>
        </li>
        <li class="page-item">
            <a class="page-link" id="page-camera" href="http://localhost/collision-report/forms/#cameraForm">Damages</a>
        </li>
        <li class="page-item">
            <a class="page-link" id="page-notes" href="http://localhost/collision-report/forms/#notesForm">Notes</a>
        </li>
        <li class="page-item">
            <a class="page-link" id="page-injuries" href="http://localhost/collision-report/forms/#injuriesForm">Injuries</a>
        </li>
        <li class="page-item">
            <a class="page-link" id="page-confirmation" href="http://localhost/collision-report/forms/#confirmationForm">Confirmation</a>
        </li>
        <li class="page-item">
            <a class="page-link" id="page-next" href="#">
                <i class="fas fa-chevron-right form-i"></i>
            </a>
        </li>
    </ul>
    </nav>

    <div id="forms" class="d-flex justify-content-center">
        <!-- form for location of the incident -->
        <div id="locationForm" class="col-lg-6 col-sm-12">
            <h2>Location of Incident</h2>
            <p>Where did the collision take place?</p>
            <form id="formLocation"  method= "POST">
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control"  name="address"  id= "address" placeholder="e.g. Sesame Street">
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control"  name="city" id="city"  placeholder="e.g. Oakville">
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block" id="locationSubmit">Continue</button>
            </form>
        </div>
    
        <!-- form for the other person involved -->

        <div id="driverForm" class="col-lg-6 col-sm-12">
            <h2>Other Person(s) Involved</h2>
            <form method="POST" id="formDriver">
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control"  name="firstname"  id="firstname" placeholder="e.g. John">
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control"  name="lastname" id="lastname"  placeholder="e.g. Doe">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input  type="tel" name="number" class="form-control" id="number" aria-describedby="phoneNumber" placeholder="e.g. 905-123-4321">
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block" id="driverSubmit">Continue</button>
            </form>
        </div>

        <!-- form for file upload of damages, license, and registration -->
        <div id="cameraForm" class="col-lg-6 col-sm-12">
            <h2>File Upload</h2>
            <p>Upload images of damages to your car and the other person(s) involved plus their license and registration.</p>
            <form method="POST" id="formCamera" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block" id="cameraSubmit">Continue</button>
            </form>
        </div>

        <!-- form for additional notes -->
        <div id="notesForm" class="col-lg-6 col-sm-12">
            <h2>Notes</h2>
            <form method="POST" id="formNotes">
                <div class="form-group">
                    <label for="notes">Notes</label>
                    <textarea class="form-control" name="notes" id="notes" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="form-group col-2.5 ">
                            <label for="date">Date</label>
                            <input type="date" name= "date" class="form-control"  id="date" rows="3">
                        </div>
                    </div>
                </div>
                <div class= "form-group">
                    <div class="form-row">
                        <div class="form-group col-3 ">
                            <label for="time">Time</label>
                            <input type="time"  name="time" class="form-control" id="time" rows="3">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block" id="notesSubmit">Continue</button>
            </form>
        </div>

        <!-- form for listing the injuries sustained -->
        <div id="injuriesForm" class="col-lg-6 col-sm-12">
            <h2>Injuries</h2>
            <form method="POST" id="formInjuries">
                <div class="form-group">
                    <label for="injuries">List any injuries sustained</label>
                    <textarea class="form-control" name="injuries" id="injuries" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block" id="injuriesSubmit">Continue</button>
            </form>
        </div>

        <!-- form for confirmation -->
        <div id="confirmationForm" class="col-lg-6 col-sm-12">
            <h2>Confirmation</h2>
            <p>Please create an account for easy access to your form.</p>
            <form id="formConfirmation" method="POST">
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" name="firstname" id="fname" placeholder="e.g. John">
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control"  name="lastname" id="lname" placeholder="e.g. Doe">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" aria-describedby="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block" id="confirmationSubmit">Create Account</button>
            </form>
        </div>

    </div>

</div>

<?php
include '../footer.php';
?>
