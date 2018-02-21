<?php require_once "include/header.php"; ?>



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
            <li role="presentation" ><a href="./index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li ><a href="./about_.php">About us</a></li>
            <li role="presentation"><a href="./mission_.php">Mission and Vission</a></li>
            <li role="presentation"><a href="./services_.php">Srervices</a></li>
            <li role="presentation" class="active"><a href="./contact_.php">Contact</a></li>
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


	<section id="contact-page">
        <div class="container">
            <div class="center">
                <h2>Drop Your Message</h2>
                <p></p>
            </div>
            <div class="row contact-wrap">
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" class="form-control">
                        </div>

                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                        </div>
                    </div>
                </form>
            </div><!--/.row-->
        </div><!--/.container-->
    </section>
    <div class="container">
      <div class="row">
        <div class="col-md-4 ">
          <h3 class="widgetheading">Stay in touch</h3>
          <a href="#"><p><i class="fa fa-envelope"></i> contact@fcoco.in</p></a>
          <p><i class="fa fa-phone"></i> +91 9053476280</p>
          <p><i class="fa fa-home"> New Delhi</i> ​
          </p>
        </div>
        <div class="col-md-8">
          <div class="map">
          		<iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Kuningan,+Jakarta+Capital+Region,+Indonesia&amp;aq=3&amp;oq=kuningan+&amp;sll=37.0625,-95.677068&amp;sspn=37.410045,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Kuningan&amp;t=m&amp;z=14&amp;ll=-6.238824,106.830177&amp;output=embed">
          		</iframe>
          	</div>

        </div>
      </div>

    </div>





<?php require_once "include/footer.php"; ?>
