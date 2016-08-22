$("document").ready(function(){

    //Gets the rooms in the db available
    
    $.ajax({
        type: 'GET',
        url: 'controller/gethandler.php',
        data: {'type' : 'packages'},
        dataType: 'html',
        success: function(html){
            $("#idpackage").html(html);
        },
        error: function(html){
            console.log(html);
        }
    }); 
    
});