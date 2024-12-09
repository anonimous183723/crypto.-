<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $file = $_FILES['payment-proof'];

    // Alamat email penerima
    $to = "yudpepe17@gmail.com";

    // Subjek email
    $subject = "Bukti Pembayaran Baru dari $email";

    // Pesan email
    $message = "Pengguna dengan email $email telah mengunggah bukti pembayaran.";

    // Upload file
    $uploadDir = 'uploads/';
    $filePath = $uploadDir . basename($file['name']);

    if (move_uploaded_file($file['tmp_name'], $filePath)) {
        // Kirim email dengan lampiran
        $headers = "From: noreply@cryptobiz.com";
        $headers .= "\r\nContent-Type: text/plain";

        mail($to, $subject, $message, $headers);

        echo "Bukti pembayaran Anda berhasil dikirim. Terima kasih!";
    } else {
        echo "Terjadi kesalahan saat mengunggah bukti pembayaran.";
    }
}
?>
