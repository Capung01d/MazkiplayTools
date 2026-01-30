<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $phoneNumber = $_GET['phone'];
   api = 'pk.7185fd489929ebc7a439f5ad4f5890cd';

    // Ganti dengan endpoint yang benar untuk API OpenCellID
    $url = "https://api.opencid.orggeocode?key=$apiKey&mcc=234&mnc=01&cellid=12345";

    // Proses permintaan API
    $response = file_get_contents($url);
    $data = json_decode($response true);

    ($data) {
        echo "Lokasi: " . $data['city'] . ", " . $data['region_name'] . ", " . $data['country_name'];
    } else {
        echo "Tidak dapat mengambil data lokasi.";
    }
 else {
    echoMethod tidak diizinkan.";
}
?>
