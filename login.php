<?php

session_start(); // global settings

$GLOBALS['config'] = array(
  'mysql' => array(
    'host' => 'localhost',
    'username' => 'root',
    'password' =>  '123456',
    'db' => 'fcoco_db'
  ),
  'remember' => array(
    'cookie_name' => 'hash',
    'cookir_expiry' => 604800
  ),

  'session' => array(
    'session_name' => 'user',
    'token_name' => 'token'
  )
);

spl_autoload_register(function($class) {
  require_once '../classes/'. $class . '.php';
});

require_once '../functions/sanitize.php';

if (Cookie::exists(Config::get('remember/cookie_name')) && !Session::exists(Config::get('session/session_name'))) {
  $hash = Cookie::get(Config::get('remember/cookie_name'));
  $hashCheck = DB::getInstance()->get('users_session', array('hash', '=', $hash));
  if ($hashCheck->count()) {
    //echo 'Hash matches, log user in';
    $user = new User($hashCheck->first()->user_id);
    $user->login();
  }
}
?>




<html lang="en">
  <head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fcoco | food.connect.consult</title>

    <!-- Bootstrap -->
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" > -->
  <link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="../css/animate.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/jquery.bxslider.css">
	<link rel="stylesheet" type="text/css" href="../css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="../css/demo.css" />
	<link rel="stylesheet" type="text/css" href="../css/set1.css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
	<link href="../css/overwrite.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="../img/FcocoLogo.ico" />
<style >
.list-div{

background: linear-gradient(-45deg, #5c328bd6, #4dce81, #2f8fb2, #17b690);
background-size: 400% 400%;
-webkit-animation: Gradient 15s ease infinite;
-moz-animation: Gradient 15s ease infinite;
animation: Gradient 15s ease infinite;
}
.pad{
  margin-top:40px;

    padding: 20px 0;
    position: relative;
}
body{
  background: linear-gradient(-45deg, #5c328bd6, #4dce81, #2f8fb2, #17b690);
  background-size: 400% 400%;
  -webkit-animation: Gradient 15s ease infinite;
  -moz-animation: Gradient 15s ease infinite;
  animation: Gradient 15s ease infinite;
  }

@-webkit-keyframes Gradient {
0% {
  background-position: 0% 50%
}
50% {
  background-position: 100% 50%
}
100% {
  background-position: 0% 50%
}
}

@-moz-keyframes Gradient {
0% {
  background-position: 0% 50%
}
50% {
  background-position: 100% 50%
}
100% {
  background-position: 0% 50%
}
}

@keyframes Gradient {
0% {
  background-position: 0% 50%
}
50% {
  background-position: 100% 50%
}
100% {
  background-position: 0% 50%
}
}


</style>
</head>
  <body>
      <div class="list-div" style="margin-bottom:5px;">
      <div class="container">
      <div class="row">

              <div class="col-md-12">
                  <div class="">

                        <div class=" navbar-inverse " style="background:none;">


                                <div class="navbar-collapse collapse">
                                  <div class=" navbar-left" >
                                    <div class="logo-left">
                                      <a href="../index.php">  <img  class="sel" src="../img/logo-new.png" alt="logo"></a>



                                    <div class=" navbar-nav navbar-right" style="margin-left:800px;">

</div>
                                  </div>

                                </div>
                                <!--/.nav-collapse -->
                            </div>
                        </div>
                        <!-- /.navbar -->



                  </div>
              </div>
          </div>

        </div>


  <div id="banner">
     <div id="banner_backdrop"></div>
     <div >
       <div class="">

       </div>
       <div id="border-round" class="container" style="padding-top:40px;" >
           <div class="row">
               <div class='col-md-4'></div>
               <div class="col-md-4">
                   <div class="login-box well">
                         <div >
                           <?php 
                              if (Input::exists()) {
                                //echo "teste";
                                      if(Token::check(Input::get('token'))) {


                                              $validate = new Validate();
                                           

                                              $validation = $validate->check($_POST, array(
                                               

                                                       'email' => array('required' => true) ,
                                                    'password' => array('required' => true)
                                                        
    
                                                   
                                                  
                                              
                                                  ));
                                             
                                               
                                                  if($validation->passed()) {
                                                    //echo "Passou!";
                                                    $user = new User();
                                                   
                                                    $login = $user->login(Input::get('email'), Input::get('password'), $remember);

                                                    if ($login) {
                                                      //echo "logado!";
                                                      Redirect::to('../index.php');
                                                    } else {
                                                      echo "<p>logging in failed.</p>";
                                                    }

                                                  } else {
                                                    foreach($validation->errors() as $error) {
                                                echo $error, '<br>';
                                              }
                                        }

                                }
                              }
                              ?>
                         </div>
                           <form action="" method="post">
                             <div class="text-center">
                               <h1 class="glyphicon glyphicon-log-in" ><span> Login</span></h1>
                             </div>

                               <div class="form-group">
                                   <label for="username-email">E-mail or UserId</label>
                                   <input value=''  placeholder="E-mail or UserId" name="email" type="email" class="form-control" />
                               </div>
                               <div class="form-group">
                                   <label for="password">Password</label>
                                   <input  value='' placeholder="Password" name="password"  type="password" class="form-control" />
                               </div>
                               <div class="input-group">

                               </div>
                               <div class="field form-group">
                                      <label for="remember">
                                        <input type="checkbox" name="remember" id="remember"> Remember me
                                      </label>
                                    </div>
                               <div class="form-group">
                                   <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
                                   <input type="submit" class="btn btn-color  btn-login-submit btn-block " value="Login" />
                               </div>
                               <span class='text-center'><a href="/resetting/request" class="text">Forgot Password?</a></span>
                               <div class="form-group">
                                   <p class="text-center m-t-xs text-sm">Do not have an account?</p>
                                   <a href="../users/register.php" class="btn btn-color btn-block m-t-md" >Create an account</a>
                               </div>
                           </form>

                   </div>
               </div>
               <div class='col-md-4'></div>
           </div>
       </div>



     </div>
  </div>

  <footer>
  		<div class="list-div pad">
  			<div class="container">
  				<div class="row">
  					<div class="copyright">
  						@2018 | copyright <a target="_blank" style="margin-right:20px;margin-Left:10px;" href="http://fcoco.in">fcoco.in</a><a href="#" >     </a>
              <a target="_blank" href="http://fcoco.in/privacy"> Privacy Policy</a> |
              <a target="_blank" href="http://fcoco.in/terms">Terms and Conditions</a>
  					</div>
  <!-- this is the social sites :  : : : : : : : : : : : : :facebook: face-boookokok-->
  				</div>
  			</div>
  			<div class="side">
  			<div class="container">
  				<div class="row">
  					<ul class="social-network">
              <li><a href="#" data-placement="top" title="Whatsapp"><i class="fab fa-whatsapp fa-2x"></i></a></li>
  						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
  						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
  						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
  						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
  						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
  					</ul>
  				</div>
  			</div>
  </div>
  		


  		</div>
  	</footer>

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="js/jquery-2.1.1.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
  	<script src="js/wow.min.js"></script>
  	<script src="js/jquery.easing.1.3.js"></script>
  	<script src="js/jquery.isotope.min.js"></script>
  	<script src="js/jquery.bxslider.min.js"></script>
  	<script type="text/javascript" src="js/fliplightbox.min.js"></script>
  	<script src="js/functions.js"></script>
  	<script type="text/javascript">$('.portfolio').flipLightBox()</script>

    </body>
  </html>
