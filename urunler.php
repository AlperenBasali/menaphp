<?php require_once("config.php"); ?>
<?php include("partials/_nav.php"); ?>
<?php include("partials/_header.html"); ?>

<style>
.seramik img{
    height: 300px;
    width: 300px;
    border: 1px solid black;
    /* position: static; */
}
.seramik{
  position: relative;
  display: flex;
  height: 300px;
    width: 300px;

    
}
.seramik span{
    position: absolute;
    left: 74px;
    top: 132px;
    font-size: 150%;
    font-weight: 700;
    color: rgb(49, 49, 49);
    
}

</style>

<body>
    <!-- <div class="container">
        <div class="olcu">
            <ul class="">
                <li><a href=""><span>45x45</span></a></li>
                <li><a href=""><span>60x120</span></a></li>
                <li><a href=""><span>42x42</span></a></li>
                <li><a href=""><span>30x60</span></a></li>
            </ul>
        </div>
    </div> -->

    <section>
        <div class="container">
            <div class="row ">
                <div class="col-12 d-flex justify-content-center">
                    <a class="seramik" href="seramik.php">
                        <img src="WhatsApp Image 2024-09-22 at 10.04.31.jpeg" alt="">
                        <span>SERAMİKLER</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</body>

<?php include("partials/_script.php"); ?>
