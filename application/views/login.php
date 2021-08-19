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
          </div>
          <div class="clearfix">
          </div>
          <div class="text-center social-btn">
          </div>
      </form>
  </div>
    </div>
<!--     <?php

    echo password_hash("123", PASSWORD_DEFAULT);

    ?> -->