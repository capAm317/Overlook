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

      <div class="row" id="replace">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2">
          <div class="box auto-box">
            <div class="box-icon">
              <span class="fa fa-4x fa-smile-o"></span>
            </div>
            <div class="info">
              <h4 class="text-center">Check-IN</h4>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <th class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Name</th>
                      <th class="col-lg-3 col-md-3 col-sm-3 col-xs-3">Contact</th>
                      <th class="col-lg-2 col-md-2 col-sm-2 col-xs-2">Type</th>
                      <th class="col-lg-3 col-md-3 col-sm-3 col-xs-3">Package</th>
                    </thead>
                    <tbody>
                      <tr id="guestRow">

                      <!-- Will show the information of the Guest-->

                      </tr>
                    </tbody>
                  </table>
                </div>

                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <th class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Rooms </th>
                      <th class="col-lg-6 col-md-6 col-sm-6 col-xs-6"></th>
                    </thead>
                  <form id="rm_reservation">
                    <tbody id="rooms">
                  
                    <!-- Sample Data
                      <tr>
                        <td class="td-room td-room-avail">
                          Azalea 1
                        </td>
                        <td class="td-room td-room-avail">
                          Dormitory 1
                        </td>
                      </tr>
                      <tr>
                        <td class="td-room td-room-avail">
                          Azalea 2
                        </td>
                        <td class="td-room td-room-not-avail">
                          Dormitory 2
                        </td>
                      </tr>
                      -->


                    </tbody>
                  </table>
                </div>

                <div class="row">
                  <div class="form-group">
                    <input type="hidden" id="user" value="" >
                    <input type="submit" value="Check-In" class="btn btn-default btn-lg btn-block">
                  </div>
                </div>
              </form>

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
      <div class="row copyright">
        <p><h4 class="text-center">Copyright 2007-2015  . Overlook Resort Inc. All Rights Reserved.<h4></p>
      </div>
    </section>


	</body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>  
  <script src="http://www.jasny.net/bootstrap/dist/js/jasny-bootstrap.min.js"></script>
  <script src="../js/script.js"></script>
  <script src="../js/queryScript.js"></script>
</html>