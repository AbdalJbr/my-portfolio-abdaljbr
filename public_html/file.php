<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    $to = "abdal.jabar@gmail.com"; // Ganti dengan email Anda
    $subject = "Pesan dari " . $name;
    $body = "Nama: $name\nEmail: $email\n\nPesan:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<h2>Email berhasil dikirim.</h2>";
    } else {
        echo "<h2>Gagal mengirim email. Silakan coba lagi.</h2> ";
    }
}

?>