
<?php require_once "include/header.php"; ?>
<?php require_once './core/init.php'; ?>
<?php

	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once "include/config.php";

?>
<div  class="affix-top">
    <div class="navbar navbar-default navbar-static">

    <div class="container"style="background-color: #5ED8BE">
      <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

      </div>
      <div class="navbar-collapse collapse">
        <div class="menu">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="./index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li ><a href="./about_.php">About us</a></li>
            <li role="presentation"><a href="./mission_.php">Mission and Vission</a></li>
            <li role="presentation"><a href="./services_.php">Srervices</a></li>
            <li role="presentation"><a href="./contact_.php">Contact</a></li>
            <ul  class="nav navbar-nav navbar-right">
<li><a  href="./users/login.php"><span class="glyphicon glyphicon-log-in"></span><strong > Login</strong></a></li>
<ul class="nav navbar-nav navbar-right">
<li><a style="margin-right:10px;" href="./users/register.php"><span class="glyphicon glyphicon-log-out"></span><strong> Sign up</strong> </a></li>
</ul>

</ul>

          </ul>

        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="imagel">
      <div class="img-responsive">
        <ul class="bxslider">
          <li><img style="height:500px;width:100%;" src="img/101.jpg" alt=""/></li>
          <li><img  style="height:500px;width:100%;" src="img/102.jpg" alt=""/></li>
          <li><img style="height:500px;width:100%;" src="img/103.jpg" alt=""/></li>
        </ul>
      </div>
    </div>
  </div>
</div>
    <div class="container">

  <div class="row">
    <div class="col-md-8 text-left">


      <div class="text-center">
        <h1 class="welcome">Welcome to FCoCo</h1>
                  <p style="text-align:justify;"><span><strong>FCoCo</strong></span> stands for <strong>Food Connect Consult</strong>, is designed and brought
                     to life for the sole purpose of helping Food Sector of India.
          ​We are here to help you and your food ventures in attaining great heights.
          We are the single solution to all the problems your venture is facing in reaching its actual potential.
          So help us in helping YOU.</p>
          <hr>
      </div>

              <div class="box">
      <div class="col-md-4">
        <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
          <h3>Food</h3>
            <div class="icon">
              <i class="fa fa-heart-o fa-3x"></i>
            </div>
          <p>Start-Up's Consultation,FSSAI License / Registration,
                          ,Diet Chart
</p>
          <div class="ficon">
            <a href="#" class="btn btn-default" role="button">Read more</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.0s">
          <h3>Connect</h3>
          <div class="icon">
            <i class="fa fa-user fa-3x"></i>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu libero</p>
          <div class="ficon">
            <a href="#" class="btn btn-default" role="button">Read more</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.6s">
          <h3>Consultant</h3>
          <div class="icon">
            <i class="fa fa-location-arrow fa-3x"></i>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu libero</p>
          <div class="ficon">
            <a href="#" class="btn btn-default" role="button">Read more</a>
          </div>
        </div>

      </div>
</div>
             </div>



    <div class="col-md-4 sidenav">
<div class="panel panel-default" >

        <div class="panel-heading">
          <strong>What new in Food Sector!</strong>
        </div>
        <div class="panel-body">
          <div class="media-body">
            <h4 class="media-heading"></h4>
            <p>Comming soon..!!
            </p>

          </div>

        </div>
        <div class="panel-body">

        </div>

          </div>
        </div>
      </div>
    </div>

<?php require_once "include/footer.php"; ?>
