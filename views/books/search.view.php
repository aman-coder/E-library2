<h1>Search Found:</h1>

<section class="cards">
<?php foreach($books as $book): ?>
    <div class="card">
      <div class="card__image">
    <img src="Resourses\images/<?= $book->b_img;?>" style=" width: 100%; height:100%">
    </div>
      <div class="card__content">
        <div class="card__title"><?= htmlspecialchars($book->b_name);?></div>
        <div class="card__snippet">
          <?= htmlspecialchars($book->auth_name);?>
        </div>
        <a href="bookreading?b_id=<?= htmlspecialchars($book->b_id);?>" class="card__readmore">Read More</a>
      </div>
    </div>
    <?php endforeach; ?>
</section>