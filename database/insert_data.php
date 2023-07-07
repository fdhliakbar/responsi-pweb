<?php
require_once './koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Perform basic form validation
    if (empty($username) || empty($email) || empty($password)) {
        echo "Harap lengkapi semua kolom.";
    } else {
        // Create SQL query
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

        // Execute the query
        if ($conn->query($sql) === TRUE) {
            echo "Registrasi berhasil!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>