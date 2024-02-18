<nav class="navbar navbar-expand-lg sticky-top " id="navigation">
  <div class="container">
    <a class="navbar-brand" href="./">
      Bear Games
    </a>
    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./">Home</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PC Games
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./categorie.php?cat=Action">Action</a></li>
            <li><a class="dropdown-item" href="./categorie.php?cat=Avanture">Advanture</a></li>
            <li><a class="dropdown-item" href="./categorie.php?cat=Simulation">Simulation</a></li>
            <li><a class="dropdown-item" href="./categorie.php?cat=Strategy">Strategy</a></li>
            <li><a class="dropdown-item" href="./categorie.php?cat=Sport">Sport</a></li>
          </ul>
        </li>
        <?php if(isset($_SESSION["admin"])):?> 
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./admin.php">Admin Panel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./php_logic/logout.php">Admin Logout</a>
        </li>
       <?php endif;?> 
      </ul>
      <form class="d-flex" role="search" action='./php_logic/search.php'>
        <input class="form-control me-2" type="search" placeholder="Search game" aria-label="Search" name="src">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>

    </div>
  </div>
</nav>