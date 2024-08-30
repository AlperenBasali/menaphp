
<?php
  $currentPage = basename($_SERVER['PHP_SELF']);
?>




<nav class="navbar navbar-expand-lg ">
        
        <div class="container navcontainer">
            <div class="navLeft">
                <a class="navbar-brand" href="#">MENA</a>
            </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
              <a class="nav-link <?php echo $currentPage == 'index.php' ? 'active' : ''; ?>" href="index.php">HOME</a>
              </li>
              <li class="nav-item">
              <a class="nav-link <?php echo $currentPage == 'urunler.php' ? 'active' : ''; ?>" href="urunler.php">URUNLER</a>
              </li>
              <li class="nav-item">
              <a class="nav-link <?php echo $currentPage == 'hakkimizda.php' ? 'active' : ''; ?>" href="hakkimizda.php">HAKKIMIZDA</a>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  DROPDOWN
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li> -->
            </ul>
            <div class="nav-item"> İLETİŞİM : +90 532 624 83 79</div>
            
          </div>
        </div>
      </nav>