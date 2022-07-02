<h1 style="text-align:center;padding:5px; font-weight: bold;">Welcome to Reading Page</h1>

<div class="row">

 <div class="side">
 <img  class="img-fluid rounded mx-auto d-block" style=" height:600px; box-shadow: 2px 2px 10px black;" src="Resourses\images/<?= $users->b_img;?>" alt="Responsive image">

 </div>
 <div class="main1 rounded mx-auto d-block" >
 <h3 style="text-align: center; margin-top:30px; padding:8px;">Name:- <?= htmlspecialchars($users->b_name);?></h3>
 <h5 style="text-align: center; padding:8px;">Author's name:- <?= htmlspecialchars($users->auth_name);?></h5>
    <h5 style="text-align: center; padding:8px;">Description:-</h5>
    <p style="text-align:justify; padding:8px"><?= htmlspecialchars($users->description)?></p>
    <?php if ( $_SESSION['role'] == 'admin') { ?>
		<center>	<a href="bookedit?b_id=<?php echo($users->b_id); ?>" class="butter1" role="button" aria-pressed="true">Edit</a>
    <button type="button" class="butter" data-bs-toggle="modal" data-bs-target="#myModal1" data-bs-whatever="@mdo">Delete</button></center>
			<?php } ?>
			<form action='/issuebookcont' method="POST" class="issue" >
              <p><span style='color: black';>MARK AS :</span> 
                <label>
              <input name="bid" value='<?= $users->b_id;?>' hidden></label>
              <label style='margin-right:1rem;' >
                  <input id = 'input2' name='action' value='wishlisted' type='radio' required/>
                  <span>Add to Wishlist</span>
              </label>
              <label style='margin-right:1rem;'>
                  <input id='input3' name='action' value='reading'  type='radio' required />
                  <span>Issue a Book</span>
              </label>
                <button type ="submit" class="butter2" name="issue" >SAVE RESPONSE</button>
              </p>
              </form>
				</div>
 </div>
</div>
<div class="modal fade" id="myModal1" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Book</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p style="padding-bottom:16px ;">Are you sure you want to delete Book?</p>
        <form action="/resetpassword" method="POST" id ="resetpass" class="register-form" name ="resetpass" enctype="multipart/form-data">
          <div class="form-group form-button">
          <a  href="bookreading?b_id=<?php echo($users->b_id); ?>"  class="butter1"  rel="noopener noreferrer" role="button" aria-pressed="true">Cancel</a>
          <a href="deletebook?b_id=<?php echo($users->b_id); ?>"   class="butter" rel="noopener noreferrer" role="button" aria-pressed="true" onclick="alertedit()">Sure</a>
                            </div>
        </form>
      </div>
    </div>
  </div>
</div>