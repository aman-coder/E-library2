<?php if(empty($datas)){ ?>
       <center> <h1>OOPS! Nothing Has Been Issued</h1></center>
        <?php } ?>
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
        </div>
        <a href="bookreading?b_id=<?= htmlspecialchars($data->b_id);?>" class="card__readmore">Read More</a>
        <a href="finish?b_id=<?= htmlspecialchars($data->b_id);?>" class="card__readmore">Finish Reading</a>
         </div>
    </div>
    <?php endforeach;?>
</section>