<?php
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$lokasi = $_POST['lokasi'];
$lintang = $_POST['lintang'];
$bujur = $_POST['bujur'];

// Sesuaikan dengan setting MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "latihan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO astro (nama, kategori, lokasi, lintang, bujur)
VALUES ('$nama', $kategori, $lokasi, $lintang, $bujur)";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
//header("Location: observ.html");
//exit;
?>