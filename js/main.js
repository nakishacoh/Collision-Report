
$( document ).ready(function() {
    console.log("connected");

    // pagination of forms
    var driverBtn;
    var notesBtn;
    var injuriesBtn;
    var confirmationBtn;

    // changing which form shows
    driverBtn=$("#page-driver");
    if (driverBtn) {
        driverBtn.click(function(){
            $("#driverForm").show();
            $("#notesForm").hide();
            $("#injuriesForm").hide();
            $("#confirmationForm").hide();
            console.log("driver")
        })
    }

    notesBtn=$("#page-notes");
    if (notesBtn) {
        notesBtn.click(function(){
            $("#notesForm").show();
            $("#driverForm").hide();
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

var formDriver= document.getElementById("formDriver");
var driverSubmitBtn = document.getElementById("driverSubmit")
    if (driverSubmitBtn){
        driverSubmitBtn.addEventListener("click",  formDriverFunction, false );
    };    
    function formDriverFunction(e){
        e.preventDefault();
        var myRequest = new XMLHttpRequest; 
    
        myRequest.onreadystatechange = function(){
            if(myRequest.readyState === 4){
                // console.log(myRequest.responseText);
                // var process = JSON.parse(myRequest.responseText);
            }
        };
        var firstname = document.getElementById("firstname");
        var lastname = document.getElementById("lastname");
        var number = document.getElementById("number");
        
        myRequest.open("POST", "http://localhost/collision-report/form/processes/processing-otherDriver.php", true); //true means it is asynchronous // Send urls through the url
        myRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded"); 
        myRequest.send("firstname=" + firstname.value + 
                        "&lastname=" + lastname.value +
                        "&number="+ number.value); 
    };



var formNotes= document.getElementById("formNotes");
var notesSubmitBtn = document.getElementById("notesSubmit")
    if (notesSubmitBtn){
        notesSubmitBtn.addEventListener("click",  formNotesFunction, false );
    };    
    function formNotesFunction(e){
        e.preventDefault();
        var myRequest = new XMLHttpRequest; 
    
        myRequest.onreadystatechange = function(){
            if(myRequest.readyState === 4){
                // console.log(myRequest.responseText);
                // var process = JSON.parse(myRequest.responseText);
            }
        };
        var notes = document.getElementById("notes");
        var date = document.getElementById("date");
        var time = document.getElementById("time");
        
        myRequest.open("POST", "http://localhost/collision-report/form/processes/processing-notes.php", true); //true means it is asynchronous // Send urls through the url
        myRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded"); 
        myRequest.send("notes=" + notes.value + 
                        "&date=" + date.value +
                        "&time="+ time.value); 
    };

    var formInjuries= document.getElementById("formInjuries");
    var injuriesSubmitBtn = document.getElementById("injuriesSubmit")
        if (injuriesSubmitBtn){
            injuriesSubmitBtn.addEventListener("click",  formInjuriesFunction, false );
        };    
        function formInjuriesFunction(e){
            e.preventDefault();
            var myRequest = new XMLHttpRequest; 
        
            myRequest.onreadystatechange = function(){
                if(myRequest.readyState === 4){
                    // console.log(myRequest.responseText);
                    // var process = JSON.parse(myRequest.responseText);
                }
            };
            var injuries = document.getElementById("injuries");
            
            myRequest.open("POST", "http://localhost/collision-report/form/processes/processing-injuries.php", true); //true means it is asynchronous // Send urls through the url
            myRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded"); 
            myRequest.send("injuries=" + injuries.value); 
        };
    
        var formConfirmation= document.getElementById("formConfirmation");
        var confirmationSubmitBtn = document.getElementById("confirmationSubmit")
            if (confirmationSubmitBtn){
                confirmationSubmitBtn.addEventListener("click",  formConfirmationFunction, false );
            };    
            function formConfirmationFunction(e){
                e.preventDefault();
                var myRequest = new XMLHttpRequest; 
            
                myRequest.onreadystatechange = function(){
                    if(myRequest.readyState === 4){
                        // console.log(myRequest.responseText);
                        // var process = JSON.parse(myRequest.responseText);
                    }
                };
                var firstname = document.getElementById("firstname");
                var lastname = document.getElementById("lastname");
                var email = document.getElementById("email");
                var password= document.getElementById("password");
                
                myRequest.open("POST", "http://localhost/collision-report/form/processes/processing-confirmation.php", true); //true means it is asynchronous // Send urls through the url
                myRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded"); 
                myRequest.send("firstname=" + firstname.value + 
                                "&lastname=" + lastname.value +
                                "&email=" + email.value +
                                "&password="+ password.value); 

            };
        