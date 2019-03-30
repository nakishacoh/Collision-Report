<?php
include '../header.php';

?>
<!-- Form for the other person involved -->
<div class= "col-lg-6 col-sm-12">
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
<div  class= "col-lg-6 col-sm-12">
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
<div  class= "col-lg-6 col-sm-12">
    <h2>Notes</h2>
    <form class="" action="" method="post">
        <div class="form-group">
            <label for="injuries">List any injuries sustained</label>
            <textarea class="form-control" name= "injuries" id="injuries" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">Continue</button>
    </form>
</div>

<!-- form for confirmation -->
<div  class= "col-lg-6 col-sm-12">
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
<?php
    include '../footer.php';
?>