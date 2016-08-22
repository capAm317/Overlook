$(document).ready(function(){

//Scripts used by the admin to add into the database
/*

1. Add Amenities script
2. Add Rooms Script
3. Add Employees Script

Format

1. Ajax
    1.1 send data type and the details of the form
    1.2 Adds to the db
    1.3 returns true if added else console.log()

*/
  $('#addAmenity').submit(function(e){
        var data = {
          "type": "amenity"
        };

        e.preventDefault;
        
        data = $(this).serialize() + "&" + $.param(data);
        $.ajax({
            type: "POST",
            dataType: "html",
            url: "../controller/adminHandler.php", //Relative or absolute path to response.php file
            data: data,
            success: function(data) {
                console.log(data);
                $('#success').html('<p>You have successfully added the Amenity</p>');
            },
            error: function(data){
                console.log(data)
            }
            
        });
        return false;
  });

  $('#addRoom').submit(function(e){

    var data = {
          "type": "room"
        };

        e.preventDefault;
        
        data = $(this).serialize() + "&" + $.param(data);
        $.ajax({
            type: "POST",
            dataType: "html",
            url: "../controller/adminHandler.php", //Relative or absolute path to response.php file
            data: data,
            success: function(data) {
                $('#success2').html('<p>You have successfully added the Room</p>');
            },
            error: function(data){
                console.log(data)
            }
            
        });
        return false;

  });

  $('#addEmployee').submit(function(e){

    var data = {
          "type": "employee"
        };

        e.preventDefault;
        
        data = $(this).serialize() + "&" + $.param(data);
        $.ajax({
            type: "POST",
            dataType: "html",
            url: "../controller/adminHandler.php", //Relative or absolute path to response.php file
            data: data,
            success: function(data) {
                console.log(data);
                $('#success3').html('<p>You have successfully added the Employee</p>');
            },
            error: function(data){
                console.log(data)
            }
            
        });
        return false;

  });

});