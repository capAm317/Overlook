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
              <li><a href="fdcheckin.php">Check-In</a></li>
              <li><a href="fdorderamenities.php" class="active">Order Amenities</a></li>
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
              <form method="POST" action="../controller/orderAmenityCntrlr.php">
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

                        <!-- <td>Sietereales, Miguel Alphonzo</td>
                        <td>09175469169</td>
                        <td>Corporate</td>
                        <td>1</td> -->
                        
                      </tr>
                    </tbody>
                  </table>
                </div>

                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <th class="col-lg-8 col-md-8 col-sm-8 col-xs-8">Item</th>
                      <th class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Quantity</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <select name="selitem" id="iditem" class="form-control" required="true">
                            <!-- Put Amenities -->
                          </select>
                        </td>
                        <td><input type="text" name="selquantity" id="idquantity" class="form-control" min=1 required="true" value="1"></td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <div class="row">
                  <div class="form-group">
                    <input type="hidden" id="user" name="usernme" value="" >
                    <input type="submit" value="Add" class="btn btn-default btn-lg btn-block">
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
  <script src="../js/queryScript3.js"></script>
</html>