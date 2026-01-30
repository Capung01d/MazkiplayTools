<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $query = $_POST['query'];
     apiKey = '23ed5b5d4b6f407495cea0dce6aa140a';
      $url = "https://phoneintelligence.abstractapi.com/v1/?api_key=$apiKey&phone=$query";
     response = file_get_contents($url);
      $data = json_decode($response, true);
      echo "Informasi OS: " . json_encode($data);
  }
  ?>
