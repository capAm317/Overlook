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
              <li><a href="adminindex.php">Add</a></li>
              <li><a href="adminreports.php">Reports</a></li>
              <li><a href="admincalendar.php" class="active">Calendar</a></li>
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

    <section id="admin-reports">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 orange-break">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-1">
          <div class="box auto-box">
            <div class="box-icon">
                <span class="fa fa-4x fa-bar-chart-o"></span>
            </div>
            <div class="info">
              </br>
              <div class="row">
                <form class="form-inline">
                  <div class="form-group">
                    <label for="idmdate">Date: </label>
                    <select name="mdate" id="idmdate" class="form-control" required="true">
                      
                    </select>
                  </div>
                  <div class="form-group">
                    <select name="ydate" id="idydate" class="form-control" required="true">

                    </select>
                  </div>
                </form>
              </div>
              <h4 class="text-center">
                <span id="dateyear"></span>
              </h4>

              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <th class="col-lg-3 col-md-3 col-sm-3 col-xs-3">Date</th>
                    <th class="col-lg-2 col-md-2 col-sm-2 col-xs-2">ID</th>
                    <th class="col-lg-3 col-md-3 col-sm-3 col-xs-3">Name</th>
                    <th class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Package</th>
                  </thead>
                  <tbody id="dates">
                   <!--  <tr>
                      <td>Marcus Ramos</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Marcus Ramos</td>
                      <td></td>
                    </tr> -->
                  </tbody>
                </table>
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
  <script src="../js/calendarSc.js"></script>
</html>