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
<nav aria-label="Page navigation example" style="display:flex; justify-content:center">
  <ul class="pagination">
  <?php if($page>1){?>
    <li class="page-item">
      <a class="page-link" href="/booklist?page=<?php echo ($page-1) ;?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <?php }?>
    
    <?php 
    $pp=$_SESSION['total_page'];
    for($i=1;$i<=$pp;$i++): ?>
     <?php if($i==$page){
      $active ="active";
    }else{
      $active = " ";
    } ?>
    <li class="page-item <?php echo "$active";?>"><a class="page-link" href="search?page=<?= $i;?>"><?= $i;?></a></li>
    <?php endfor; ?>
    <?php if($page<$pp){ ?>
    <li class="page-item">
      <a class="page-link" href="booklist?page=<?php echo ($page+1) ;?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
    <?php } ?>
  </ul>
</nav>