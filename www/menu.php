<?php require_once "config.php";?>
<div class="modal hide" id="myModal">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">x</button>
    <h3>Login to ParisDjs</h3>
  </div>
  <div class="modal-body">
    <form method="post" action='choose_profil.php?profil=revendeur' name="login_form">
      <p><input type="text" class="span3" name="eid" id="email" placeholder="Email"></p>
      <p><input type="password" class="span3" name="passwd" placeholder="Password"></p>
      <p><button type="submit" class="btn btn-primary">Sign in</button>
        <a href="#">Forgot Password?</a>
      </p>
    </form>
  </div>
  <div class="modal-footer">
    New To Parisdjs?
    <a href="signup.php?profil=media" class="btn btn-primary">Register</a>
  </div>
</div>
<!-- put login form in common -->
 <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="index.php">ParisDjs</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
       <!--       <li><a href="#resellers">Resellers</a></li>-->
              <li><a href="press.php">Press</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="choose_profil.php">set profil</a></li>
            </ul>
             <!--<form class="navbar-form pull-right">
              <input class="span2" type="text" placeholder="Email">
              <input class="span2" type="password" placeholder="Password">
              <button type="submit" class="btn">Sign in</button>
            </form>-->
           <div class="pull-right">
                <ul class="nav pull-right">
                    <?php if (!is_logged_in()) {?>
                      <li><a data-toggle="modal" href="#myModal" >Login</a></li>
                    <?php } else {?>
                      <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, Aurelien <b class="caret"></b></a>
                          <ul class="dropdown-menu">
                              <li><a href="user_update.php"><i class="icon-cog"></i> Preferences</a></li>
                             
                              <li class="divider"></li>
                              <li><a href="logout.php"><i class="icon-off"></i> Logout</a></li>
                          </ul>
                      </li>
                    <?php } ?>
                </ul>
              </div>
           
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>