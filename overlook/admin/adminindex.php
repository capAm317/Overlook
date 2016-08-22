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
              <li><a href="adminindex.php" class="active">Add</a></li>
              <li><a href="adminreports.php">Reports</a></li>
              <li><a href="admincalendar.php">Calendar</a></li>
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

		<section id="admin-index">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 orange-break">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 tab-menu">
          <div class="list-group">
            <a href="#" class="list-group-item active text-center">
              <h4 class="glyphicon glyphicon-shopping-cart"></h4><br/>Amenity
            </a>
            <a href="#" class="list-group-item text-center">
              <h4 class="glyphicon glyphicon-home"></h4><br/>Room
            </a>
            <a href="#" class="list-group-item text-center">
              <h4 class="glyphicon glyphicon-user"></h4><br/>Employee
            </a>
            <div class="list-group-item text-center">
              <h4>&nbsp;</h4>
            </div>
            <div class="list-group-item text-center">
              <h4>&nbsp;</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 tab">

          <div class="tab-content active">
            <div class="row force-center">
              <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-2">

                <form class="form-horizontal" id="addAmenity">
                  <div class="form-group">
                    <label for="idam_nme" class="col-sm-3 control-label">Amenity Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="idam_nme" name="fm_nme">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="idam_prc" class="col-sm-3 control-label">Price</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="idam_prc" name="fm_price">
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Add Amenity" class="btn btn-default btn-lg btn-block">
                    <div id="success"></div>
                  </div>
                </form>

              </div>
            </div>
          </div>

          <div class="tab-content">
            <div class="row force-center">
              <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-2">

                <form class="form-horizontal" id="addRoom">
                  <div class="form-group">
                    <label for="idrm_nme" class="col-sm-3 control-label">Room Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="idrm_nme" name="rm_nme">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="idrm_prc" class="col-sm-3 control-label">Price</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="idrm_prc" name="rm_prc">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="idrm_pax" class="col-sm-3 control-label">PAX</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="idrm_pax" name="rm_pax">
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Add Room" class="btn btn-default btn-lg btn-block">
                    <div id="success2"></div>
                  </div>
                </form>

              </div>
            </div>
          </div>

          <div class="tab-content">
            <div class="row force-center">
              <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-2">

                <form class="form-horizontal" id="addEmployee">
                  <div class="form-group">
                    <label for="idrm_nme" class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="idrm_nme" name="usernme">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="idpasswrd" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="idpasswrd" name="passwrd">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="idemptype" class="col-sm-3 control-label">Type</label>
                    <div class="col-sm-9">  
                      <select name="emptype" id="idemptype" class="form-control" required="true">
                        <option value="admin">Admin</option>
                        <option value="frontDesk">FrontDesk</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Add Employee" class="btn btn-default btn-lg btn-block">
                    <div id="success3"></div>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>  
      </div>
		</section>

    <section id="footer">
      <div class="row copyright">
        <p><h4 class="text-center">Copyright 2007-2015  . Overlook Resort Inc. All Rights Reserved.<h4></p>
      </div>
    </section>


	</body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>  
  <script src="http://www.jasny.net/bootstrap/dist/js/jasny-bootstrap.min.js"></script>
  <script src="../js/script.js"></script>
  <script src="../js/addScripts.js"></script>
</html>