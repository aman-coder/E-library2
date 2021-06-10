<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['err'])) {
    ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong><?php echo $_SESSION['err']; unset($_SESSION['err']); ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
   <?php } ?>
<section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="Resourses/images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="signup" class="form-submit signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign In</h2>
                        <form action="/login" method="POST" id ="login" class="register-form" name ="login1" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi  zmdi-email"></i></label>
                                <input type="e-mail"  name="u_email" id="your_name" placeholder="Your Name" required/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Password" required/>
                            </div>
                            <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="login1" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <div class="social-login">
                        <button type="button" class="form-submit display-flex-center" data-toggle="modal" data-target="#myModal">
                Reset Password
            </button>
                        </div>
                    </div>
                </div>
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
		<input type="text" name="email" class="form-control" required/>
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