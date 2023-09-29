<?php  include("login.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/nav.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
  <nav class="nav-bar">
                    <div class="navbar-brand"><b>CAREER DIAL</b></div>
                   
                        
                        <ul class="nav-links_lists">
                            <li class="nav-link"><a class="link" style="color=black;" href="index.html">HOME</a></li>
                            <li class="nav-link"><a class="link" style="color=black;" href="about.html">ABOUT</a></li>
                            <li class="nav-link"><a class="link" style="color=black;" href="about.html">VACANCIES</a></li>
                        </ul>

                   <button onclick="document.location='register.php'">SIGN IN</button>
            </nav>
    <div class="container">
       
      <div class="forms-container">

        <div class="signin-signup">
          <form action="login.php" method = "post" class="sign-in-form" name="myForm" >
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name ="username" placeholder="Username" id="logName" />
            </div>
            <?php
            if(isset ($_GET["error"])){?>
              <span id="errorMsg"><?php echo $_GET["error"] ?></span>
           <?php }?>
            <span id="errorMsg"></span>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name = "password" placeholder="Password" id="logPassword" />
            </div> 
            <span id="errorMsg"></span>
            <input type="submit" name = "login"  class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="login.php" method="post" class="sign-up-form"  >
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name ="signName" placeholder="Username" id="signName" />
            </div> <span id="errorMsgs"></span>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name = "signEmail"placeholder="Email" id="signEmail" />
            </div> <span id="errorMsgs"></span>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="signPassword"placeholder="Password" id="signPassword"/>
            </div> <span id="errorMsgs"></span>
            <div class="input-field">
                <i class="fas fa-lock"></i>
            <input type="password"name="signConfPassword" placeholder="Confirm Password" id="signConfPassword"/>
        </div> <span id="errorMsgs"></span>
            <input type="submit" class="btn" name = "registration" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Join us to predict for career!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Welcome back!!
              Are you ready to predict your future?
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
         
        </div>
      </div>
    </div>

    <script src="js/scripts.js"></script>
  </body>
</html>