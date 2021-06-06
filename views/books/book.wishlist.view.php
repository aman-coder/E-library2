<section class="cards">
    <div class="card">
      <div class="card__image">
    <img src="Resourses\images/<?= $df->b_img;?>" style=" width: 100%; height:100%">
    </div>
      <div class="card__content">
        <div class="card__title"><?= htmlspecialchars($df->b_name);?></div>
        <div class="card__snippet">
          <?= htmlspecialchars($df->auth_name);?>
        </div>
        <a href="bookreading?b_id=<?= htmlspecialchars($df->b_id);?>" class="card__readmore">Read More</a>
      </div>
    </div>
    
</section>