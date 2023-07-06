<?php
// Mengambil nilai input dari form
include './koneksi.php';

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Menyimpan nilai input ke dalam tabel MySQL
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registrasi berhasil";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>