<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<section class="login">
    <div class="login__form-box">
       
<form action="/registration" method="POST" name="registration" class="login__input-group" enctype="multipart/form-data">
<h2><center>Admin</center></h2>
        <input type="text" class="login__input-field" name="u_name" id="u_name" placeholder="User Name" >
        <span class="invalidFeedback">
              <div class="redtext">
                <?php echo $_SESSION["user"]; ?>
                </div>
            </span>

            <input type="email" class="login__input-field" name="u_e-mail" id="email" placeholder="User Id" >
            <span class="invalidFeedback">
              <div class="redtext">
                <?php echo $_SESSION["email"]; ?>
            </div>
            </span>

            <input type="password" class="login__input-field" name="password" id="password" placeholder="Enter Password" >
            <span class="invalidFeedback">
            <div class="redtext">
                <?php echo $_SESSION["password"]; ?>
            </div>
            </span>

            <input type="password" class="login__input-field" name="re_password" id="password" placeholder="Confirm Password" >
            <span class="invalidFeedback">
            <div class="redtext">
                <?php echo $_SESSION["confirm"]; ?>
                </div>
            </span>

            <input type="checkbox" class="login__checkbox" name="check-box" id="check-box"><span>Accept all terms and conditions</span>
            <button type="submit" class="login__submit-btn" name="registration">Register</button>
        </form>
        </div>
</section>