<section class="cards">
<?php foreach($datas as $data): ?>
    <div class="card">
      <div class="card__image">
      <img src="Resourses\images/<?= $data->b_img;?>" style=" width: 100%; height:100%">
    </div>
      <div class="card__content">
        <div class="card__title"><?= htmlspecialchars($data->b_name);?></div>
        <div class="card__snippet">
          <?= htmlspecialchars($data->auth_name);?>
          <?= htmlspecialchars($data->retun_date);?>
        </div>
         </div>
    </div>
    <?php endforeach;?>
</section>