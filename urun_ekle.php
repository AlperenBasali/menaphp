<?php
require_once("config.php");
session_start();

// Kullanıcı oturum kontrolü
if (!isset($_SESSION['kullanici_adi']) || $_SESSION['rol'] != 'admin') {
    header("Location: login.php");
    exit();
}

// Ürün ekleme işlemi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $baslik = $_POST['baslik'];
    $aciklama = $_POST['aciklama'];

    // Resim yükleme işlemi
    $resim_ad = $_FILES['resim']['name'];
    $resim_yolu = "img/" . basename($resim_ad);

    if (move_uploaded_file($_FILES['resim']['tmp_name'], $resim_yolu)) {
        // Veritabanına ekle
        $stmt = $baglanti->prepare("INSERT INTO urunler (baslik, aciklama, resim) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $baslik, $aciklama, $resim_ad);

        if ($stmt->execute()) {
            echo "Ürün başarıyla eklendi.";
        } else {
            echo "Ürün eklenirken hata oluştu: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Resim yüklenirken hata oluştu.";
    }
} else {
    echo "Geçersiz istek.";
}

$baglanti->close();
?>
