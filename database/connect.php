<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "delivery_ordering";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query dan penggunaan data dari tabel
$sql = "SELECT * FROM nama_tabel";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Nama: " . $row["nama"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 hasil";
}

// Menutup koneksi
$conn->close();
?>