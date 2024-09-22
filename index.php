<?php require_once('config.php')?>
<!-- breadcrump yap -->
<!-- içeriğe basınca ayrı sayfaya gitsin urllerini anlaşılır yap örn: /beyazfayans -->
<!-- urunler kısmını geliştir filtre koy sadece fayans olmasın -->
<!-- google site haritası nasıl yapılır kısa gpt -->
<!-- Google SEO Sıralama Faktörleri: 2024 Güncel Rehber | Başarıya Ulaşın! dk 10/13 -->
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
.tanim{
  display: flex;
  justify-content: center;
}
footer .container{
  border-top: 2px solid black;
}
.col-4{
  height: 100px;
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
                <img src="img/P18709_25.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/P18709_25.jpg" class="d-block w-100" alt="...">
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


      <section>
        <div class="container ">
          <p class="tanim" >
          Mena Yapı Malzemeleri olarak 13 yıldır hizmetinizdeyiz. Her türlü fayans seramik tezgah-arası kalekim derz dolgu bulunur. 
          </p>
        </div>
      </section>

      <?php include("partials/_footer.php") ?>

      
</body>
<?php include("partials/_script.php") ?>
