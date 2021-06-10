
<nav class="navbar navbar-expand-sm navbar-light bg-light">
  <div class="container-fluid">
  <?php
if (!isset($_SESSION['email'])) {
	?>
    <a class="navbar-brand" href="/">E-library</a>
   <?php }
 if (isset($_SESSION['email']) && $_SESSION['role'] == 'reader') { ?>
  <a class="navbar-brand" href="booklist">E-library</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbars" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse navbars" id="collapse_target1">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="wishlist">Wishlist</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="reading">Reading</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="finish">History</a>
        </li>
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <?= $_SESSION['username'];?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="profile">Profile</a></li>
            <li><a class="dropdown-item" href="logout">logout</a></li>
          </ul>
        </li>
        </ul>
        </div>
    </nav>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="collapse navbar-collapse navbars" id="collapse_target2">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <form method="POST" class="nav-item dropdown" action="booklist" name="sort">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Sorting         </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><input type='submit' class="dropdown-item" name="A-Z" value="A-Z" ></li>
            <li><hr class="dropdown-divider"></li>
            <li><input type='submit' class="dropdown-item" name="Z-A" value="Z-A" ></li>
          </ul>
        </form>
        </ul>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      
      <form class="d-flex" method="POST" action="/search" name = "search">
        <input class="form-control me-2" type="search" placeholder="Search" name="name" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" name="search">Search</button>
      </form>
      </ul>
      </ul>
    </div>
        </div>
    </nav>

<nav class="navbar navbar-expand-sm navbar-light bg-light">
<?php }  elseif(isset($_SESSION['email']) && $_SESSION['role'] == 'admin') { ?>
  <a class="navbar-brand" href="booklist">E-library</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbars" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse navbars" id="collapse_target1">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="wishlist">Wishlist</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="reading">Reading</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <?= $_SESSION['username'];?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="logout">logout</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="adminform">Admin Ragistration</a></li>
            <li><a class="dropdown-item" href="addbook">AddBook</a></li>
            <li><a class="dropdown-item" href="profile">Profile</a></li>
            <li><a class="dropdown-item" href="adminlist">Adminlist</a></li>
            <li><a class="dropdown-item" href="readerlist">Readerlist</a></li>
            <li><a class="dropdown-item" href="finish">History</a></li>
            
          </ul>
        </li>
        </ul>
        </div>
    </nav>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="collapse navbar-collapse navbars" id="collapse_target2">
        
        <ul class="navbar-nav mx-auto mb- mb-lg-0">
        <a class="navbar-brand" href="booklist">Books</a>
</ul>

            <form method="POST" class="nav-item dropdown" action="booklist" name="sort">
            <ul class="navbar-nav mx-auto mb-3 mb-lg-0">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Sorting         </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><input type='submit' class="dropdown-item" name="A-Z" value="A-Z" ></li>
            <li><hr class="dropdown-divider"></li>
            <li><input type='submit' class="dropdown-item" name="Z-A" value="Z-A" ></li>
          </ul>
        </form>
        
      <!-- </ul> -->
      <ul class="navbar-nav ms-auto mb-4 mb-lg-0">
      <form class="d-flex" method="POST" action="/search" name = "search">
        <input class="form-control ms-2" type="search" placeholder="Search" name="name" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" name="search">Search</button>
      </form>
      </ul>
    </div>
        </div>
        <?php }?>
    </nav>
    </div>