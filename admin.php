<?php
require_once("config.php");
session_start();

// Kullanıcı oturum kontrolü
if (!isset($_SESSION['kullanici_adi']) || $_SESSION['rol'] != 'admin') {
    header("Location: login.php"); // Giriş sayfasına yönlendir
    exit();
}

// Ürün ekleme ve silme işlemleri burada yapılabilir
?>

<h1>Ürün Yönetim Paneli</h1>
<form action="urun_ekle.php" method="post" enctype="multipart/form-data">
    Ürün Başlığı: <input type="text" name="baslik" required><br>
    Ürün Açıklaması: <textarea name="aciklama" required></textarea><br>
    Ürün Resmi: <input type="file" name="resim" required><br>
    <input type="submit" value="Ürün Ekle">
</form>

<!-- Ürünlerin listelenmesi ve silme işlemleri -->
<?php
// Ürünleri listele
$sql = "SELECT * FROM urunler";
$result = $baglanti->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div>" . htmlspecialchars($row["baslik"]) . " - " . htmlspecialchars($row["aciklama"]) . 
             " <a href='urun_sil.php?id=" . $row["id"] . "'>Sil</a>".
             " <a href='urun_duzenle.php?id=" . $row["id"] . "'>Düzenle</a></div>";
    }
} else {
    echo "Gösterilecek ürün yok.";
}

$baglanti->close();
?>
