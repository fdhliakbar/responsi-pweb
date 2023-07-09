<?php
require_once './koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        echo "Harap isi semua kolom.";
    } else {
        // Memeriksa apakah data pengguna ada dalam database
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            // Data pengguna ditemukan, lakukan pemeriksaan password
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($password, $user['password'])) {
                // Password sesuai, izinkan akses ke halaman yang dibutuhkan

                // Lanjutkan dengan tindakan yang diinginkan setelah login berhasil
                echo "Login berhasil!";
            } else {
                echo "Password salah.";
            }
        } else {
            echo "Pengguna tidak ditemukan.";
        }
    }
}
?>