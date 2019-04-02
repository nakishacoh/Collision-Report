<?php
include '../header.php';

?>

<div class= "formContent">
    <!-- Form for the other person involved -->
    <div id = "forms" class = "d-flex justify-content-center">
        <div id= "driverForm" class= "col-lg-6 col-sm-12">
            <h2>Other Person(s) Involved</h2>
            <form class="" action="" method="post">
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control"  name="firstname" id="firstname" placeholder="ie.John">
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control"  name="lastname" id="lastname" placeholder="ie.Doe">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="phone" name= "phone" class="form-control" id="phone" aria-describedby="phoneNumber" placeholder="ie.905-123-4321">
                </div> 
                <button type="submit" class="btn btn-primary btn-lg btn-block">Continue</button>
            </form>
        </div>

        <!-- form for additional notes -->
        <div id= "notesForm" class= "col-lg-6 col-sm-12">
            <h2>Notes</h2>
            <form class="" action="" method="post">
                <div class="form-group">
                    <label for="notes">Notes</label>
                    <textarea class="form-control" name= "notes" id="notes" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <div class= "form-row">
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
                            <input type="time"  name= "time" class="form-control" id="time" rows="3">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Continue</button>
            </form>
        </div>

        <!-- Form for listing the injuries sustained -->
        <div id="injuriesForm" class= "col-lg-6 col-sm-12">
            <h2>Injuries</h2>
            <form class="" action="" method="post">
                <div class="form-group">
                    <label for="injuries">List any injuries sustained</label>
                    <textarea class="form-control" name= "injuries" id="injuries" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Continue</button>
            </form>
        </div>

        <!-- form for confirmation -->
        <div id="confirmationForm" class= "col-lg-6 col-sm-12">
            <h2>Confirmation</h2>
            <form>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name= "email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name= "password" class="form-control" id="password" aria-describedby="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Continue</button>
            </form>
        </div>
    </div>

    <!-- pagination for forms -->

    <nav id = "paginationForms">
    <ul class="pagination justify-content-center">
        <!-- <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
        </li> -->
        <li class="page-item "><a class="page-link" id="page-driver" href="http://localhost/Collision-Report/forms/">Other Driver</a></li>
        <li class="page-item"><a class="page-link" id="page-notes" href="http://localhost/Collision-Report/forms/#notesForm">Notes</a></li>
        <li class="page-item"><a class="page-link" id= "page-injuries" href="http://localhost/Collision-Report/forms/#injuriesForm">Injuries</a></li>
        <li class="page-item"><a class="page-link" id= "page-confirmation" href="http://localhost/Collision-Report/forms/#confirmationForm">Confirmation</a></li>
        <!-- <li class="page-item"><a class="page-link" href="#">5</a></li> -->

        <!-- <li class="page-item">
        <a class="page-link" href="#">Next</a>
        </li> -->
    </ul>
    </nav>
</div>
<?php
    include '../footer.php';
?>