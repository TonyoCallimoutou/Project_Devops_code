<?php
  require __DIR__ . '/vendor/autoload.php';
  use Dotenv\Dotenv;

  $dotenv = Dotenv::createImmutable(__DIR__);
  $dotenv->load();

  $conn = mysqli_connect("192.168.96.2", $_ENV["MYSQL_USER"], $_ENV["MYSQL_PASSWORD"], $_ENV["MYSQL_DATABASE"]);
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>
