<style>
        body {
            background-color: #001f3f; /* Set your desired background color */
            color: white; /* Set your desired text color */
        }
    </style>
<?php
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
$sql = "SELECT * FROM astro";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table border='1px' style='background-color: #black; color: white;'>
        <tr>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Lokasi</th>
            <th>Lintang</th>
            <th>Bujur</th>
        </tr>";

    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>" . $row["nama"] . "</td>
            <td>" . $row["kategori"] . "</td>
            <td align='right'>" . $row["lokasi"] . "</td>
            <td align='right'>" . $row["lintang"] . "</td>
            <td align='right'>" . $row["bujur"] . "</td>
        </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>