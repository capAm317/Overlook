$("document").ready(function(){

    /*

    ALL SEARCH.JS 

    Is used for all of the Main pages of each module
    1. is used for the checkin
    2. is used for the orderamenities
    3. is used for the checkout

    All will just display the information of the user of all bookers from current date onwards

    It differs from the buttons beside the information of the users
    1. will have a check and x
    2. will have only a check
    3. will have an x button

    All values searched must be in the format

    Datebooked-o-idnumber

    */

    $.ajax({

        type: 'GET',
        url: '../controller/gethandler.php',
        data: {'type': 'bookin', 'page': 'check'},
        dataType: "html",
        success: function(dataR){
            $('#guests').html(dataR);
            funcOnload();
        },
        error: function(dataR){
            console.log(dataR);
        },

    });


    $('#checkinidForm').submit(function(e){

        e.preventDefault();

        //var formdata = $(this).serialize() + "&" + $.param(data);

        var value=$.trim($("#bookingid").val());
        var textD = $("#bookingid").val();
        var splitter = textD.split("-");

        //alert(splitter[2]);

        var formdata = {
            'type' : 'booker',
            'nmebookingid' : splitter[2]
        };

        if(value.length==0){
            $.ajax({

                type: 'GET',
                url: '../controller/gethandler.php',
                data: {'type': 'bookin', 'page': 'check'},
                dataType: "html",
                success: function(dataR){
                    $('#guests').html(dataR);
                    funcOnload();
                },
                error: function(dataR){
                    console.log(dataR);
                },

            });
        }

        else{
            $.ajax({
                type: 'GET',
                url: '../controller/gethandler.php',
                data: formdata,
                dataType: "json",
                success: function(data){

                    if(data.nme != "Zero" && data.stat == null && data.stat != "out" && data.stat != "checked"){
                        $('#guests').html("");
                        $('#guests').html("<tr id='guestRow'></tr>");
                        $('#guestRow').html("");

                        var total = "<td>" + data.bkId + "</td>" + "<td>" + data.nme + "</td>";
                        total += "<td>" + data.cntc + "</td>";
                        total += "<td>" + data.type + "</td>";
                        total += "<td>" + data.pax + " pax "+ data.pltype + " Pool " + data.tme + " " + data.rttype +  " Package</td>";
                        total += "<td>" + data.chckin + "</td>";
                        total += "<td><button type='button' class='btn btn-success' value=" + data.id + "><span class='fa fa-check'></span></button>";
                        total += "<td><button type='button' class='btn btn-danger' value=" + data.id + "><span class='fa fa-close'></span></button>";
                        $('#guestRow').html(total);

                        funcOnload();
                    }

                    else if(data.nme == "Zero"){
                        $('#guests').html("");
                        $('#guests').html("<tr id='guestRow'></tr>");
                        $('#guestRow').html("");
                        $('#guestRow').html("<td>No Booking Found</td>");
                    }
                    else {
                        $('#guests').html("");
                        $('#guests').html("<tr id='guestRow'></tr>");
                        $('#guestRow').html("");
                        $('#guestRow').html("<td>No Booking Found</td>");
                    }


                },
                error: function(data){
                    alert("hello");
                    console.log(data.nme);
                }
            });
        } 

    });
    
});

function funcOnload(){
    $('.btn-success').on('click', function(){
        var user = $(this).attr('value');
        window.location ='fdcheckinredirect.php?user=' + user;
    });
}