<?php
if (isset($_POST['submit'])) {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $nohp = $_POST["nohp"];
    $alamat = $_POST["alamat"];

    // Replace the phone number with your desired WhatsApp number
    $phone_number = "6281330282416";

    // Manual URL encoding for specific characters
    $message = "Nama: " . urlencode($nama) . "%0A Email: " . urlencode($email) . "%0A NO. HP: " . urlencode($nohp) . "%0A ALAMAT: " . urlencode($alamat);

    // WhatsApp API link for opening the WhatsApp app with the pre-filled message
    $wa_link = "https://api.whatsapp.com/send?phone=$phone_number&text=$message";

    // Redirect to the WhatsApp API links
    header("location: $wa_link");
} else {
    echo "<script>alert('Kirim pesan gagal');</script>";
}
?>
