<?php
include '../header.php';
?>
        <!-- form for user login -->
        <div id="signInForm" class=" userForm formContent col-lg-6 col-sm-12">
            <h2>Sign In</h2>
            <form action="processes/processing-usersignin.php" method="POST">               
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
            <p>Don't have an account? <a href = "http://localhost/Collision-Report/signUp">Sign Up</a></p>
        </div>

<?php
include '../footer.php';
?>