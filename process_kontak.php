<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    // Alamat email penerima
    $to = "yudpepe17@gmail.com";

    // Subjek email
    $subject = "Pesan Baru dari $nama ($email)";

    // Pesan email
    $message = "Nama: $nama\nEmail: $email\n\nPesan:\n$pesan";

    // Header email
    $headers = "From: noreply@cryptobiz.com";

    // Kirim email
    if (mail($to, $subject, $message, $headers)) {
        echo "Pesan Anda berhasil dikirim. Terima kasih telah menghubungi kami!";
    } else {
        echo "Terjadi kesalahan saat mengirim pesan.";
    }
}
?>
