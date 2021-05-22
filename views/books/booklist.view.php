<section class="booklist">
<?php foreach($books as $book): ?>
<div class="booklist__cards">
<div class="booklist__image">
<img src="Resourses\images/<?= htmlspecialchars($book->b_img);?>)" alt="Responsive Image"/>
</div>
<div class="booklist__name">
<h4>Name:<?= htmlspecialchars($book->b_name);?></h4>
<h5>Auth-Name:<?= htmlspecialchars($book->auth_name);?></h5>
<h6><?= htmlspecialchars($book->description);?></h6>

</div>
<div class="booklist__des">
<a href="bookreading?b_id=<?= htmlspecialchars($book->b_id); ?>" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Read More</a>
</div>
</div>
<?php endforeach; ?>
</section>