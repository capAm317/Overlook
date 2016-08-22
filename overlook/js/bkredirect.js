$("document").ready(function(){

    //Used by the booking redirect page

    var query = window.location.search;
    // Skip the leading ?, which should always be there, 
    // but be careful anyway
    // this will separate the id value of ?user coming from redirect of the page Booking.php
    if (query.substring(0, 1) == '?') {
        query = query.substring(1);
    }

    var user = query.slice(5); //Getting the value

    //This ajax will get the 50% downpayment that the user will pay
    $.ajax({
        type: 'GET',
        url: 'controller/gethandler.php',
        //This data sent is the user's id and a type that will be evaluated inside the gethandler.php
        data: {'nmebookingid': user, 'type': 'bookerP'},
        dataType: "html",
        success: function(data){
            //If successful this will print the price 
            $('#price').html("");
            $('#price').html(data);

        },
        error: function(data){
            alert("hello");
        }
    }); 

    $.ajax({
        type: 'GET',
        url: 'controller/gethandler.php',
        data: {'nmebookingid': user, 'type': 'booker'},
        dataType: "json",
        success: function(data){
            //This ajax will get the Json Data of the Date that the person booked his/her booking
            var datenew = data.dteBk;
            //This will split the dates based on the "-" sign // you could also search splitting dates in google
            var dateParts = datenew.split("-");
            var formId = dateParts[0] + dateParts[1] + dateParts[2] + "-o-" + user; // Creating the ID Format which is date - o - ID number
            $('#bookingID').html(formId);

        },
        error: function(data){
            alert("hello");
        }
    });
    
});