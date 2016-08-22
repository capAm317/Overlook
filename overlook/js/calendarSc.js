$(document).ready(function(){

    //For the Calendar of the Administrator

	$.ajax({

        type: 'GET',
        url: '../controller/gethandler.php',
        data: {'type': 'calendarbooker', 'yr': $('#idydate').val(), 'mth': $('#idmdate').val()},
        dataType: "html",
        success: function(dataR){
            //alert();
            $('#dates').html(dataR);
        },
        error: function(dataR){
        	console.log(dataR);
        },

    });

    $('#idydate').change(function(){
        $.ajax({

            type: 'GET',
            url: '../controller/gethandler.php',
            data: {'type': 'calendarbooker', 'yr': $('#idydate').val(), 'mth': $('#idmdate').val()},
            dataType: "html",
            success: function(dataR){
                //alert();
                $('#dates').html(dataR);
            },
            error: function(dataR){
                console.log(dataR);
            },

        });
    });
    $('#idmdate').change(function(){
        $.ajax({

            type: 'GET',
            url: '../controller/gethandler.php',
            data: {'type': 'calendarbooker', 'yr': $('#idydate').val(), 'mth': $('#idmdate').val()},
            dataType: "html",
            success: function(dataR){
                //alert();
                $('#dates').html(dataR);
            },
            error: function(dataR){
                console.log(dataR);
            },

        });
    });

});