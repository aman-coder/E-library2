<main>
<section class="main">
    <h1>Welcome</h1>
   
      <p class="main__paragraph1">
        border-box tells the browser to account for any border and padding in the values you specify for an element's width and height. If you set an element's width to 100 pixels, that 100 pixels will include any border or padding you added, and the content box will shrink to absorb that extra width.
      </p>
      <h1>Welcome</h1>
      <p class="main__paragraph2">
        border-box tells the browser to account for any border and padding in the values you specify for an element's width and height. If you set an element's width to 100 pixels, that 100 pixels will include any border or padding you added, and the content box will shrink to absorb that extra width.
      </p>
        <ul>
    <?php foreach($books as $book): ?>
    <li>
    <h2>Name:-<?= htmlspecialchars($book->b_name); ?></h2>
    <h2>Name:-<?= htmlspecialchars($book->auth_name); ?></h2>
    <img src="<?= htmlspecialchars($book->b_img); ?>" alt="">
    </li>
    <?php endforeach;?>
     </ul>
</section>
</main>
   