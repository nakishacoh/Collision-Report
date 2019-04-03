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
