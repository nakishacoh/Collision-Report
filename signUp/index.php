<?php
include '../header.php';
?>
        <!-- form for user login -->
        <div id="signUpForm" class="userForm formContent  col-lg-6 col-sm-12">
            <h2>Sign Up</h2>
            <form  action= "processes/processing-usersignup.php" method="POST">
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control"  name="firstname" id="firstname" placeholder="e.g. John">
                </div>
                <div class="form-group">
                    <label for="lastName">First Name</label>
                    <input type="text" class="form-control"  name="lastname" id="lastname" placeholder="e.g. Doe">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" aria-describedby="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Continue</button>
            </form>
            <p>Already have an account? <a href = "http://localhost/Collision-Report/signIn">Sign In</a></p>
        </div>

<?php
include '../footer.php';
?>