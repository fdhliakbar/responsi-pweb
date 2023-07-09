<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mendapatkan data dari form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Simpan ke file
    $data = "Username: " . $username . "\n";
    $data .= "Email: " . $email . "\n";
    $data .= "Password: " . $password . "\n";
    $filename = "userdata.php";
    $file = fopen($filename, "a");
    if ($file) {
        fwrite($file, $data);
        fclose($file);
        echo "Data berhasil disimpan ke file userdata.php";
    } else {
        echo "Gagal menyimpan data ke file";
    }
}
?>