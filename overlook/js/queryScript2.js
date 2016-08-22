$("document").ready(function(){

        var query = window.location.search;
        // Skip the leading ?, which should always be there, 
        // but be careful anyway
        if (query.substring(0, 1) == '?') {
            query = query.substring(1);
        }

        var data = query.slice(5);
        //alert(query);

        $('#user').val(data);

        $('#discnt').change(function(){

            var newVal = $('#totalS').val() - (($(this).val()/100) * $('#totalS').val());

            $('#total').html("");
            $('#total').html(newVal);
        });

        $.ajax({
            type: 'GET',
            url: '../controller/gethandler.php',
            data: {'nmebookingid': data, 'type': 'orders'},
            dataType: "html",
            success: function(data){
                $('#receipt').html("");
                $('#receipt').html(data);

            },
            error: function(data){
                alert("hello");
                console.log(data.nme);
            }
        });

        $.ajax({
            type: 'GET',
            url: '../controller/gethandler.php',
            data: {'nmebookingid': data, 'type': 'total'},
            dataType: "html",
            success: function(data){
                $('#totalbody').html("");
                $('#totalbody').html(data);
                $('#tots').val($('#totalS').val());

            },
            error: function(data){
                alert("hello");
                console.log(data.nme);
            }
        });

        $.ajax({
            type: 'GET',
            url: '../controller/gethandler.php',
            data: {'nmebookingid': data, 'type': 'booker'},
            dataType: "json",
            success: function(data){

                if(data.nme != "Zero"){
                    $('#gs_nme').html(data.nme);
                    $('#gs_cntc').html(data.cntc);
                    $('#gs_type').html(data.type);
                    $('#pckge').html(data.pax + " pax "+ data.pltype + " Pool " + data.tme + " " + data.rttype +  " Package");
                
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


    
});