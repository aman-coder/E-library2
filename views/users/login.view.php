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
  <?php if (isset($_SESSION['rest'])) {
    ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong><?php echo $_SESSION['rest']; unset($_SESSION['rest']); ?></strong>
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
                        <button type="button" class="form-submit display-flex-center" data-bs-toggle="modal" data-bs-target="#myModal" data-bs-whatever="@mdo">Reset Password</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reset Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/resetpassword" method="POST" id ="resetpass" class="register-form" name ="resetpass" enctype="multipart/form-data">
          <div class="mb-3">
            <input type="e-mail" name="email" class="form-control" id="email" placeholder="Please Enter your Registered Email address:" required/>
          </div>
          <div class="form-group form-button">
                                <input type="submit" name="resetpass" id="respass" class="form-submit" value="Resetpass"/>
                            </div>
        </form>
      </div>
    </div>
  </div>
</div>