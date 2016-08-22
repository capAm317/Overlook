$("document").ready(function(){

    $.ajax({

        type: 'GET',
        url: '../controller/gethandler.php',
        data: {'type': 'bookin', 'page' : 'order'},
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
                data: {'type': 'bookin', 'page' : 'order'},
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

                    if(data.nme != "Zero" && data.stat != null && data.stat != "out"){
                        $('#guests').html("");
                        $('#guests').html("<tr id='guestRow'></tr>");
                        $('#guestRow').html("");

                        var total = "<td>" + data.bkId + "</td>" + "<td>" + data.nme + "</td>";
                        total += "<td>" + data.cntc + "</td>";
                        total += "<td>" + data.type + "</td>";
                        total += "<td>" + data.pax + " pax "+ data.pltype + " Pool " + data.tme + " " + data.rttype +  " Package</td>";
                        total += "<td>" + data.chckin + "</td>";
                        total += "<td><button type='button' class='btn btn-success' value=" + data.id + "><span class='fa fa-check'></span></button>";
                        $('#guestRow').html(total);

                        funcOnload();
                    }

                    else if(data.nme == "Zero"){
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
        window.location ='fdorderamenitiesredirect.php?user=' + user;
    });
}