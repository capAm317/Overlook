$(document).ready(function(){

	$.ajax({

        type: 'GET',
        url: '../controller/gethandler.php',
        data: {'type': 'reports'},
        dataType: "html",
        success: function(dataR){
            //alert();
            $('#repBod').html(dataR);
        },
        error: function(dataR){
        	console.log(dataR);
        },

    });

    $.ajax({

        type: 'GET',
        url: '../controller/gethandler.php',
        data: {'type': 'totalRep'},
        dataType: "html",
        success: function(dataR){
            //alert();
            $('#idtotalinc').html(dataR);
        },
        error: function(dataR){
        	console.log(dataR);
        },

    });

});