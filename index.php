<?php require_once('config.php')?>

<?php include("partials/_header.php")?>

<style>
  /* carousel */
 section{
    margin-top: 70px;
 }
 .carousel{
    height: 400px;
    
 }

 .carousel-inner img {
    height: 400px; /* İstediğin yüksekliği buraya ekle */
    object-fit: cover; /* Görüntüyü kırpmak veya uzatmak yerine düzgün bir şekilde ölçeklendirir */
}

 /* carousel */
</style>
<body>
   
  <?php include("partials/_nav.php")?>

      <section>
        <div class="container">
        <div id="carouselExampleInterval" class="carousel slide w-75 m-auto" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="5000">
                <img src="img/P18709_25.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="..." class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </section>


      
</body>
<?php include("partials/_script.php") ?>
