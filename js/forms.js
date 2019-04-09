$( document ).ready(function() {
    console.log("Forms connected");

    // pagination of forms
    var driverBtn;
    var cameraBtn;
    var notesBtn;
    var injuriesBtn;
    var confirmationBtn;

    // changing which form shows
    driverBtn=$("#page-driver");
    if (driverBtn) {
        driverBtn.click(function(){
            $("#driverForm").show();
            $('#cameraForm').hide();
            $("#notesForm").hide();
            $("#injuriesForm").hide();
            $("#confirmationForm").hide();
            console.log("driver")
        })
    }

    cameraBtn=$("#page-camera");
    if (cameraBtn) {
        cameraBtn.click(function(){
            $('#cameraForm').show();
            $("#driverForm").hide();
            $("#notesForm").hide();
            $("#injuriesForm").hide();
            $("#confirmationForm").hide();
            console.log("camera")
        })
    }

    notesBtn=$("#page-notes");
    if (notesBtn) {
        notesBtn.click(function(){
            $("#notesForm").show();
            $("#driverForm").hide();
            $('#cameraForm').hide();
            $("#injuriesForm").hide();
            $("#confirmationForm").hide();
            console.log("notes")
        })
    }

    injuriesBtn=$("#page-injuries");
    if (injuriesBtn) {
        injuriesBtn.click(function(){
            $("#injuriesForm").show();
            $("#notesForm").hide();
            $("#driverForm").hide();
            $('#cameraForm').hide();
            $("#confirmationForm").hide();
            console.log("injuries")
        })
    }

    confirmationBtn=$("#page-confirmation");
    if (confirmationBtn) {
        confirmationBtn.click(function(){
            $("#confirmationForm").show();
            $("#notesForm").hide();
            $("#driverForm").hide();
            $('#cameraForm').hide();
            $("#injuriesForm").hide();
            console.log("confirmation")
        })
    }

    // changing active state
    $("#pagination-forms li a").not("#page-prev, #page-next").click(function(e){
        $("#pagination-forms li").removeClass("active");
        var $parent = $(this).parent();
        $parent.addClass("active");
        e.preventDefault();
    })

    // previous and next buttons
    var liActive=$("#pagination-forms li.active");
    var prevBtn=$("#page-prev");
    var nextBtn=$("#page-next");

    // if (prevBtn) {
    //     prevBtn.click(function(){
    //         $("#pagination-forms li.active").prev("li").find("a").trigger("click");
    //     })
    // }
    //
    // if (nextBtn) {
    //     nextBtn.click(function(){
    //         $("#pagination-forms li.active").next("li").find("a").trigger("click");
    //     })
    // }

    prevBtn.click(function(){
        $("#pagination-forms li.active").prev("li").find("a").trigger("click");
    })

    nextBtn.click(function(){
        $("#pagination-forms li.active").next("li").find("a").trigger("click");
    })

})

// change which form shows after one section is completed
function changeForm(e){
    $("#pagination-forms li.active").next("li").find("a").trigger("click");
    console.log("nextform")
}

// submitting other driver form
var driverSubmitBtn = document.getElementById("driverSubmit")
// if the button is clicked run the function
if (driverSubmitBtn){
    driverSubmitBtn.addEventListener("click",  formDriverFunction, false);
};
function formDriverFunction(e){
    // prevent form from submitting automatically
    e.preventDefault();
    // connecting
    var myRequest = new XMLHttpRequest;
    myRequest.onreadystatechange = function(){
        if(myRequest.readyState === 4){}
    };
    // grab inputs from form
    var firstname = document.getElementById("firstname");
    var lastname = document.getElementById("lastname");
    var number = document.getElementById("number");
    // send values to the database
    myRequest.open("POST", "http://localhost/collision-report/forms/processes/processing-other-driver.php", true);
    myRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    myRequest.send("firstname="+firstname.value+
                    "&lastname="+lastname.value+
                    "&number="+number.value);
    // switch user to next section of form
    changeForm();
};

// submitting camera form
var cameraSubmitBtn = document.getElementById("cameraSubmit")
// if the button is clicked run the function
if (cameraSubmitBtn){
    cameraSubmitBtn.addEventListener("click",  formCameraFunction, false);
};
function formCameraFunction(e){
    // prevent form from submitting automatically
    e.preventDefault();
    // connecting
    var myRequest = new XMLHttpRequest;
    myRequest.onreadystatechange = function(){
        if(myRequest.readyState === 4){}
    };
    // grab inputs from form
    var image = document.getElementById("image");
    // send values to the database
    myRequest.open("POST", "http://localhost/collision-report/forms/processes/processing-camera.php", true);
    myRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    myRequest.send("image="+image.value);
    // switch user to next section of form
    changeForm();
};

// submitting notes form
var notesSubmitBtn = document.getElementById("notesSubmit")
// if the button is clicked run the function
if (notesSubmitBtn){
    notesSubmitBtn.addEventListener("click",  formNotesFunction, false);
};
function formNotesFunction(e){
    // prevent form from submitting automatically
    e.preventDefault();
    // connecting
    var myRequest = new XMLHttpRequest;
    myRequest.onreadystatechange = function(){
        if(myRequest.readyState === 4){}
    };
    // grab inputs from form
    var notes = document.getElementById("notes");
    var date = document.getElementById("date");
    var time = document.getElementById("time");
    // send values to the database
    myRequest.open("POST", "http://localhost/collision-report/forms/processes/processing-notes.php", true);
    myRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    myRequest.send("notes="+notes.value+
                    "&date="+date.value+
                    "&time="+time.value);
    // switch user to next section of form
    changeForm();
};

// submitting injuries form
var injuriesSubmitBtn = document.getElementById("injuriesSubmit")
// if the button is clicked run the function
if (injuriesSubmitBtn){
    injuriesSubmitBtn.addEventListener("click", formInjuriesFunction, false);
};
function formInjuriesFunction(e){
    // prevent form from submitting automatically
    e.preventDefault();
    // connecting
    var myRequest = new XMLHttpRequest;
    myRequest.onreadystatechange = function(){
        if(myRequest.readyState === 4){}
    };
    // grab inputs from form
    var injuries = document.getElementById("injuries");
    // send values to the database
    myRequest.open("POST", "http://localhost/collision-report/forms/processes/processing-injuries.php", true);
    myRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    myRequest.send("injuries="+injuries.value);
    // switch user to next section of form
    changeForm();
};

// submitting confirmation form
var confirmationSubmitBtn = document.getElementById("confirmationSubmit")
// if the button is clicked run the function
if (confirmationSubmitBtn){
    confirmationSubmitBtn.addEventListener("click",  formConfirmationFunction, false);
};
function formConfirmationFunction(e){
    // prevent form from submitting automatically
    e.preventDefault();
    // connecting
    var myRequest = new XMLHttpRequest;
    myRequest.onreadystatechange = function(){
        if(myRequest.readyState === 4){}
    };
    // grab inputs from form
    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    // send values to the database
    myRequest.open("POST", "http://localhost/collision-report/forms/processes/processing-confirmation.php", true);
    myRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    myRequest.send("firstname="+fname.value+
                    "&lastname="+lname.value+
                    "&email="+email.value+
                    "&password="+password.value);
    // switch user to dashboard after completing form
    window.location.href = "http://localhost/collision-report/dashboard/";
}
