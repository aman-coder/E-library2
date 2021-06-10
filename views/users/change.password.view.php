<?php $_SESSION['token']=$_GET['token']; ?>
<div class="containerl">
<div class="containerl__wrapper">
<div class="containerl__titleofform">
<h3>Password Change</h3>
</div>
<div class="containerl__contact">
<form action="/resetpassword" method="post" name = "resetpass" enctype="multipart/form-data">
<p>
<label>Password:</label>
<input type="password" name="pass1" id="pass1">
</p>
<input name="token" value='<?php $_SESSION['token'];?>' hidden>
<p>
<label>Confirm Password:</label>
<input type="password" name="confirm" id="confirm">
</p>
<p>
<p class="submit-btn">
<button name="reset" value="Upload">Submit</button>
</p>
</form>
</div>
</div>
</div>