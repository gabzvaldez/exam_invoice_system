<div class="b1">

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>


<div ng-controller='mainCtrl'>
  <!-- <img src="img/321.jpg" alt="Mountain"> -->
  <div class="login-form">
      <!-- <form action="/examples/actions/confirmation.php" method="post"> -->
      <form method="post" action="<?php echo base_url();?>main/verify_login">
          <h2 class="text-center">Sign in</h2>   
          <div class="form-group">
            <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input type="text" class="form-control" name="username" placeholder="Username" required="required">       
              </div>
          </div>
      <div class="form-group">
              <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                  <input type="password" class="form-control" name="password" placeholder="Password" required="required">       
              </div>
          </div>        
          <div class="form-group">
              <button type="submit" class="btn btn-primary login-btn btn-block">Sign in</button>
              <!-- <a type="submit" href="https://drive.google.com/open?id=1Ib8rfEvMPIyYZtEiOXErlk1rkEZXkNGu" class="btn btn-primary login-btn btn-block" target="_blank">Go to Maam maria's Drive</a> -->
          </div>
          <div class="clearfix">
              <!-- <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label> -->
              <!-- <a href="#" class="pull-right"> or LOGIN</a> -->
          </div>
      <!-- <div class="or-seperator"><i>or</i></div> -->
          <!-- <p class="text-center">Login with your social media account</p> -->
          <div class="text-center social-btn">
              <!-- <a href="#" class="btn btn-primary"><i class="fa fa-facebook"></i>&nbsp; Facebook</a> -->
              <!-- <a href="#" class="btn btn-info"><i class="fa fa-twitter"></i>&nbsp; Twitter</a> -->
        <!-- <a href="#" class="btn btn-danger"><i class="fa fa-google"></i>&nbsp; Google</a> -->
          </div>
      </form>
      <!-- <p class="text-center text-muted small">Don't have an account? <a href="#">Sign up here!</a></p> -->
  </div>
    </div>
<!--     <?php

    echo password_hash("123", PASSWORD_DEFAULT);

    ?> -->