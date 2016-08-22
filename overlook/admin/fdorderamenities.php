<html>
	<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Overlook | Resort and Conference Center</title>
    <meta name="generator" content="Bootply">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- custom css -->
   <link rel="icon" type="image/png" href="../images/icon.ico" />
   <link rel="stylesheet" type = "text/css" href = "../css/bscustom.css">
  <head>
  <body>
    <section id="header">
      <!-- header start --> 

      <nav class="navbar navbar-inverse navbar-fixed-top expand">
        <!-- header content start -->
        <div class="container" style ="z-index: 1030;">
          <div class="navbar-header">
            <!-- software name start -->
            <a class="navbar-brand" href="#">
              <img class="image-responsive" src="../images/logo.png" alt="">
            </a>
            <!-- software name end -->
            <ul class="nav navbar-nav hidden-xs">
              <li><a href="fdcheckin.php" class="active">Check-In</a></li>
              <li><a href="fdorderamenities.php">Order Amenities</a></li>
              <li><a href="fdcheckout.php">Check-Out</a></li>
            </ul>
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
            <img src="../images/1.png" alt="">
          </div>
          <div class="item">
            <img src="../images/2.png" alt="">
          </div>
          <div class="item">
            <img src="../images/3.png" alt="">
          </div>
          <div class="item">
            <img src="../images/4.png" alt="">
          </div>
        </div>
      </div>
    </section>

		<section id="cms-login">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 orange-break">
        </div>
      </div>
<!--       <div class="row">
        <div class="arrow-down arrow-down-orange force-center"></div>
      </div> -->
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2">
          <div class="box auto-box">
            <div class="box-icon">
              <span class="fa fa-4x fa-list"></span>
            </div>
            <div class="info">
              <h4 class="text-center">Order Amenities</h4>

              <form class="form-inline" id="checkinidForm">
                <div class="form-group">
                  <label class="sr-only" for="bookingid">Booking ID: </label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="bookingid" name="nmebookingid" placeholder="Booking ID">
                    <div class="input-group-addon form-submit" onclick="javascript:$('#bookingidForm').submit();"><span class="glyphicon glyphicon-search"></div>
                  </div>
                </div>
              </form>

              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <th class="col-lg-3 col-md-3 col-sm-3 col-xs-3">Name</th>
                    <th class="col-lg-1 col-md-1 col-sm-1 col-xs-1">Type</th>
                    <th class="col-lg-2 col-md-2 col-sm-2 col-xs-2">Package</th>
                    <th class="col-lg-3 col-md-3 col-sm-3 col-xs-3">Item</th>
                    <th class="col-lg-1 col-md-1 col-sm-1 col-xs-1">Quantity</th>
                    <th class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></th>
                  </thead>
                  <tbody id="guests">
                    <tr id="id="guestRow"">
                      
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
		</section>

    <section id="footer">
<!--       <div class="row footer-row">
        <div class="row">
        </div>
        <div class="row">
        </div>
        <div class="row">
        </div>
      </div> -->
    </section>


	</body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>  
  <script src="http://www.jasny.net/bootstrap/dist/js/jasny-bootstrap.min.js"></script>
  <script src="../js/script.js"></script>
  <script src="../js/search2.js"></script>
</html>