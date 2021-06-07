
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">E-library</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="wishlist">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="booklist">Booklist</a>
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
      <form class="d-flex" method="POST" action="/search" name = "search">
        <input class="form-control me-2" type="search" placeholder="Search" name="name" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" name="search">Search</button>
      </form>
    </div>
  </div>
</nav>
</header>