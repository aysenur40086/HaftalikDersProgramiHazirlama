<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kullanıcı adı ve şifre kontrolü
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Burada kullanıcı adı ve şifre kontrolü yapılabilir, örnek bir kontrol:
    // Bu sadece örnek amaçlıdır, gerçek bir uygulamada daha kapsamlı bir doğrulama yapılmalıdır.
    if ($username === "admin" && $password === "12345") {
        // Yönetici ise yönetici paneline yönlendir
        header("Location: admin_panel.php");
        exit;
    } elseif ($username === "hocaisim" && $password === "hocasifre") {
        // Hoca ise hocaların sayfasına yönlendir
        header("Location: hocalar_panel.php");
        exit;
    } elseif ($username === "ogrenciisim" && $password === "ogrencisifre") {
        // Öğrenci ise öğrencilerin sayfasına yönlendir
        header("Location: ogrenciler_panel.php");
        exit;
    } else {
        // Kullanıcı doğrulanamadıysa bir hata mesajı gösterilebilir
        echo "Hatalı kullanıcı adı veya şifre!";
    }
}
?>