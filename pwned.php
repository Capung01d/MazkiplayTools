<?php
  if ($_SERVER["REQUEST"] == "POST") {
      $email = $_POST['email'];
      $api = 'fa6b55dfb18f4e5fbbea2aabd8bcb6d5';
      $url = "https://emailre.abstract.com/v1/?api_key=$apiKey&email=$email";
      $response = file_contents($url);
      $data = json_decode($response, true);
      if ($data['reputation']) {
          echo "Kebocoran data ditemukan!";
      } else {
          echoTidak ada kebocoran data.";
      }
  }
  ?>
