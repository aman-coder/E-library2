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
<section class="edit">
    <div class="preview">
    <img src="Resourses\images/<?=htmlspecialchars($bookedit->b_img);?>" style=" height:600px; box-shadow: 2px 2px 10px black;" alt="">
    </div>
<div class="containerl">
<div class="containerl__wrapper">
<div class="containerl__titleofform">
<h3>Edit Book Details</h3>
</div>
<div class="containerl__contact">
<form action="bookedit?b_id=<?php echo($bookedit->b_id); ?>" method="post" name = "Update" enctype="multipart/form-data">
<p>
<label>Book Name:</label>
<input value="<?=htmlspecialchars($bookedit->b_name);?>" type="text" name="b_name" id="book_name">
</p>
<p>
<label>Auth Name:</label>
<input value="<?=htmlspecialchars($bookedit->auth_name);?>" type="text" name="auth_name" id="auth_name">
</p>
<p>
<label>Cover Image:</label>
<input type="file" name="b_img" id="b_img">
</p>
<p>
<label>Count:</label>
<input type="int" value="<?=htmlspecialchars($bookedit->count);?>" name="count" id="count">
</p>
<p class="description">
<label>Description:</label>
<textarea name="description" id="description" rows="5"><?=htmlspecialchars($bookedit->description);?></textarea>
</p>
<p class="submit-btn">
<button name="Update" value="Upload">Submit</button>
</p>
</form>
</div>
</div>
</div>
</section>