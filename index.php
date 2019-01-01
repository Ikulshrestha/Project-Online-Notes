<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Online Notes</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
  </head>
  <body>
    <!--Navigation Bar-->
    <nav role="navigation" class="navbar navbar-custom" class="navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand">Online Notes</a>
                <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
                <div class="navbar-collapse collapse" id="navbarCollapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#loginmodal" data-toggle="modal">LOGIN</a></li>
                    </ul>

                </div>
        </div>
    </nav>
    <!--Jumbotron with Sign up Button-->
     <div class="jumbotron" id="myContainer">
         <h1>Online Notes..!</h1>
         <p>Your Notes with you wherever you go.</p>
         <p>Easy to Create, Update and Delete.</p>

         <button type="button" class="btn btn-lg buttcolor signup" data-target="#signupModal" data-toggle="modal">Sign up-It's free</button>
     </div>

     <!--Sign up form-->
      <form method="post" id="signupform">
        <div class="modal" id="signupModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" data-dismiss="modal">
                    &times;
                  </button>
                  <h4 id="myModalLabel">
                    Sign up today and Start using our Online Notes App!
                  </h4>
              </div>
              <div class="modal-body">

                  <!--Sign up message from PHP file-->
                  <div id="signupmessage"></div>

                  <div class="form-group">
                      <label for="username" class="sr-only">Username:</label>
                      <input class="form-control" type="text" name="username" id="username" placeholder="Username" maxlength="30">
                  </div>
                  <div class="form-group">
                      <label for="email" class="sr-only">Email:</label>
                      <input class="form-control" type="email" name="email" id="email" placeholder="Email Address" maxlength="50">
                  </div>
                  <div class="form-group">
                      <label for="password" class="sr-only">Choose a password:</label>
                      <input class="form-control" type="password" name="password" id="password" placeholder="Choose a password" maxlength="30">
                  </div>
                  <div class="form-group">
                      <label for="password2" class="sr-only">Confirm password</label>
                      <input class="form-control" type="password" name="password2" id="password2" placeholder="Confirm password" maxlength="30">
                  </div>
              </div>
              <div class="modal-footer">
                  <input class="buttcolor" name="signup" type="submit" value="Sign up">
                  <input class="dfd" data-dismiss="modal" name="cancel" type="button" value="Cancel" >
             </div>
              </div>
          </div>
      </div>
  </form>
<!--Login Form-->
<form method="post" id="loginform">
    <div class="modal" id="loginmodal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">
                        &times;</button>
                        <h4 id="myModalLabel">Login: </h4>
                    </div>
                    <div class="modal-body">
                        <!--Login message from PHP file-->
                        <div id="loginmessage"></div>

                        <div class="form-group">
                            <label for="loginemail" class="sr-only">Email:</label>
                             <input class="form-control"  type="email" name="loginemail" id="loginemail" placeholder="Email" maxlength="50">
                            </div>
                            <div class="form-group">
                      <label for="loginpassword" class="sr-only">Password</label>
                      <input class="form-control" type="password" name="loginpassword" id="loginpassword" placeholder="Password" maxlength="30">
                  </div>
                  <div class="checkbox">
                      <label>
                          <input type="checkbox" name="rememberme" id="rememberme">
                        Remember me
                      </label>
                          <a class="pull-right" style="cursor: pointer" data-dismiss="modal" data-target="#forgotpasswordModal" data-toggle="modal">
                      Forgot Password?
                      </a>
                  </div>

              </div>
              <div class="modal-footer">
                  <input class="btn green" name="login" type="submit" value="Login">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                  Cancel
                </button>
                <button type="button" class="btn btn-default pull-left"  data-dismiss="modal" data-target="#signupModal" data-toggle="modal">
                  Register
                </button>
              </div>
          </div>
      </div>
      </div>
      </form>
      <!--Forgot password form-->
      <!--Forgot password form-->
  <form method="post" id="forgotpasswordform">
    <div class="modal" id="forgotpasswordModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" data-dismiss="modal">
                &times;
              </button>
              <h2 id="myModalLabel">
                Forgot Password? <h4> Enter your email address:</h4>
            </h2>
          </div>
          <div class="modal-body">

              <!--forgot password message from PHP file-->
              <div id="forgotpasswordmessage"></div>


              <div class="form-group">
                  <label for="forgotemail" class="sr-only">Email:</label>
                  <input class="form-control" type="email" name="forgotemail" id="forgotemail" placeholder="Email" maxlength="50">
              </div>
          </div>
          <div class="modal-footer">
              <input class="btn green" name="forgotpassword" type="submit" value="Submit">
            <button type="button" class="btn btn-default" data-dismiss="modal">
              Cancel
            </button>
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal" data-target="#signupModal" data-toggle="modal">
              Register
            </button>
          </div>
      </div>
  </div>
  </div>
  </form>


<!--Footer-->
 <div class="Footer">
     <div class="container">
         <p>For queries drop a mail at Kulshresthaishan@gmail.com</p>
     </div>
 </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>