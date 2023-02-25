<?php
  $conn = mysqli_connect("192.168.96.2", "tonyo", "password", "animeheaven");
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>