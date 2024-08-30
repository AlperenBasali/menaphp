<?php
require_once("config.php");
session_start();

// Kullanıcı oturum kontrolü
if (!isset($_SESSION['kullanici_adi']) || $_SESSION['rol'] != 'admin') {
    header("Location: login.php");
    exit();
}

// Ürün silme işlemi
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ürünün resim adını al
    $stmt = $baglanti->prepare("SELECT resim FROM urunler WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($resim_ad);
    $stmt->fetch();
    $stmt->close();

    // Resmi sil
    if ($resim_ad) {
        $resim_yolu = "img/" . $resim_ad;
        if (file_exists($resim_yolu)) {
            unlink($resim_yolu);
        }
    }

    // Ürünü sil
    $stmt = $baglanti->prepare("DELETE FROM urunler WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Ürün başarıyla silindi.";
    } else {
        echo "Ürün silinirken hata oluştu: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Ürün ID'si belirtilmemiş.";
}

$baglanti->close();
?>
