<?php include("partials/_nav.php") ?>
<?php include("partials/_header.php") ?>


<style>
    .card{
        padding: 2em 2em 0em 2em;
        margin: 1em;
        border-radius: 0%;
        margin-bottom: 50px;
        border: 1px solid black;
        
    }
.card img{
    height: 400px; /* İstediğin yüksekliği buraya ekle */
    object-fit: cover; /* Görüntüyü kırpmak veya uzatmak yerine düzgün bir şekilde ölçeklendirir */
    border-radius: 0%
}
.olcu ul{
    display: flex;
    justify-content: space-evenly;
    padding-left: 0;
}
.olcu ul li{
    list-style: none;
    background-color: whitesmoke;
    border-radius: 25%;
    padding: .5em;
    
}
.olcu ul li a{
    text-decoration: none;
    color: black;
}
</style>

<body>
    <div class="container">
        <div class="olcu">
            <ul class="">
                <li><a href=""><span>45x45</span></a></li>
                <li><a href=""><span>60x120</span></a></li>
                <li><a href=""><span>42x42</span></a></li>
                <li><a href=""><span>30x60</span></a></li>
            </ul>
    </div>
    </div>

    <section>
        <div class="container">
            <div class="card " >
                <img src="img/P18709_25.jpg" class="card-img-top " alt="...">
                <div class="card-body ">
                    <h5 class="card-title">Bej fayans</h5>
                    <!-- <h6 class="card-subtitle mb-2 text-body-secondary">Fiyat <span>TL</span> </h6> -->
                    <p class="card-text">1.kalite desenli Lorem ipsum dolor sit, </p>
                </div>
            </div>

           
        </div>
    </section>
</body>

<?php include("partials/_script.php") ?>
