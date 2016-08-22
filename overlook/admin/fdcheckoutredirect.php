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
              <span class="fa fa-4x fa-frown-o"></span>
            </div>
            <div class="info">
              <h4 class="text-center">Check-Out</h4>
              
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <th class="col-lg-3 col-md-3 col-sm-3 col-xs-3">Name</th>
                      <th class="col-lg-2 col-md-2 col-sm-2 col-xs-2">Contact</th>
                      <th class="col-lg-2 col-md-2 col-sm-2 col-xs-2">Type</th>
                      <th class="col-lg-2 col-md-2 col-sm-2 col-xs-2">Package</th>
                      <th class="col-lg-3 col-md-3 col-sm-3 col-xs-3">Discount</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td id="gs_nme"></td>
                        <td id="gs_cntc"></td>
                        <td id="gs_type"></td>
                        <td id="pckge"></td>
                        <form id="checkout" method="POST" action="../controller/checkoutHandler.php">
                        <td>
                          <select id="discnt" name="discount" class="form-control" required="true">
                            <option value="0">None</option>
                            <option value="5">5%</option>
                            <option value="10">10%</option>
                            <option value="15">15%</option>
                            <option value="20">20%</option>
                            <option value="25">25%</option>
                            <option value="30">30%</option>
                            <option value="35">35%</option>
                            <option value="40">40%</option>
                            <option value="45">45%</option>
                            <option value="50">50%</option>
                          </select>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <th class="col-lg-6 col-md-6 col-sm-6 col-xs-6">Items</th>
                      <th class="col-lg-3 col-md-3 col-sm-3 col-xs-3">Quantity</th>
                      <th class="col-lg-3 col-md-3 col-sm-3 col-xs-3">Price</th>
                    </thead>
                    <tbody id="receipt">

                    <!-- Sample Data 
                      <tr>
                        <td>Breakfast</td>
                        <td>2</td>
                        <td>1500.00</td>
                      </tr>
                      <tr>
                        <td>Lunch</td>
                        <td>2</td>
                        <td>1500.00</td>
                      </tr>
                      -->


                    </tbody>
                  </table>
                </div>

                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <th class="col-lg-6 col-md-6 col-sm-6 col-xs-6"></th>
                      <th class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></th>
                      <th class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></th>
                    </thead>
                    
                    <tbody id="totalbody">
                      <tr>
                        <td>Total</td>
                        <td id="quantity"></td>
                        <td id="total"></td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <div class="row">
                  <div class="form-group">
                    <input type='hidden' id='user' name='usernme' value="">
                    <input type="hidden" id='tots' name='tots2'>
                    <input type="submit" id="chkout" value="Check-Out" class="btn btn-default btn-lg btn-block">
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
  <script src="../js/queryScript2.js"></script>
</html>