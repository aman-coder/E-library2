<?php
if (!isset($_SESSION['email'])) {
	?>
	<script type="text/javascript">
		alert("Please login first to access booklist!");
		 window.location.href="/";
		</script>
		<?php
	exit;
}?>
<header>
<center><h3>Welcome To Your Profile Page</h3></center>
</header>
<section class="cards">
<div class="card">
<div class="card__image">
<img src="https://www.searchpng.com/wp-content/uploads/2019/02/Men-Profile-Image-715x657.png" style="height: 100%; width: 100% ">
</div>
<div class="card__content">
<div class="card__title">
<h2><?=$_SESSION['username'];?></h2>
</div>
<div class="card__snippet">
<p><?=$_SESSION['email'];?></p>
</div>
<div class="card__readmore">
<a href="#">delete</a>
</div>
</div>
</div>
</section>

