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
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS54088iJjHpn-y9FCxGAh5NBEdHugwIXewWQ&usqp=CAU" style="height: 100%; width: 100% ">
</div>
<div class="card__content">
<div class="card__title">
<h2><?=$_SESSION['username'];?></h2>
</div>
<div class="card__snippet">
<p><?=$_SESSION['email'];?></p>
</div>
<div class="card__readmore">
<a href="deleteuser?u_id=<?= $_SESSION['uid']; ?>" class="butter1"  rel="noopener noreferrer" role="button" aria-pressed="true" >delete</a>
</div>
</div>
</div>
</section>

