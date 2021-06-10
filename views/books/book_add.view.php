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
<div class="containerl">
<div class="containerl__wrapper">
<div class="containerl__titleofform">
<h3>Add Book Details</h3>
</div>
<div class="containerl__contact">
<form action="add_book" method="post" name = "add" enctype="multipart/form-data">
<p>
<label>Book Name:</label>
<input type="text" name="b_name" id="book_name">
</p>
<p>
<label>Auth Name:</label>
<input type="text" name="auth_name" id="auth_name">
</p>
<p>
<label>Cover Image:</label>
<input type="file" name="b_img" id="b_img" value="Upload">
</p>
<p>
<label>Count:</label>
<input type="int" name="count" id="count">
</p>
<p class="description">
<label>Description</label>
<textarea name="description" id="description" rows="5"></textarea>
</p>
<p class="submit-btn">
<button name="add" value="Upload">Submit</button>
</p>
</form>
</div>
</div>
</div>