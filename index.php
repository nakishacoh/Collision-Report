<?php

$page_title = "Home";
$page = "home";

include 'header.php';

?>


<!-- Home -->
<div  class = "bg" id="home">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center" id="home-info">
                <div id="home-content">
                    <h1 class= "display-1">LOGO</h1>
                    <h3>A bit of information about the site</h3>
                </div>
                <div id= "button-container" class="row  justify-content-center">
                    <div class="col-lg-4 col-md-12 col-sm-12" >
                        <a href= "http://localhost/Collision-Report/forms">
                            <button type="button" class="btn btn-primary btn-lg btn-block ">
                                REPORT AN ACCIDENT
                            </button>
                        </a>
                    </div>
                    <div class= "col-lg-4 col-md-12 col-sm-12">
                        <a href= "http://localhost/Collision-Report/signIn">
                            <button type="button" class="btn btn-primary btn-lg btn-block">
                                SIGN IN
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<!-- About -->
<div id = "about" class="container">
    <div class= "row">
        <div class= "col text-center">
            <h2>About</h2>
            <p>
                Logo understands how stressful filing a collision report report can be. Our goal is to
                make that process easier and more accessible for everyone.
            </p>
        </div>
    </div>
</div>


<!-- Contact -->
<div  id="contact" class="bg">
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
                        <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Send Message</button>
                </form>
            </div>
        </div>
    <!-- </div> -->
</div>

<!-- Location -->
<!-- <div class="container justify-content-center" id="home">
    <h2>Find the closet collision center</h2>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
    </form>
    <div>
    </div>
</div> -->

<?php

include 'footer.php';

?>
