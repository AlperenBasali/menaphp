<?php
require_once("config.php");
session_start();

// Kullanıcı oturum kontrolü
if (!isset($_SESSION['kullanici_adi']) || $_SESSION['rol'] != 'admin') {
    header("Location: login.php"); // Giriş sayfasına yönlendir
    exit();
}

// Ürün ID'sini al
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Veritabanından ürünü al
    $sql = "SELECT * FROM urunler WHERE id = ?";
    $stmt = $baglanti->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Ürün bulunamadı.";
        exit();
    }
} else {
    echo "Geçersiz ürün ID.";
    exit();
}

// Ürün güncelleme işlemi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $baslik = $_POST['baslik'];
    $aciklama = $_POST['aciklama'];

    // Resim yüklendiyse
    if ($_FILES['resim']['name']) {
        $resim_yolu = "" . basename($_FILES["resim"]["name"]);
        move_uploaded_file($_FILES["resim"]["tmp_name"], $resim_yolu);

        // Güncelleme sorgusu
        $sql = "UPDATE urunler SET baslik = ?, aciklama = ?, resim = ? WHERE id = ?";
        $stmt = $baglanti->prepare($sql);
        $stmt->bind_param("sssi", $baslik, $aciklama, $resim_yolu, $id);
    } else {
        // Resim güncellenmeden sadece başlık ve açıklama güncelle
        $sql = "UPDATE urunler SET baslik = ?, aciklama = ? WHERE id = ?";
        $stmt = $baglanti->prepare($sql);
        $stmt->bind_param("ssi", $baslik, $aciklama, $id);
    }

    if ($stmt->execute()) {
        echo "Ürün başarıyla güncellendi!";
        header("Location: admin.php"); // Ürün yönetim paneline geri dön
        exit();
    } else {
        echo "Güncelleme hatası.";
    }
}

$baglanti->close();
?>

<h1>Ürün Düzenle</h1>
<form action="urun_duzenle.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
    Ürün Başlığı: <input type="text" name="baslik" value="<?php echo htmlspecialchars($row['baslik']); ?>" required><br>
    Ürün Açıklaması: <textarea name="aciklama" required><?php echo htmlspecialchars($row['aciklama']); ?></textarea><br>
    Ürün Resmi: <input type="file" name="resim"><br>
    <input type="submit" value="Ürünü Güncelle">
</form>
