<?php
require_once("config.php"); // Veritabanı bağlantısını sağlayan dosya

// Tüm kullanıcıları seç
$sql = "SELECT * FROM kullanicilar";
$result = $baglanti->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $kullanici_adi = $row['kullanici_adi'];
        $sifre = $row['sifre'];

        // Şifre hashlenmemişse hashle ve güncelle
        if (password_get_info($sifre)['algoName'] === 'unknown') {
            $hashed_password = password_hash($sifre, PASSWORD_DEFAULT);

            // Veritabanında güncelle
            $update_sql = "UPDATE kullanicilar SET sifre = ? WHERE kullanici_adi = ?";
            $stmt = $baglanti->prepare($update_sql);
            $stmt->bind_param("ss", $hashed_password, $kullanici_adi);
            $stmt->execute();
            $stmt->close();

            echo $kullanici_adi . " için şifre başarıyla hashlenip güncellendi.<br>";
        }
    }
} else {
    echo "Güncellenecek kullanıcı bulunamadı.";
}

$baglanti->close();
?>
