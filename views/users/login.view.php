<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<section class="logins">
        <div class="logins__form-box">
            <div class="logins__button-box">
                <div id="btn"></div>
                <button type="button" class="logins__toggle-btn" onclick="login()">Log-In</button>
                <button type="button" class="logins__toggle-btn" onclick="register()">Register</button>
            </div>
        
        <form action="/login" method="POST" id ="login" class="logins__input-group" name ="login1" enctype="multipart/form-data">
            <input type="email" class="logins__input-field" name="u_email" id="email" placeholder="User Id" required>
            <span class="invalidFeedback">
              <div class="redtext">
                <?php //echo $_SESSION["emailerr"]; ?>
                </div>
            </span>
            <input type="password" class="logins__input-field" name="password" id="password" placeholder="Enter Password" required>
            <span class="invalidFeedback">
              <div class="redtext">
                <?php //echo $_SESSION["passerr"]; ?>
                </div>
            </span>
            <input type="checkbox" class="logins__checkbox" name="check-box" id="check-box"><span>Remember Password</span>
            <button type="submit" name="login1" class="logins__submit-btn">Login-in</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Reset Password
            </button>
            
        </form>
       
        <form action="registration" method="POST" id="register" name="registration" class="logins__input-group"  enctype="multipart/form-data">
        <input type="text" class="logins__input-field" name="u_name" id="u_name" placeholder="User Name" required>
        <span class="invalidFeedback">
              <div class="redtext">
                <?php echo $_SESSION["user"]; ?>
                </div>
            </span>
            <input type="email" class="logins__input-field" name="u_e-mail" id="email" placeholder="User Id" required>
            <span class="invalidFeedback">
              <div class="redtext">
                <?php echo $_SESSION["email"]; ?>
            </div>
            </span>
            <input type="password" class="logins__input-field" name="password" id="password" placeholder="Enter Password" required>
            <span class="invalidFeedback">
            <div class="redtext">
                <?php echo $_SESSION["password"]; ?>
            </div>
            </span>
            <input type="password" class="logins__input-field" name="re_password" id="password" placeholder="Confirm Password" required>
            <span class="invalidFeedback">
            <div class="redtext">
                <?php echo $_SESSION["confirm"]; ?>
                </div>
            </span>
            <input type="checkbox" class="logins__checkbox" name="check-box" id="check-box"><span>Accept all terms and conditions</span>
            <button type="submit" class="logins__submit-btn" name="registration">Register</button>
        </form>
        </div>
    
</section>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <center> <h4 class="modal-title" id="myModalLabel">Please Enter Your E-mail</h4><center>
      </div>
      <div class="modal-body">
        <form action="/resetpassword" method="POST">
		<div class="form-group">
		Enter Email
		<input type="text" name="email" class="form-control">
		</div>
        </div>
        <div class="modal-footer">
        <div class="form-group">
		<input type="submit" name="resetpass" value="Registeration" class="form-control">
		</div>
      </div>
    </div>
  </div>
</div>