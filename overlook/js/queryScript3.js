$("document").ready(function(){

    $.ajax({
        type: 'GET',
        url: '../controller/gethandler.php',
        data: {'type' : 'amenities'},
        dataType: 'html',
        success: function(html){
            $("#iditem").html(html);
        },
        error: function(html){
            console.log(html);
        }
    });

    var query = window.location.search;
    // Skip the leading ?, which should always be there, 
    // but be careful anyway
    if (query.substring(0, 1) == '?') {
        query = query.substring(1);
    }

    var data = query.slice(5);
    $('#user').val(data);

    $.ajax({
        type: 'GET',
        url: '../controller/gethandler.php',
        data: {'nmebookingid': data, 'type': 'booker'},
        dataType: "json",
        success: function(data){

            if(data.nme != "Zero"){
                $('#guestRow').html("");

                var total = "<td>" + data.nme + "</td>";
                total += "<td>" + data.cntc + "</td>";
                total += "<td>" + data.type + "</td>";
                total += "<td>" + data.pax + " pax "+ data.pltype + " Pool " + data.tme + " " + data.rttype +  " Package</td>";
                total += "<td>" + data.chckin + "</td>";
                $('#guestRow').html(total);

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

});
