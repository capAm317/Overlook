$("document").ready(function(){

    /*

    ALL QUERYSCRIPT.JS 

    Is used for all of the Redirect page 
    1. is used for the checkinredirect
    2. is used for the orderamenitiesredirect
    3. is used for the checkoutredirect

    All will just display the information of the user

    It differs from the functions
    1. will checkin the user and choose the rooms reserved
    2. will order an amenity
    3. will checkout the user and open the rooms reserved

    */

    //This script is used for the Checkin redirect
        var query = window.location.search;
        // Skip the leading ?, which should always be there, 
        // but be careful anyway
        if (query.substring(0, 1) == '?') {
            query = query.substring(1);
        }

        //This slices the data from the value of user
        var data = query.slice(5);
        var pax;
        $('#user').val(data);

        $.ajax({
            type: 'GET',
            url: '../controller/gethandler.php',
            data: {'nmebookingid': data, 'type': 'booker'},
            dataType: "json",
            success: function(data){

                //This will display the infomation of the user
                if(data.nme != "Zero"){
                    $('#guestRow').html("");

                    var total = "<td>" + data.nme + "</td>";
                    total += "<td>" + data.cntc + "</td>";
                    total += "<td>" + data.type + "</td>";
                    total += "<td>" + data.pax + " pax "+ data.pltype + " Pool " + data.tme + " " + data.rttype +  " Package</td>";
                    total += "<td>" + data.chckin + "</td>";
                    $('#guestRow').html(total);

                    pax = data.pax_pr_rm;
                    var rm_mx = data.rm_pax;

                    $.ajax({

                        type: 'GET',
                        url: '../controller/gethandler.php',
                        data: {'type': 'rooms', 'value': pax},
                        dataType: "html",
                        success: function(data){
                            $('#rooms').html("");
                            $('#rooms').html(data);

                            var $max = rm_mx; //Input Max
                              var $curr = 0;

                              $(".td-room-avail" ).each(function(index) {
                                $(this).on("click", function(){
                                    if($(this).hasClass("room-active")){
                                      $(this).removeClass("room-active");
                                      $curr -= 1;
                                    } else if($curr != $max){
                                      $(this).addClass("room-active");
                                      $curr += 1;
                                    }
                                });
                              });

                              $(".td-room-not-avail" ).each(function(index) {
                                $(this).on("click", function(){
                                    alert("This room is already Reserved");
                                });
                              });
                        },
                        error: function(data){

                        }

                    });

                }

                else if(data.nme == "Zero"){
                    $('#guestRow').html("");
                    $('#guestRow').html("<td>No Booking Found</td>");
                }


            },
            error: function(data){
                console.log(data.nme);
            }
        }); 
    

    //Changes the reservation submit of the pages
    $('#rm_reservation').submit(function(e){

        e.preventDefault();

        var rms = [];

        //Each of the rooms that have been chosen
        $(".td-room-avail" ).each(function(index) {
            if($(this).hasClass("room-active")){
                rms.push($(this).html());
            } 
        });


        //Strinyfys the data
        var rms_data = JSON.stringify(rms)

        var type = {
            'rms_rs': rms_data,
            'type': 'rooms',
            'id': data
        }
        //Adds the data to the admin handler
        $.ajax({

            type: 'POST',
            url: '../controller/adminHandler.php',
            data: type,
            success: function(dataR){
                console.log(dataR);
                $('#replace').html("");
                $('#replace').html("<div class='col-lg-8 col-md-10 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-1 col-sm-offset-1'><div class='box'><div class='box-icon'><span class='fa fa-4x fa-money'></span></div><div class='info'><p>Welcome to Overlook Resort you have successfully reserved your rooms please enjoy your stay here at Overlook Resort</p></div></div></div>");
            },
            error: function(dataR){

            },

        });
    }); 

});
