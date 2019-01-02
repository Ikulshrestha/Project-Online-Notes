<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Profile Section</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
    <style>
        #container{
            margin-top: 140px;
        }

        #notepad, #allNotes, #doneNote{
            display: none;
        }
        .buttons{
            margin-bottom: 20px;
        }
        textarea{
            width: 100%;
            max-width: 100%;
            font-size: 16px;
            line-height: 1.5em;
            border-left-width: 20px;
            border-left-color: #CA3DD9;
            background-color: #FBEFFF;
            border-color: #CA3DD9;
            color:#CA3DD9
            padding:10px;
        }
    </style>
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
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li class="active"><a href="#">My Notes </a></li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Logged in as <b>Username</b> </a></li>
                        <li><a href="#">Log Out</a></li>
                    </ul>

                </div>
        </div>
    </nav>
<!--Container-->
<div class="container" id="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <h2>General Account Settings:</h2>
                <div class="table-responsive">
                    <table class="table table-hover table-condensed table-bordered">
                        <tr data-target="#updateusername" data-toggle="modal">
                            <td>Username</td>
                                <td><?php echo $username; ?></td>
                        </tr>
                        <tr data-target="#updateemail" data-toggle="modal">
                            <td>Email</td>
                                <td><?php echo $email ?></td>
                        </tr>
                        <tr data-target="#updatepassword" data-toggle="modal">
                            <td>Password</td>
                            <td>hidden</td>
                        </tr>
                    </table>
                </div>
        </div>
    </div>
</div>
<!--Update username-->
     <form method="post" id="updateusernameform">
       <div class="modal" id="updateusername" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
           <div class="modal-dialog">
             <div class="modal-content">
               <div class="modal-header">
                 <button class="close" data-dismiss="modal">
                   &times;
                 </button>
                 <h4 id="myModalLabel">
                   Edit Username:
                 </h4>
             </div>
             <div class="modal-body">

                 <!--update username message from PHP file-->
                 <div id="updateusernamemessage"></div>


                 <div class="form-group">
                     <label for="username" >Username:</label>
                     <input class="form-control" type="text" name="username" id="username" maxlength="30" value="<?php echo $username; ?>">
                 </div>

             </div>
             <div class="modal-footer">
                 <input class="buttcolor" name="updateusername" type="submit" value="Submit">
                 <input class="dfd" data-dismiss="modal" name="cancel" type="button" value="Cancel" >
             </div>
         </div>
     </div>
     </div>
     </form>
     <!--Update email-->
           <form method="post" id="updateemailform">
             <div class="modal" id="updateemail" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                   <div class="modal-content">
                     <div class="modal-header">
                       <button class="close" data-dismiss="modal">
                         &times;
                       </button>
                       <h4 id="myModalLabel">
                         Enter new email:
                       </h4>
                   </div>
                   <div class="modal-body">

                       <!--Update email message from PHP file-->
                       <div id="updateemailmessage"></div>


                       <div class="form-group">
                           <label for="email" >Email:</label>
                           <input class="form-control" type="email" name="email" id="email" maxlength="50" value="<?php echo $email ?>">
                       </div>

                   </div>
                   <div class="modal-footer">
                       <input class="buttcolor" name="updateusername" type="submit" value="Submit">
                     <input class="dfd" data-dismiss="modal" name="cancel" type="button" value="Cancel" >
                   </div>
               </div>
           </div>
           </div>
           </form>
<!--Update password-->
  <form method="post" id="updatepasswordform">
    <div class="modal" id="updatepassword" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" data-dismiss="modal">
                &times;
              </button>
              <h4 id="myModalLabel">
                Enter Current and New password:
              </h4>
          </div>
          <div class="modal-body">

<!--Update password message from PHP file-->
        <div id="updatepasswordmessage"></div>


        <div class="form-group">
            <label for="currentpassword" class="sr-only" >Your Current Password:</label>
            <input class="form-control" type="password" name="currentpassword" id="currentpassword" maxlength="30" placeholder="Your Current Password">
        </div>
        <div class="form-group">
            <label for="password" class="sr-only" >Choose a password:</label>
            <input class="form-control" type="password" name="password" id="password" maxlength="30" placeholder="Choose a password">
        </div>
        <div class="form-group">
            <label for="password2" class="sr-only" >Confirm password:</label>
            <input class="form-control" type="password" name="password2" id="password2" maxlength="30" placeholder="Confirm password">
        </div>

    </div>
    <div class="modal-footer">
        <input class="buttcolor" name="updatepassword" type="submit" value="Submit">
       <input class="dfd" data-dismiss="modal" name="cancel" type="button" value="Cancel" >
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
