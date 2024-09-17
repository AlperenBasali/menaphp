<?php require_once("config.php") ?>
<?php include("partials/_header.php")?>
<?php include("partials/_nav.php")?>

<?php
// ID parametresini al
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id > 0) {
    // Ürünü veritabanından çek
    $stmt = $baglanti->prepare("SELECT * FROM urunler WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        $error_message = "Ürün bulunamadı.";
    }
    $stmt->close();
} else {
    $error_message = "Geçersiz ürün ID.";
}

$baglanti->close();
?>



<style>
.imgBlock{
    
    width: 100px;
    height: 100px;
    background-color: black;
    margin-bottom: 15px;
}
.bigImg{
    padding: 1em 2em 1em 2em;
        /* margin: 1em; */
        border-radius: 0%;
        /* margin-bottom: 50px; */
        border: 1px solid black;
    
       background-color: white;
    
    width: 100%;
    height: 300px;
    object-fit: cover;
}
</style>

<body>
<div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/menaphp">HOME</a></li>
                <li class="breadcrumb-item"><a href="urunler.php">URUNLER</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo isset($row) ? htmlspecialchars($row["baslik"]) : ''; ?></li>
            </ol>
        </nav>
    </div>
    <div class="section">
        <div class="container">
            <div class="col-12">
                <?php if (isset($row)): ?>
                    <img src="img/<?php echo htmlspecialchars($row["resim"]); ?>" alt="<?php echo htmlspecialchars($row["baslik"]); ?>" class="bigImg">
                <?php else: ?>
                    <p><?php echo isset($error_message) ? htmlspecialchars($error_message) : ''; ?></p>
                <?php endif; ?>
            </div>
            <div class="col-12 d-flex justify-content-around mt-3 ">
                <!-- Örnek küçük resimler (varsa) -->
                <div class="imgBlock"></div>
                <div class="imgBlock"></div>
                <div class="imgBlock"></div>
            </div>
            <div class="col-12 mt-3">
                <?php if (isset($row)): ?>
                    <h1>Urun Rengi: <?php echo htmlspecialchars($row["baslik"]); ?></h1>
                    <p>Açıklaması: <?php echo htmlspecialchars($row["aciklama"]); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>


















<?php include("partials/_script.php")?>


