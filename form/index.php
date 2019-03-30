<?php
include '../header.php';
?>

<!-- Big container -->
<div class="container form">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <!-- Wizard container -->
            <div class="wizard-container">

                <div class="card wizard-card" data-color="blue" id="wizardProfile">
                    <form action="" method="">

                        <!-- Header -->
                        <div class="wizard-header text-center">
                            <h3 class="wizard-title">Report an accident</h3>
                        </div>

                        <!-- Navigation -->
                        <div class="wizard-navigation">
                            <div class="progress-with-circle">
                                <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="4" style="width: 25%;"></div>
                            </div>
                            <ul>
                                <li>
                                    <a href="#driver" data-toggle="tab">
                                        <div class="icon-circle">
                                            <i class="ti-user"></i>
                                        </div>
                                        Driver
                                    </a>
                                </li>
                                <li>
                                    <a href="#notes" data-toggle="tab">
                                        <div class="icon-circle">
                                            <i class="ti-settings"></i>
                                        </div>
                                        Notes
                                    </a>
                                </li>
                                <li>
                                    <a href="#injuries" data-toggle="tab">
                                        <div class="icon-circle">
                                            <i class="ti-map"></i>
                                        </div>
                                        Injuries
                                    </a>
                                </li>
                                <li>
                                    <a href="#confirmation" data-toggle="tab">
                                        <div class="icon-circle">
                                            <i class="ti-map"></i>
                                        </div>
                                        Confirmation
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Content -->
                        <div class="tab-content">
                            <!-- Form for the other person involved -->
                            <div class="tab-pane" id="driver">
                                <h5 class="info-text">Other Person(s) Involved</h5>
                                <div class="form-group">
                                    <label for="firstName">First Name</label>
                                    <input type="text" class="form-control"  name="firstname" id="firstname" placeholder="e.g. John">
                                </div>
                                <div class="form-group">
                                    <label for="lastName">Last Name</label>
                                    <input type="text" class="form-control"  name="lastname" id="lastname" placeholder="e.g. Doe">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="phone" name= "phone" class="form-control" id="phone" aria-describedby="phoneNumber" placeholder="e.g. 905-123-4321">
                                </div>
                            </div>
                            <!-- Form for additional notes -->
                            <div class="tab-pane" id="notes">
                                <h5 class="info-text">Notes</h5>
                                <div class="form-group">
                                    <label for="notes">Notes</label>
                                    <textarea class="form-control" name= "notes" id="notes" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="form-group col-3">
                                            <label for="date">Date</label>
                                            <input type="date" name= "date" class="form-control"  id="date" rows="3">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="form-group col-3">
                                            <label for="time">Time</label>
                                            <input type="time"  name= "time" class="form-control" id="time" rows="3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Form for listing the injuries sustained -->
                            <div class="tab-pane" id="injuries">
                                <h5 class="info-text">Injuries</h5>
                                <div class="form-group">
                                    <label for="injuries">List any injuries sustained</label>
                                    <textarea class="form-control" name= "injuries" id="injuries" rows="3"></textarea>
                                </div>
                            </div>
                            <!-- Form for confirmation -->
                            <div class="tab-pane" id="confirmation">
                                <h5 class="info-text">Confirmation</h5>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" name= "email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="e.g. johndoe@email.com">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name= "password" class="form-control" id="password" aria-describedby="password" placeholder="e.g. @1Sif$7po">
                                </div>
                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="wizard-footer">
                            <div class="pull-right">
                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='Next' />
                                <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd' name='finish' value='Finish' />
                            </div>

                            <div class="pull-left">
                                <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!--  Plugin for the Wizard -->
<script src="http://localhost/webdev/Collision-Report/js/demo.js" type="text/javascript"></script>
<script src="http://localhost/webdev/Collision-Report/js/paper-bootstrap-wizard.js" type="text/javascript"></script>

<?php
    include '../footer.php';
?>
