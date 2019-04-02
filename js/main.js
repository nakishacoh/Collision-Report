$( document ).ready(function() {
    console.log("connected");

    // pagination of forms
    var driverBtn;
    var notesBtn;
    var injuriesBtn;
    var confirmationBtn;

    driverBtn= $("#page-driver");
    if (driverBtn) { 
        driverBtn.click(function(){
            $("#driverForm").show();
            $("#notesForm").hide();
            $("#injuriesForm").hide();
            $("#confirmationForm").hide();
        console.log("driver")
        })
    }

    notesBtn= $("#page-notes");
    if (notesBtn) { 
        notesBtn.click(function(){
            $("#notesForm").show();
            $("#driverForm").hide();
            $("#injuriesForm").hide();
            $("#confirmationForm").hide();
            console.log("notes")

        })
    }

    injuriesBtn= $("#page-injuries");
    if (injuriesBtn) { 
        injuriesBtn.click(function(){
            $("#injuriesForm").show();
            $("#notesForm").hide();
            $("#driverForm").hide();
            $("#confirmationForm").hide();
            console.log("injury")

        })
    }

    confirmationBtn= $("#page-confirmation");
    if (confirmationBtn) { 
        confirmationBtn.click(function(){
            $("#confirmationForm").show();
            $("#notesForm").hide();
            $("#driverForm").hide();
            $("#injuriesForm").hide();
            console.log("confirm")

        })
    }


})
