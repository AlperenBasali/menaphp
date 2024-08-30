<?php require_once("config.php"); ?>
<?php include("partials/_nav.php"); ?>
<?php include("partials/_header.php"); ?>

<style>
    .card {
        padding: 2em 2em 0em 2em;
        margin: 1em;
        border-radius: 0%;
        margin-bottom: 50px;
        border: 1px solid black;
    }
    .card img {
        height: 400px;
        object-fit: cover;
        border-radius: 0%;
    }
    .olcu ul {
        display: flex;
        justify-content: space-evenly;
        padding-left: 0;
    }
    .olcu ul li {
        list-style: none;
        background-color: whitesmoke;
        border-radius: 25%;
        padding: .5em;
    }
    .olcu ul li a {
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
            <?php
            // Veritabanından ürünleri güvenli bir şekilde seç
            $stmt = $baglanti->prepare("SELECT * FROM urunler");
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                // Her bir ürün için kart oluştur
                while($row = $result->fetch_assoc()) {
                    echo '<div class="card">';
                    echo '<img src="img/'. htmlspecialchars($row["resim"]) . '" class="card-img-top" alt="yüklenemedi">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . htmlspecialchars($row["baslik"]) . '</h5>';
                    echo '<p class="card-text">' . htmlspecialchars($row["aciklama"]) . '</p>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "<p>Gösterilecek ürün yok.</p>";
            }

            // Bağlantıyı kapat
            $stmt->close();
            $baglanti->close();
            ?>
        </div>
    </section>
</body>

<?php include("partials/_script.php"); ?>
