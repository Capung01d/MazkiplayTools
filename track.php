<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $phoneNumber =POST['phone'];
      $apiKey = 'pk.785fd489929ebc7a439f5ad4f5890cd';
      $url = "https://api.opencellid.org/geocode?key=$Key&mcc=234&mnc=01cellid=12345";
      $response = file_get_contents($url);
      $data = json($response, true);
      echo "Lokasi: " . $data['city'] . ", . $data['region_name'] . ", " . $data['country'];
  }
  ?>
