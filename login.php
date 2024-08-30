<?php
require_once("config.php");  
session_start();  

if ($_SERVER["REQUEST_METHOD"] == "POST") {  // Form gönderildi mi kontrol edin
    // Kullanıcı giriş bilgilerini alın ve zararlı kodlara karşı koruma sağlayın
    $kullanici_adi = trim($_POST['kullanici_adi']);
    $sifre = trim($_POST['sifre']);

    // Kullanıcıyı kontrol et
    $stmt = $baglanti->prepare("SELECT * FROM kullanicilar WHERE kullanici_adi = ?");
    $stmt->bind_param("s", $kullanici_adi);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // Kullanıcı var mı ve şifre doğru mu?
    if ($user && password_verify($sifre, $user['sifre'])) {
        // Oturum değişkenlerini ayarlayın
        $_SESSION['kullanici_adi'] = $user['kullanici_adi'];
        $_SESSION['rol'] = $user['rol'];

        if ($user['rol'] == 'admin') {
            header("Location: admin.php");  // Yönetici paneline yönlendirin
            exit();
        } else {
            echo "Bu sayfaya erişim yetkiniz yok.";
        }
    } else {
        echo "Geçersiz kullanıcı adı veya şifre.";
    }

    $stmt->close();
    $baglanti->close();
}
?>

<!-- Giriş Formu -->
<form action="login.php" method="post">
    Kullanıcı Adı: <input type="text" name="kullanici_adi" required><br>
    Şifre: <input type="password" name="sifre" required><br>
    <input type="submit" value="Giriş Yap">
</form>
