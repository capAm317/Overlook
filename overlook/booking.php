<html>
<!-- This Html page is for the Booking of the customers -->
	<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Overlook | Resort and Conference Center</title>
    <meta name="generator" content="Bootply">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- custom css -->
    <link rel="icon" type="image/png" href="images/icon.ico" />
    <link rel="stylesheet" type = "text/css" href = "css/bscustom.css">
    <link rel="stylesheet" type = "text/css" href = "datepicker/css/datepicker.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
    <![endif]-->
	<head>
	<body>
    <section id="header">
      <!-- header start --> 
      <div class="navmenu navmenu-default navmenu-fixed-left offcanvas" style="">
        <a class="navmenu-brand" href="#">
          <img class="image-responsive force-center" src="images/logo.png" alt="">
        </a>
        <ul class="nav navmenu-nav">
          <li><a href="../navmenu/">Home</a></li>
          <li class="active"><a href="./">Gallery</a></li>
          <li><a href="../navmenu-reveal/">Events</a></li>
          <li><a href="../navbar-offcanvas/">Rates</a></li>
          <li><a href="../navbar-offcanvas/">Booking</a></li>
          <li><a href="../navbar-offcanvas/">Visit Us</a></li>
        </ul>
      </div>
      <nav class="navbar navbar-inverse navbar-fixed-top expand">
        <!-- header content start -->
        <div class="container" style ="z-index: 1030;">
          <div class="navbar-header">
            <!-- responsive toggle button start -->
            <button type="button" class="pull-left navbar-toggle" data-toggle="offcanvas" data-target=".navmenu" data-canvas="body">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- responsive toggle button end -->
            <!-- software name start -->

            <a class="navbar-brand hidden-xs" href="#">
              <img class="image-responsive" src="images/logo.png" alt="">
            </a>

            <!-- <div class="collapse navbar-collapse"> -->
            <ul class="nav navbar-nav hidden-xs">
              <li><a href="index.php">Home</a></li>
              <li><a href="gallery.html">Gallery</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="events.html#event-teambuilding">Teambuilding</a></li>
                  <li><a href="events.html#event-wedding">Wedding</a></li>
                  <li><a href="events.html#event-special">Special Occasions</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rates <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="rates.html#rate-summer">Summer</a></li>
                  <li><a href="rates.html#rate-rainy">Rainy</a></li>
                </ul>
              </li>
              <li><a href="booking.php" class="active">Booking</a></li>
              <li><a href="visitus.html">Visit Us</a></li>
            </ul>
            <!-- </div> -->
            <!-- software name end -->
          </div>
        </div>
        <!-- header content end -->
      </nav>
    	<!-- header end -->
    </section>

  	<section id="carousel">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <!-- <ol class="carousel-indicators"> -->
          <!-- <li data-target="#myCarousel" data-slide-to="0" class="active"></li> -->
          <!-- <li data-target="#myCarousel" data-slide-to="1"></li> -->
        <!-- </ol> -->
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="images/1.png" alt="">
          </div>
          <div class="item">
            <img src="images/2.png" alt="">
          </div>
          <div class="item">
            <img src="images/3.png" alt="">
          </div>
          <div class="item">
            <img src="images/4.png" alt="">
          </div>
        </div>
      </div>
		</section>

		<section id="bookingBody">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 orange-break">
        </div>
      </div>

      <div class="row" id ="form-row">
        <div class="col-lg-8 col-md-10 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-1 col-sm-offset-1">
          <div class="box">
            <div class="box-icon">
              <span class="fa fa-4x fa-sticky-note"></span>
            </div>
            <div class="info">
              <form role="form" class="form-horizontal myForm" action="controller/reservationController.php" method="POST">
                <div id="book-date">
                  <div class="form-group">
                    <label for="#idtype" class="control-label col-lg-1 col-md-1 col-sm-1 col-xs-12">*Type:</label>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <select name="type" id="idtype" class="form-control" required="true">
                        <option value="single">Family Party</option>
                        <option value="corporate">Corporate Party</option>
                      </select>
                    </div>

                      <label for="#idpackage" class="control-label col-lg-1 col-md-1 col-sm-1 col-xs-12">*Package:</label>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <select name="package" id="idpackage" class="form-control" required="true">

                      <!-- Will be filled up with Ajax packages from the Packages Table -->

                      </select>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <input type="text" class="form-control" id="price" disabled value="" required="true">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="#dpd1" class="control-label col-lg-6 col-md-6 col-sm-6 col-xs-12">*Check-in Date:</label>
                    <label for="#dpd2" class="control-label col-lg-6 col-md-6 col-sm-6 hidden-xs">*Check-out Date:</label>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <input type="text" class="form-control" name="rs_chkin" value id="dpd1" required="true">
                    </div>

                    <label for="dpd2" class="control-label col-xs-12 visible-xs">*Check-out Date:</label>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <input type="text" class="form-control" name="rs_chkout" value id="dpd2" required="true">
                    </div>
                  </div>

                </div>

                <div id="book-info">
                  <div class="form-group">
                    <label for="#idgs_name" class="control-label col-lg-1 col-md-1 col-sm-1 col-xs-12">*Name:</label>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                      <input type="text" class="form-control" value id="idgs_name" name="gs_nme" required="true">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="#idgs_cnct" class="control-label col-lg-1 col-md-1 col-sm-1 col-xs-12">*Contact:</label>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                      <input type="number" class="form-control" value id="idgs_cnct" name="gs_cnct" required="true">
                    </div>

                    <label for="#idgs_emad" class="control-label col-lg-1 col-md-1 col-sm-1 col-xs-12">*Email:</label>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                      <input type="email" class="form-control" value id="idgs_emad" name="gs_emad" required="true">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="#idgs_adrs" class="control-label col-lg-1 col-md-1 col-sm-1 col-xs-12">*Address:</label>
                    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-12">
                      <textarea class="form-control" rows="2" id="idgs_adrs" name="gs_adrs" required="true" style="resize:none"></textarea>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="checkbox text-center">
                    <label>
                      <input type="checkbox" required> *I have read this agreement and agree to the <a href="termsandconditions.html" target="_blank">terms and conditions</a>.
                    </label>
                  </div>
                </div>

                <div class="form-group">
                  <input type="submit" value="Submit" class="btn btn-default btn-lg btn-block">
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div id="calendar"></div>
        </div>
      </div>

      <div class="row">
        <div class="arrow-up arrow-up-orange arrow-up-xs-footer force-center"></div>
      </div>
		</section>


		<section id="footer">
      <div class="row hidden-xs">
        <div class="arrow-down arrow-down-orange force-center"></div>
      </div>
<!--       <div class="row footer-row">
        <div class="row">
        </div>
        <div class="row">
        </div>
        <div class="row">
        </div>
      </div> -->
      <div class="row copyright">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
          <p><h4>Copyright 2007-2015  . Overlook Resort Inc. All Rights Reserved.<h4></p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="text-align: center">
          <a href="http://www.facebook.com/overlookresort" class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
          <a href="http://www.twitter.com" class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
          <a href="http://instagram.com/overlookresort" class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
		</section>

	</body>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>  
  <script src="http://www.jasny.net/bootstrap/dist/js/jasny-bootstrap.min.js"></script>
  <script src="js/script.js"></script>
  <script src="js/getScripts.js"></script>
  <script src="datepicker/js/bootstrap-datepicker.js"></script>
  <!-- This script is for the checkin and checkout date -->
  <script>
    var nowTemp = new Date();
    var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
     
    
    $('#idtype').prop('selectedIndex', 1);

    $('#idtype').change(function(){
        $.ajax({
          type: 'GET',
          url: 'test.php',
          data: {'tpid': $('#idtype').val()},
          dataType: 'json',
          success: function(data){
              var disableddates = data;
              //alert(data[0]);

              var checkin = $('#dpd1').datepicker({
                onRender: function(date) {
                  //console.log(now.valueOf());

                   var m = date.getMonth();
                    var d = date.getDate();
                    var y = date.getFullYear();

                    // First convert the date in to the mm-dd-yyyy format 
                    // Take note that we will increment the month count by 1 
                    m += 1; 
                    m = ("0" + m).slice(-2);
                    d = ("0" + d).slice(-2);
                    var currentdate = m + '-' + d + '-' + y ;
                    //alert(currentdate);

                    // We will now check if the date belongs to disableddates array 
                    for (var i = 0; i < disableddates.length; i++) {
                    // Now check if the current date is in disabled dates array. 
                        if ($.inArray(currentdate, disableddates) != -1 ) {
                          
                            return 'disabled';
                        }
                        else{
                          console.log("Hindi");
                        }
                    }

                  return date.valueOf() < now.valueOf() ? 'disabled' : '';
                }

              }).on('changeDate', function(ev) {
                if (ev.date.valueOf() > checkout.date.valueOf()) {
                  var newDate = new Date(ev.date)
                  newDate.setDate(newDate.getDate() + 1);
                  checkout.setValue(newDate);
                }
                checkin.hide();
                $('#dpd2')[0].focus();
              }).data('datepicker');
              var checkout = $('#dpd2').datepicker({
                onRender: function(date) {

                  var m = date.getMonth();
                    var d = date.getDate();
                    var y = date.getFullYear();

                    // First convert the date in to the mm-dd-yyyy format 
                    // Take note that we will increment the month count by 1 
                    m += 1; 
                    m = ("0" + m).slice(-2);
                    d = ("0" + d).slice(-2);
                    var currentdate = m + '-' + d + '-' + y ;
                    //alert(currentdate);

                    // We will now check if the date belongs to disableddates array 
                    for (var i = 0; i < disableddates.length; i++) {
                    // Now check if the current date is in disabled dates array. 
                        if ($.inArray(currentdate, disableddates) != -1 ) {
                          
                            return 'disabled';
                        }
                        else{
                          console.log("Hindi");
                        }
                    }

                  return date.valueOf() < checkin.date.valueOf() ? 'disabled' : '';
                }
              }).on('changeDate', function(ev) {
                checkout.hide();
              }).data('datepicker');

                  
          }
      });
    });

    $.ajax({
        type: 'GET',
        url: 'test.php',
        data: {'tpid': $('#idtype').val()},
        dataType: 'json',
        success: function(data){
            var disableddates = data;
            //alert(data[0]);

            var checkin = $('#dpd1').datepicker({
              onRender: function(date) {
                //console.log(now.valueOf());

                 var m = date.getMonth();
                  var d = date.getDate();
                  var y = date.getFullYear();

                  // First convert the date in to the mm-dd-yyyy format 
                  // Take note that we will increment the month count by 1 
                  m += 1; 
                  m = ("0" + m).slice(-2);
                  d = ("0" + d).slice(-2);
                  var currentdate = m + '-' + d + '-' + y ;
                  //alert(currentdate);

                  // We will now check if the date belongs to disableddates array 
                  for (var i = 0; i < disableddates.length; i++) {
                  // Now check if the current date is in disabled dates array. 
                      if ($.inArray(currentdate, disableddates) != -1 ) {
                        
                          return 'disabled';
                      }
                      else{
                        console.log("Hindi");
                      }
                  }

                return date.valueOf() < now.valueOf() ? 'disabled' : '';
              }

            }).on('changeDate', function(ev) {
              if (ev.date.valueOf() > checkout.date.valueOf()) {
                var newDate = new Date(ev.date)
                newDate.setDate(newDate.getDate() + 1);
                checkout.setValue(newDate);
              }
              checkin.hide();
              $('#dpd2')[0].focus();
            }).data('datepicker');
            var checkout = $('#dpd2').datepicker({
              onRender: function(date) {

                var m = date.getMonth();
                  var d = date.getDate();
                  var y = date.getFullYear();

                  // First convert the date in to the mm-dd-yyyy format 
                  // Take note that we will increment the month count by 1 
                  m += 1; 
                  m = ("0" + m).slice(-2);
                  d = ("0" + d).slice(-2);
                  var currentdate = m + '-' + d + '-' + y ;
                  //alert(currentdate);

                  // We will now check if the date belongs to disableddates array 
                  for (var i = 0; i < disableddates.length; i++) {
                  // Now check if the current date is in disabled dates array. 
                      if ($.inArray(currentdate, disableddates) != -1 ) {
                        
                          return 'disabled';
                      }
                      else{
                        console.log("Hindi");
                      }
                  }

                return date.valueOf() < checkin.date.valueOf() ? 'disabled' : '';
              }
            }).on('changeDate', function(ev) {
              checkout.hide();
            }).data('datepicker');

                
        }
    });

  </script>
</html>