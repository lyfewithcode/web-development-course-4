// for syntax class

/*
$(document).ready(function() {
    // $("p:first-child").hide(5000);
    $("p").click(function() {

        $(this).hide(2000);
    
    });
});
*/

// $ - it is used to access jquery
// selector - html selector
// action

// for selector class, starting here

$(document).ready(function() {
    // $("p:first-child").hide(5000);
    $("h1").click(function() {

        $(this).hide(2000);
    
    });

    $(".first-paragraph").hide(1000);
    $("#me").hide(1000);
});