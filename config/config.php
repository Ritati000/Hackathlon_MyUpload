<?php
$serverip = "https://de4b-2003-c9-3707-7701-88d-a06a-3f4d-e916.eu.ngrok.io";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myupload";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}
