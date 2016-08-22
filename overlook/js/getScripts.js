$("document").ready(function(){

    $.ajax({
        type: 'GET',
        url: 'controller/gethandler.php',
        data: {'type' : 'packages'},
        dataType: 'html',
        success: function(html){
            $("#idpackage").html(html);
            $("#idpackage").prop('selectedIndex', 0);
            
            $.ajax({
                type: 'GET',
                url: 'controller/gethandler.php',
                //This data sent is the user's id and a type that will be evaluated inside the gethandler.php
                data: {'pckgid': $('#idpackage').val(), 'type': 'bookerP'},
                dataType: 'json',
                success: function(data){
                    //If successful this will print the price 
                    $('#price').val(data.prc*0.5);

                },
                error: function(data){
                    
                    console.log(data);
                }
            });
        },
        error: function(html){
            console.log(html);
        }
    });
        

    $('#idpackage').change(function(){
        

        $.ajax({
                type: 'GET',
                url: 'controller/gethandler.php',
                //This data sent is the user's id and a type that will be evaluated inside the gethandler.php
                data: {'pckgid': $('#idpackage').val(), 'type': 'bookerP'},
                dataType: 'json',
                success: function(data){
                    //If successful this will print the price 
                    
                    $('#price').val(data.prc*0.5);

                },
                error: function(data){
                    
                    console.log(data);
                }
            });
    });

});


 
 
